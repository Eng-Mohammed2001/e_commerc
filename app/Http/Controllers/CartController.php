<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Cart;
use App\Models\Course;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Notifications\NewOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $request->validate([
            'course_id' => 'exists:courses,id'
        ]);
        $course = Course::Find($request->course_id);

        Cart::updateOrCreate([
            'price' => $course->price,
            'course_id' => $request->course_id,
            'user_id' => Auth::id(),
        ], []);
        return redirect()->back()->with('msg', 'Course Added To Cart Successfully')->with('type', 'success');
    }



    public function cart()
    {
        return view('site.cart');
    }
    public function remove_cart($id)
    {
        Cart::destroy($id);
        return redirect()->back();
    }

    public function checkout()
    {
        $total = Auth()->user()->carts()->sum('price');
        if ($total == 0) {
            return redirect()->route('site.shop');
        };

        $url = "https://eu-test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
            "&amount=$total" .
            "&currency=USD" .
            "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);

        $id = $responseData['id'];

        return view('site.checkout', compact('id'));
    }

    public function payment(Request $request)
    {
        $resourcePath = $request->resourcePath;

        $url = "https://eu-test.oppwa.com$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        $code = $responseData['result']['code'];


        // dd(Auth::user()->carts->course_id);
        if ($code == '000.100.110') {
            $amount = $responseData['amount'];
            $transaction_id = $responseData['id'];
            DB::beginTransaction();
            try {
                $order = Order::create([
                    'total' => $amount,
                    'user_id' => Auth::id(),
                ]);

                foreach (Auth::user()->carts as $cart) {

                    OrderItem::create([
                        'price' => $cart->price,
                        'Course_id' => $cart->course_id,
                        'user_id' => $cart->user_id,
                        'order_id' => $order->id,
                    ]);
                    $image = $cart->course->image;
                    $cart->delete();
                }
                Payment::create([
                    'total' => $amount,
                    'user_id' => Auth::id(),
                    'order_id' => $order->id,
                    'transaction_id' => $transaction_id
                ]);
                $zip = new ZipArchive;
                $FileName = 'Order_Courses_' . config('app.name') . '_' . date('Y') . time() . '.zip';
                $file_path = public_path('uploads/courses/');
                if ($zip->open(public_path('download/' . $FileName), ZipArchive::CREATE) === TRUE) {
                    foreach (Auth::user()->carts as $cart) {
                        $image = $cart->course->image;
                        $zip->addFile($file_path . $image, $image);
                    }
                    $zip->close();
                }


                DB::commit();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
            $invname = rand() . rand() . time() . '.pdf';
            Pdf::loadView('pdf.invoice', ['order' => $order])->save('invoices/' . $invname);
            Mail::to(Auth()->user()->email)->send(new InvoiceMail(Auth::user()->name, $invname));
            $user = Auth::user();
            // $order = Order::find(2);
            $user->notify(new NewOrder($order));
            return Response::Download(public_path('download/' . $FileName))->deleteFileAfterSend();
        } else {
            return view('site.fail');
        };
    }
}

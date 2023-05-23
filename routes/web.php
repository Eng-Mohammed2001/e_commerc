<?php

use App\Mail\InvoiceMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\NotificationController;
use App\Models\Order;
use App\Notifications\NewOrder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::prefix('admin')->name('admin.')->middleware('auth', 'user_type', 'verified')->group(function () {
    route::get('/', [AdminController::class, 'index'])->name('index');
    route::resource('categories', CategoryController::class);
    route::resource('users', UserController::class);
    route::resource('courses', CourseController::class);
    route::resource('roles', RoleController::class);
});

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/shop', [SiteController::class, 'shop'])->name('site.shop');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/category/{id}', [SiteController::class, 'category'])->name('site.category');
Route::get('/search', [SiteController::class, 'search'])->name('site.search');
Route::get('/course/{slug}', [SiteController::class, 'course'])->name('site.course');
Route::post('/course/{slug}/review', [SiteController::class, 'course_review'])->name('site.course_review');
Route::get('/down', [SiteController::class, 'down'])->name('down');

Route::post('/add-to-cart', [CartController::class, 'add_to_cart'])->name('site.add_to_cart')->middleware('auth');
Route::get('/cart', [CartController::class, 'cart'])->name('site.cart')->middleware('auth');
Route::get('/cart/{id}', [CartController::class, 'remove_cart'])->name('site.remove_cart')->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkout'])->name('site.checkout')->middleware('auth');
Route::get('/payment', [CartController::class, 'payment'])->name('site.payment')->middleware('auth');
Route::get('/payment/success', [CartController::class, 'success'])->name('site.success')->middleware('auth');
Route::get('/payment/fail', [CartController::class, 'fail'])->name('site.fail')->middleware('auth');
Route::get('/download', [CartController::class, 'download'])->name('site.download')->middleware('auth');
Route::get('/master', function () {
    return view('admin.master');
});


Route::delete('/notify/{id}', [NotificationController::class, 'delete_notify'])->name('delete_notify');
Route::get('/read-all-notify', [NotificationController::class, 'read_all_notify'])->name('read_all_notify');
Route::get('read-notify/{id}', [NotificationController::class, 'read_notify'])->name('read_notify');


// Route

Route::get('/posts-api', [APIController::class, 'posts']);



// Route::get('send-notify', function () {
//     $user = Auth::user();
//     $order = Order::find(2);
//     $user->notify(new NewOrder($order));
// });


// Route::get('/invoice', function () {
//     // return 'hello';

//     // $order = Order::find(2);
//     // return view('pdf.invoice' , compact('order'));
//     // $pdf = Pdf::loadView('pdf.invoice' , ['order' => $order]);
//     // $pdf->save('invoices/invoice22.pdf');
// });

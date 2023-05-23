<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{



    public function read_notify($id)
    {
        Auth::user()->notifications->find($id)->markAsRead();
        return redirect()->back();
    }

    public function read_all_notify()
    {
        Auth::user()->unreadnotifications->markAsRead();
        return redirect()->back();
    }
    public function delete_notify($id)
    {
        Auth::user()->notifications->find($id)->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\EmailNotification;


class EmailHandalilng extends Controller
{
    public function index(){
        return view('notification.notify');
    }
    public function notification(){
        $user = User::find(1);
        $user->notify(new EmailNotification('rakib','Web Journey'));
        return back();
    }
}

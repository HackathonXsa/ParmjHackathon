<?php

namespace App\Http\Controllers;

use App\Models\HackathonUsers;
use App\Notifications\emailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class emailNotificationController extends Controller
{
    public function sendEmailNotificationView(){
        return view('sendEmails');
    }
    public function sendEmailNotification(){
        
        $users = HackathonUsers::all('email');

        
        $inputs = request()->validate([
            'subject'=>'required',
            'body'=>'required'
        ]);
        
        Notification::send($users, new emailNotification($inputs));
        
        session()->flash('post-created-message', 'Email Notifications was sent');
        return view('sendEmails');
    }
}

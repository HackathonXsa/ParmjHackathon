<?php

namespace App\Http\Controllers;

use App\Jobs\sendingJob;
use App\Models\HackathonUsers;
use App\Notifications\emailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class emailNotificationController extends Controller
{
    public function sendEmailNotificationView(){
        $hackathon_users = DB::table('hackathon_users')->select('hackathon_id', 'hackathon_name')->distinct()->get();
        return view('sendEmails')->with('hackathon_users', $hackathon_users);
    }
    public function sendEmailNotification(){
        $hackathon_users = DB::table('hackathon_users')->select('hackathon_id', 'hackathon_name')->distinct()->get();

        $inputs = request()->validate([
            'hackathon_select'=>'required',
            'subject'=>'required',
            'body'=>'required'
        ]);
        if ($inputs['hackathon_select'] == 'all'){
            $users = HackathonUsers::all('email');
        } else {
            $users = HackathonUsers::where('hackathon_id', $inputs['hackathon_select'])->get('email');;
        };
        
        foreach($users as $user){
            //$user->notify(new emailNotification($inputs));
            dispatch(new sendingJob($user, $inputs));
        };
        
        //Notification::sendNow($users, new emailNotification($inputs));
        
        session()->flash('post-created-message', 'Email Notifications was sent');
        return view('sendEmails')->with('hackathon_users', $hackathon_users);
    }
}

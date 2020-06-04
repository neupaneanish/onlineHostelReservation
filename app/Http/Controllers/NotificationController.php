<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use App\Notifications\NotificationPortal;

class NotificationController extends Controller
{
    //
    public function __construct()

    {

        $this->middleware('auth');

    }

    public function index()

    {

        return view('home');

    }
    public function sendNotification()

    {

        $user = User::first();



        $details = [

            'greeting' => 'Hi Artisan',

            'body' => 'This is my first notification from ItSolutionStuff.com',

            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

            'actionText' => 'View My Site',

            'actionURL' => url('/'),

            'order_id' => 101

        ];


        $user->notify(new NotificationPortal($details));
        // Notification::send($user, new NotificationPortal($details));



        dd('done');

    }
}

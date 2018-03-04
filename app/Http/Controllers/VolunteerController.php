<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Mail\VolunteerNotification;

class VolunteerController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Volunteer::create(request()->all());

      try {

          $this->sendMail(request()->all());

      } catch (\Exception $e) {
          return back()->withFail('Sending Mail Failed, this is a problem with your internet connection, please try agin later');
      }

      return back()->withSuccess("Thanks for Volunteering $request->first_name $request->last_name , you shall be contacted shortly");
    }

    public function sendMail($data)
    {
        $recepient = ['hackshadetechs@gmail.com'];
        Mail::to($recepient)->send(new VolunteerNotification($data));
    }
}

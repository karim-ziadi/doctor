<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    function send(Request $request){
        // dd($request->all());
        $this->validate($request , [
            'name' => 'required',
            'email' => 'required |email',
            'date' => 'required | date',
            'phone' => 'required',
            
        ]);
     
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'date'      =>  $request->date,
            'phone'      =>  $request->phone,
           
        );
        

Mail::send(['text'=>'email'], $data, function($message) {
         $message->to('karim.ziadi55@gmail.com', 'Tutorials Point')->subject
            ('Nouveaux Rendez-vous');
      
      });
      return redirect('/')->with('success', 'Thanks for contacting us!');}
}

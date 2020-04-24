<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {

      //create validatation
      $this->Validate($request,[
        'name'=>'required',
        'email'=>'required'
      ]);

    // create a new Message
    $message = new Message;
    $message->name=$request->input('name');
    $message->email=$request->input('email');
    $message->message=$request->input('message');
    $message->save();

    //with a key ('success') is pass to a session with same key
    return redirect('/')->with('success','Message sent');
    }

    public function getMessages()
    {
      $messages= Message::all();

      return view('messages')->with('messages',$messages);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Mail\NewLead;
use Illuminate\Support\Facades\Mail;


class FrontPagesController extends Controller
{
    //

    public function sendLeadEmail(Request $request){
        $msg = new Message();

        $msg->name = $request->input('name');
        $msg->email = $request->input('email');
        $msg->phone = $request->input('phone');
        $msg->content = $request->input('message');
        $msg->url = $request->input('url');

        $msg->save();

        $email = Mail::to('erick@punto401.com');

        //$email->bcc('erick@punto401.com');
        
        $email->send(new NewLead($msg));
        

        return redirect()->back()->with('message', 'Gracias, su mensaje ha sido enviado');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
     /*   $request->validate([
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
           'message'=>'required',
        ]);
*/
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subjet,
            'message'=>$request->message,
        ];

      //  \Monolog\Handler\mail('edsonchivambo@gmail.com',$data['subjet'], $data['message']);

        Mail::send('mail.email', $data, function ($msg) use ($data){
            //$msg->from('providers.contact.form@gmail.com');
            //$msg->to('edsonchivambo@gmail.com');
            $msg->from($data['mail'], $data['name']);
            $msg->to('edsonchivambo@gmail.com');
            $msg->subject($data['subject']);
        });

        return 'Enviada com sucesso1';
      /*
        Mail::send('welcome', $request->all(), function ($msg){
            $msg->to('edsonchivambo@gmail.com');
        });
        return 'Enviado com sucesso!';
      */
    }
}

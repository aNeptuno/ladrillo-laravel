<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    
    public function sendEmail(ContactFormRequest $request){

        /* $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify' , [
            'secret' => '6LeTNWYjAAAAAIP_jSuRL1CwrWc_DbYUdoo19XrU',
            'response' => $request->input('g-recaptcha-response')
        ])->object();

        if($response->success && $response->score >= 0.7){

        }; */

        /* METÓDO 1
        $request->validate([
            'name'  =>'required',
            'email' =>'required|email',
            'msg'   =>'required',
            'subj'  =>'required',
        ]); */

        /* MÉTODO 2
        $validate = Validator::make($request->all(),[
            'name'  =>'required',
            'email' =>'required|email',
            'msg'   =>'required',
            'subj'  =>'required',
        ],[
            'name.required'     => 'Ingrese su nombre.',
            'email.required'    => 'Ingrese su email.',
            'msg.required'      => 'Escriba un mensaje.',
            'subj.required'     => 'Ingrese el asunto.',
            'email.email'       => 'Email incorrecto.',
        ]);
        if($validator->fails()){
            return back()->withErrors($validate->errors())->withInput();
        } */

        $details = [
            'name'  =>$request->name,
            'email' =>$request->email,
            'msg'   =>$request->msg,
            'subj'  =>$request->subj
        ];

        Mail::to('amigatechuy@gmail.com')->send(new ContactMail($details));

        return redirect(url()->previous().'#contacto')->with('message_sent','Mensaje enviado correctamente!');
    }
}


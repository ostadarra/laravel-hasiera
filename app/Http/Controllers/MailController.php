<?php

namespace App\Http\Controllers;

use App\Mail\EjemploMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        return view('mail');
    }

    public function enviarEmail(){
        //Mail::to('pepito@gmail.com')->send(new EjemploMail('Pepito'))->attach($miArchivo);
        Mail::to('pepito@gmail.com')->send(new EjemploMail('Pepito'));
        return view('mails.enviado');
    }
}

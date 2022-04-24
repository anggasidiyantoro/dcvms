<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){

        $details = [
        'body' => 'Ada request visitor masuk ke Data Center Technovillage atas nama anu tanggal sekian. Mohon Konfirmasinya.'
        ];

        $emails = ['angga@antmediahost.com', 'anggasidiyantoro31@gmail.com', 'team@semutdata.co.id'];
       
        Mail::to($emails)->send(new \App\Mail\MyTestMail($details));
       
        dd("Email sudah terkirim.");
    
        }
}

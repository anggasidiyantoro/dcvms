<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'id' => '',
            'schedule' => 'required',
            'name' => 'required|max:100',
            'id_card' => 'required',
            'ktp' => 'image|file|max:1024',
            'email' => 'required',
            'phone' => 'required|max:15',
            'company' => 'required|max:100',
            'reason' => 'required|max:100',
            'description' => 'required|max:100'
        ]);

        $validatedData['status'] = "0";
        // dd($validatedData);
        if($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        Register::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please Login');
        $details = [
            'body' => 'Ada request visitor masuk ke Data Center Technovillage atas nama ' .$validatedData['name']. ' dari ' .$validatedData['company']. ' tanggal ' .$validatedData['schedule']. '. Mohon Konfirmasinya.'
            ];
    
            $emails = ['angga@antmediahost.com', 'anggasidiyantoro31@gmail.com'];
           
            Mail::to($emails)->send(new \App\Mail\RegisterMail($details));

        return redirect('/')->with('success', 'Registration successfull! Please Login');
    }
}

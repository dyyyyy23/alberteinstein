<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'subject' => 'required|max:255',
        'message' => 'required'
    ]);

    try {
        Mail::to('your-email@example.com')->send(
            new ContactFormMail($request->all())
        );
        
        return back()->with('success', 'Pesan berhasil dikirim!');
    } catch (\Exception $e) {
        return back()->with('error', 'Gagal mengirim pesan: '.$e->getMessage());
    }
}
}
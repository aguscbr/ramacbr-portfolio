<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->to(url('/').'#contacto')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        Mail::to(env('MAIL_TO_ADDRESS'))->send(
            new ContactMail(
                senderName: $validated['name'],
                senderEmail: $validated['email'],
                body: $validated['message']
            )
        );

        return redirect()->to(url('/').'#contacto')->with('success', '¡Mensaje enviado! Te respondo a la brevedad.');
    }
}

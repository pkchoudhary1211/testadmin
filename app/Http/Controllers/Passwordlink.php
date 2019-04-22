<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Passwordlink extends Controller
{
    public function sendEmail()
    {
        $credentials = ['email' => $email_address];
        $response = Password::sendResetLink($credentials, function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('status', trans($response));
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class MailSendController extends Controller
{
    public function inquiry(ContactRequest $request){

        $to = 'masdes210@yahoo.co.jp';
        $params = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'iquiry' => $request->iquiry
        ];

        Mail::to($to)->send(new SendMail($params));
        return response()->json([
            'result' => true,
            'errors' => []
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailboxFormRequest;
use App\Mail\MailboxForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailboxController extends Controller
{
    public function mailbox(MailboxFormRequest $request)
    {
        Mail::to('kwpracticas@gmail.com')->send(new MailboxForm($request));
        return response()->json($request);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactFormRequest $request) {
        Mail::to('kwpracticas@gmail.com')->send(new ContactForm($request));
        return response()->json($request, 200);
    }
}

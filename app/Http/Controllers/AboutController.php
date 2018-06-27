<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller {

    public function create()
    {
        return view('iphone');
    }

    public function store(ContactFormRequest $request)
    {

        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'request' => $request->get('request'),
                'zip' => $request->get('zip')
            ), function($message)
        {
            $message->from('codeyworley@gmail.com');
            $message->to('codeyworley@gmail.com', 'Admin')->subject('Customer Request');
        });

        return redirect()->back()->with('message', 'Thank you for choosing iTech. We will be in touch as soon as possible.');

    }
}

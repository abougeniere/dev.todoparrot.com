<?php namespace todoparrot\Http\Controllers;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

use Illuminate\Http\Request;
use todoparrot\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{

    public function create()
    {
        return view('about.contact');
    }


    public function store(ContactFormRequest $request)
    {
        // var_dump($request);die;
        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function ($message) {
                $message->from('abougeniere@yahoo.fr');
                $message->to('abougeniere@yahoo.fr', 'Admin')
                    ->subject('TODOParrot Feedback');
            });

        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting us!');
    }

}

<?php
 
namespace App\Http\Controllers;

use Mail;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact= Contact::all();
        return view('contact')->with('contact', $contact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            Mail::send('contact-message', [
                'msg' => $request->message
            ], function ($mail) use($request) {
                $mail->from($request->email, $request->nom);

                $mail->to('jean.emmery.ynov@gmail.com')->subject('Contact Message');
            });
    


        $inputs = $request->except('_token');
        $contact = new Contact();
        foreach ($inputs as $key => $value) {
            $contact->$key = $value;
        }
        $contact->save();

        return redirect()->back()->with('flash_message', 'Message envoyé !');
    }
}
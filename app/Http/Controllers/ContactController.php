<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        $Contacts = Contact::orderBy('id' , 'desc')->get();
        return view('dashboard/contacts', compact('Contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate database

        $validated = $request->validate(
            [
                'name'          => 'required|regex:/^[a-zA-Z-]+$/u|max:255',
                'number'         => 'required|digits_between:7,20',
                'email'         => 'required|email:rfc,dns',
                'message'       => 'required',

            ],
            [
                'regex' => 'Spaces is not allowed in name',
            ]
        );

            // Insert new user into databasex
            $insert_message = new Contact;
            $insert_message->name           = $request->name;
            $insert_message->number         = $request->number;
            $insert_message->email          = $request->email ;
            $insert_message->message        = $request->message;

            $insert_message->save();
            return redirect('Contact')->with('message', 'Your message has been sent.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteMessage = Contact::findorFail($id);
        $deleteMessage->delete();
        return redirect('/dashboard/contacts');
    }
}

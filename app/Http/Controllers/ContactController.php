<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        // dd($contacts);
        return view('contact.index')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Contact::create($input);
        return redirect('/');
    }

    public function show($id)
    {
        $information=Contact::find($id);
        return view('contact.show')->with('contact', $information);
    }

    public function edit($id)
    {

        $data=Contact::find($id);
        return view('contact.edit')->with('contact', $data);
    }

    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $input=$request->all();
        $contact->update($input);
        return redirect('/');
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('/');
    }
}

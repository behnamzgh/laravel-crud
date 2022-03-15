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
        $data = $request->all();
        // dd($data['name']);
        Contact::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
        ]);
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
        return hi;
    }

    public function destroy($id)
    {
        //
    }
}

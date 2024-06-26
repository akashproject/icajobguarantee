<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    /**
     * Display a listing  of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            $contacts = Contact::all();      
            return view('administrator.contacts.index',compact('contacts'));
        } catch(\Illuminate\Database\QueryException $e){

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            return view('administrator.contacts.show',compact('contact'));
        } catch(\Illuminate\Database\QueryException $e){

        }
    }
}

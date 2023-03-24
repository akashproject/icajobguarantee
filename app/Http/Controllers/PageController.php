<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class PageController extends Controller
{
    public function index($slug)
    {
        try {
            $contentMain = Page::where('slug', $slug)->where('status', 1);
            $contentMain = $contentMain->firstOrFail();
            return view("page.".$contentMain->template,compact('contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function saveContact(Request $request){
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'message' => 'required',
            ]);
           
            Contact::create($data);

            return redirect()->back()->with('message', 'Request has been submitted successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($e);
        }
    }
}

<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
    public function index()
    {
        try {
            $authors = Author::all();
            return view('administrator.authors.index',compact('authors'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.authors.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $author = Author::findorFail($id);
            return view('administrator.authors.show',compact('author'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
            ]);
           
            if($data['author_id'] <= 0){
                Author::create($data);
            } else {
                $institute = Author::findOrFail($data['author_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Author updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}

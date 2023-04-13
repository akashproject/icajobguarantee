<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Author;
use App\Models\Tag;

class BlogController extends Controller
{
    //
    public function index()
    {
        try {
            $blogs = Blog::all();
            return view('administrator.blogs.index',compact('blogs'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            $authors = Author::all();
            return view('administrator.blogs.add',compact('authors'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $authors = Author::all();
            $blog = Blog::findorFail($id);
            if ($blog->tags != '') {
                $blog->tags = Tag::select('id','name')->whereIn("id",json_decode($blog->tags))->get();
            }
            return view('administrator.blogs.show',compact('blog','authors'));
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
           
            if($data['blog_id'] <= 0){
                Blog::create($data);
            } else {
                $institute = Blog::findOrFail($data['blog_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Blog updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}

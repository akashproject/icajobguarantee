<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;

class BlogController extends Controller
{
    //
    public function view($slug)
    {
        try {
            $contentMain = Blog::where('slug', $slug)->first();
            if ($contentMain->tags) {
                $contentMain->tags = Tag::select('name','slug')->whereIn("id",json_decode($contentMain->tags))->get();
            }
            return view('blogs.view',compact('contentMain'));
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }   
        
    }
}

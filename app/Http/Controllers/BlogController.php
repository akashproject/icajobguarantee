<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Category;

class BlogController extends Controller
{
    //
    public function view($slug)
    {
        try {
            $contentMain = Blog::where('slug', $slug)->first();
            $tranding = Blog::orderBy("id", "DESC")->take(10)->get();

            if ($contentMain->tags) {
                $contentMain->tags = Tag::select('name','slug')->whereIn("id",json_decode($contentMain->tags))->get();
            }
            $contentMain->categories = Category::select('name','slug')->whereIn("id",array(1,2))->get();
            if ($contentMain->category_id) {
                $contentMain->categories = Category::select('name','slug')->whereIn("id",json_decode($contentMain->category_id))->get();
            }

            $previous = Blog::where('id', '>', $contentMain->id)->orderBy('id','asc')->first();
            $next = Blog::where('id', '<', $contentMain->id)->orderBy('id','desc')->first();

            return view('blogs.view',compact('contentMain','previous','next','tranding'));
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }   
    }

    public function getByTags($slug)
    {
        try {
            $contentMain = Tag::where('slug', $slug)->first();
            $id = $contentMain->id;
            $blogs = Blog::where('tags', 'like', '%"' . $id . '"%')->orderBy('name', 'asc')->get();
            return view('blogs.index',compact('contentMain','blogs'));
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }   
    }

    public function getByCategory($slug)
    {
        try {
            $contentMain = Category::where('slug', $slug)->first();
            $id = $contentMain->id;
            $blogs = Blog::where('category_id', 'like', '%"' . $id . '"%')->orderBy('name', 'asc')->get();
            return view('blogs.index',compact('contentMain','blogs'));
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }   
    }
}

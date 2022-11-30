<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        try {
            $blogs = Blog::where('status', 1)->get();

            return view('blogs.index',compact('blogs'));
        } catch(\Illuminate\Database\QueryException $e){
           
        }
        
    }
}

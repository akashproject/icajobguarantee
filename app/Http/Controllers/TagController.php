<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Course;
class TagController extends Controller
{
    //
    public function index($slug){
        try {
            $contentMain = Tag::where('slug', $slug)->first();
            $id = $contentMain->id;
            $contents = Blog::where('tags', 'like', '%"' . $id . '"%')->orderBy('name', 'asc')->paginate(10);
            return view('tags.index',compact('contentMain','contents'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}

<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        try {
            $newses = News::all();
            return view('administrator.newses.index',compact('newses'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }
 
    public function add() {
        try {
            return view('administrator.newses.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
 
    public function show($id)
    {
        try {
            $news = News::findorFail($id);
            return view('administrator.newses.show',compact('news'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }
 
    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'link' => 'required',
            ]);
            if($data['news_id'] <= 0){
                News::create($data);
            } else {
                $news = News::findOrFail($data['news_id']);
                $news->update($data);
            }
            return redirect()->back()->with('message', 'News updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = News::findOrFail($id);
        $course->delete();
        return redirect('/administrator/newses');
    }
}

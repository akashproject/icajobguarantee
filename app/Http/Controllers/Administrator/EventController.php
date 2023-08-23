<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Center;

class EventController extends Controller
{
    public function index()
     {
        try {
            $events = Event::all();
            return view('administrator.events.index',compact('events'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }
 
    public function add() {
        try {
            $center = Center::all();
            return view('administrator.events.add',compact('center'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
         
    }
 
    public function show($id)
    {
    try {
            $authors = Author::all();
            $category = Category::all();
            $event = Event::findorFail($id);
            $event->category_id = json_decode($event->category_id);
            if ($event->tags != '') {
                $event->tags = Tag::select('id','name')->whereIn("id",json_decode($event->tags))->get();
            }
            return view('administrator.events.show',compact('event','authors','category'));
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
            if($data['event_id'] <= 0){
                Event::create($data);
            } else {
                $event = Event::findOrFail($data['event_id']);
                $event->update($data);
            }
            return redirect()->back()->with('message', 'Event updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
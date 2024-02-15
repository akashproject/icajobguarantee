<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventType;

class EventTypeController extends Controller
{
    public function index()
    {
        try {
            $eventType = EventType::all();
            return view('administrator.eventType.index',compact('eventType'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
        
    }

    public function show($id)
    {
        try {
            $eventType = EventType::find($id);
            $listEventType = EventType::all();

            return view('administrator.eventType.show',compact('eventType','listEventType'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'status' => 'required',
                'utm_campaign' => 'required',
                'utm_source' => 'required',
            ]);

            if($data['event_type_id'] <= 0){
                EventType::create($data);
            } else {
                $institute = EventType::findOrFail($data['event_type_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = EventType::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }
}
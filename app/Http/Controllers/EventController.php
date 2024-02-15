<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Center;
use App\Models\Assessment;

class EventController extends Controller
{
    //
    public function index($slug,Request $request)
    {
        try {
            $contentMain =  DB::table('events')
            ->join('centers', 'centers.id', '=', 'events.center_id')
            ->leftJoin('event_types', 'event_types.id', '=', 'events.event_type_id')
            ->leftJoin('assessments', 'assessments.event_id', '=', 'events.id')
            ->where('events.slug', $slug)
            ->where('events.status', "1")
            ->select('events.*','event_types.*', 'events.name as event','centers.name as center','centers.id as center_id','centers.slug as center_slug','assessments.id as assessment_id')
            ->first();
            
            $center = isset($contentMain->center)?$contentMain->center:'';
            $enableAssessment = isset($contentMain->assessment_id)?$contentMain->assessment_id:'';
            

            if ($contentMain === null) {
                return redirect('/events');
            }
            return view("events.view",compact('contentMain','center','enableAssessment'));

        } catch(\Illuminate\Database\QueryException $th){
            throw $th;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Center;

class EventController extends Controller
{
    //
    public function index($slug,Request $request)
    {
        try {
            $contentMain =  DB::table('events')
            ->join('centers', 'centers.id', '=', 'events.center_id')
            ->where('events.slug', $slug)
            ->where('events.status', "1")
            ->select('events.*', 'events.name as event','centers.name as center','centers.id as center_id','centers.slug as center_slug')
            ->first();
            if ($contentMain === null) {
                return redirect('/events');
            }
            return view("events.view",compact('contentMain'));

        } catch(\Illuminate\Database\QueryException $th){
            throw $th;
        }
    }
}

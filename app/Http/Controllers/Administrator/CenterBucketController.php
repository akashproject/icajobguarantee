<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\CenterBucket;

class CenterBucketController extends Controller
{
    //
    public function index() {
        try {
            $buckets = CenterBucket::all();
            return view('administrator.buckets.index',compact('buckets'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }
 
    public function add() {
        try {
            $centers = Center::orderBy('name')->get();;
            return view('administrator.buckets.add',compact('centers'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
         
    }
 
    public function show($id)
    {
        try {
                $center = Center::orderBy('name')->get();;
                $bucket = CenterBucket::findorFail($id);
                $bucket->center_id = json_decode($bucket->center_id);
                return view('administrator.buckets.show',compact('bucket','center'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }
 
    public function save(Request $request) {
        try {
            $data = $request->all();

            $validatedData = $request->validate([
                'name' => 'required',
                'center_id' => 'required',
            ]);
            $data['center_id'] = json_encode($data['center_id']);

            // print_r($data);
            // exit;
            if($data['bucket_id'] <= 0){
                CenterBucket::create($data);
            } else {
                $bucket = CenterBucket::findOrFail($data['bucket_id']);
                $bucket->update($data);
            }
            return redirect()->back()->with('message', 'CenterBucket updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = CenterBucket::findOrFail($id);
        $course->delete();
        return redirect('/administrator/buckets');
    }
}

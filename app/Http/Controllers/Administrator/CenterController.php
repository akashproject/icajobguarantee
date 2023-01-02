<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\State;
use App\Models\City;

class CenterController extends Controller
{

    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index()
    {
        try {
            $centers = Center::all();
            return view('administrator.centers.index',compact('centers'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        try {
            $states = State::all();
            return view('administrator.centers.add',compact('states'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $center = Center::find($id);
            $states = State::all();
            $cities = City::where('state_id', $center->state_id)->orderBy('name', 'asc')->get();
            return view('administrator.centers.show',compact('center','states','cities'));
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
                'state_id' => 'required',
            ]);

            if($data['center_id'] <= 0){
                Center::create($data);
            } else {
                $institute = Center::findOrFail($data['center_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }


    public function getCitiesByStateId(Request $request){
        try {
            $data = $request->all();
            $cities = City::where('state_id', $data['state_id'])->orderBy('name', 'asc')->get();
            return response()->json($cities,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

}

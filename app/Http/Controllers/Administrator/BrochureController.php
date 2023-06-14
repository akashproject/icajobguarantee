<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Brochure;

class BrochureController extends Controller
{
    //
    public function index()
    {
        try {
            $brochures = Brochure::all();
            return view('administrator.brochures.index',compact('brochures'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {       
        return view('administrator.brochures.add');
    }

    public function show($id)
    {
        try {
            $brochure = Brochure::findOrFail($id);
            return view('administrator.brochures.show',compact('brochure'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'attachment' => 'required',
            ]);
            if($data['brochure_id'] <= 0){
                Brochure::create($data);
            } else {
                $brochure = Brochure::findOrFail($data['brochure_id']);
                $brochure->update($data);
            }
            return redirect()->back()->with('message', 'Brochure updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Brochure::findOrFail($id);
        $course->delete();
        return redirect('/administrator/brochures');
    }
}

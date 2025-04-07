<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lam;

class LamController extends Controller
{
   //
   public function index()
   {
       try {
           $lams = Lam::all();
           return view('administrator.lams.index',compact('lams'));

       } catch(\Illuminate\Database\QueryException $e){
           //throw $th;
       }        
   }

   public function add() {
       try {
           return view('administrator.lams.add');
       } catch(\Illuminate\Database\QueryException $e){
           //throw $th;
       }
       
   }

   public function show($id)
   {
       try {
           $lam = Lam::findorFail($id);
           return view('administrator.lams.show',compact('lam'));
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
          
           if($data['lam_id'] <= 0){
               Lam::create($data);
           } else {
               $institute = Lam::findOrFail($data['lam_id']);
               $institute->update($data);
           }
           return redirect()->back()->with('message', 'Lam updated successfully!');
       } catch(\Illuminate\Database\QueryException $e){
           var_dump($e->getMessage()); 
       }
   }

    public function delete($id) {
       $course = Lam::findOrFail($id);
       $course->delete();
       return redirect()->back()->with('message', 'Lam deleted successfully!');
    }
}

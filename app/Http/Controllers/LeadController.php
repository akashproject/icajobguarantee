<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    //
    public function save(Request $request)
    {
        //
        try {
            $data = $request->all();
            exit;

            $validatedData = $request->validate([
                'reviewer_name' => 'required',
                'reviewer_email' => 'required',
                'review' => 'required',
            ]);

            $review = Review::create($data);

            return response()->json($review,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}

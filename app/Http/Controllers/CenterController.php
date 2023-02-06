<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;

class CenterController extends Controller
{
    //
    public function index()
    {
        try {

            $centers = Center::where('status', 1)->get();
            return view('centers.index',compact('centers'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    
}

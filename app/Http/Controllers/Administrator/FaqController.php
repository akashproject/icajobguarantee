<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //
    public function index()
    {
        try {

            $faqs = Faq::where('status', 1)->get();
            return view('administrator.faq.index',compact('faqs'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function add() {
        
        return view('administrator.faq.add');
    }
}

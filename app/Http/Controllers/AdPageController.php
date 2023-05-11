<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adspage;

class AdPageController extends Controller
{
    public function index($slug)
    {
        try {
            //echo $slug; exit;
            $contentMain = Adspage::where('slug', $slug)->firstOrFail();

            if ($contentMain->center_id) {
                # code...
                echo $contentMain->center_id;
            }
            //$contentMain = Adspage::all();
            //$contentMain = $contentMain->firstOrFail();
            //print_r($contentMain->template); exit;
            return view("adPage.".$contentMain->template,compact('contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AffiliateController extends Controller
{
    //
    public function dashboard($slug)
    {

        return view('affiliates.dashboard');
    }

    public function registration(Request $request)
    {
        try {
            $data = $request->all();
            print_r($data);

            exit;
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($th);
        }
    }
}

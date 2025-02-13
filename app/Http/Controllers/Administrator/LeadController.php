<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function classroomLeads()
    {
        try {
            $leads = Lead::all();
            dd($leads);
            //return view('administrator.leads.classroom-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function localStoredLeads()
    {
        try {
            $leads = [];
            return view('administrator.leads.local-storage-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function franchiseLeads()
    {
        try {
            $leads = [];
            return view('administrator.leads.franchise-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}

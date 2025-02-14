<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function classroomLeads()
    {
        try {
            $leads = Lead::where('role','b2c')->limit('1000')->orderBy('id','desc')->get();
            return view('administrator.leads.classroom-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function localStoredLeads()
    {
        try {
            $leads = Lead::where('role','b2c')
            ->where('otp_status','1')
            ->where('crm_status','0')
            ->limit('1000')->orderBy('id','desc')->get();
            return view('administrator.leads.local-storage-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function franchiseLeads()
    {
        try {
            $leads = Lead::where('role','b2b')->limit('1000')->orderBy('id','desc')->get();
            return view('administrator.leads.franchise-leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}

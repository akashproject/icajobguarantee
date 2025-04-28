<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

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

    public function backLogLeads(){
        try {
            $leads = DB::table('leads')
                ->whereNot('otp_status','1')
                ->groupBy('mobile')
                ->havingRaw("crm_status != '1'")
                ->orderBy('id', 'ASC')->get();
            return view('administrator.leads.backlog',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function exportLeads($type){
        try {
            
            switch ($type) {
                case 'local':
                    $leads = DB::table('leads')
                    ->where('otp_status','1')
                    ->where('crm_status','0')
                    ->orderBy('id', 'DESC')->get();
                    break;
                case 'all':
                    $leads = DB::table('leads')
                    ->where('otp_status','1')
                    ->where('crm_status','1')
                    ->limit(1000)
                    ->orderBy('id', 'DESC')->get();
                    break;
                case 'backlog':
                    $leads = DB::table('leads')
                    ->where('otp_status','0')
                    ->limit(2000)
                    ->orderBy('id', 'DESC')->get();
                    break;
            }
            
            $report_header = ['Name','Email','Mobile','Center','City','Pincode','Source','Campaign','Term','Device','Creative','Url','Otp','Created Date'];
            $leadReport = [];
            foreach($leads as $key => $lead) {
                $leadReport[$key]['Name'] = $lead->name;
                $leadReport[$key]['Email'] = $lead->email;
                $leadReport[$key]['Mobile'] = $lead->mobile;
                $leadReport[$key]['Center'] = $lead->center;
                $leadReport[$key]['City'] = $lead->city;
                $leadReport[$key]['Pincode'] = $lead->pincode;
                $leadReport[$key]['Source'] = $lead->utm_source;
                $leadReport[$key]['Campaign'] = $lead->utm_campaign;
                $leadReport[$key]['Term'] = $lead->utm_term;
                $leadReport[$key]['Device'] = $lead->utm_device;
                $leadReport[$key]['Creative'] = $lead->utm_creative;
                $leadReport[$key]['Url'] = $lead->source_url;
                $leadReport[$key]['OTP'] = $lead->otp_status;
                $leadReport[$key]['Created Date'] = $lead->created_at;
            }

          
            $fileName = 'ica-classroom-leads-'.date("y-m-d-h-i-s").'.csv';
            $headers = [
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            ];
            
           
            $callback = function() use($leadReport, $report_header) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $report_header);
    
                foreach ($leadReport as $record) {
                    fputcsv($file, $record);
                }
    
                fclose($file);
            };
    
            return Response::stream($callback, 200, $headers);

        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }   
}

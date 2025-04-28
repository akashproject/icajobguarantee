<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeadRefer;
use App\Models\Lead;
use App\Models\Center;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mail;
use Response;

class LeadReferController extends Controller
{
   
    public function index()
    {
        try {
            $user = Auth::user();
            $center = Center::select('id')->where('email',$user->email)->first();
            
            $leads = DB::table('lead_refers')
                    ->join('centers', 'centers.id', '=', 'lead_refers.from_center')
                    ->select('lead_refers.*', 'centers.name as transfar_by')
                    ->where('lead_refers.to_center', $center->id)
                    ->where('lead_refers.status', "1")
                    ->orderBy("lead_refers.id","desc")
                    ->get();
            return view('administrator.leads-refer.index',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function uploadLead()
    {
        try {
            $user = Auth::user();
            $center = Center::select('id')->where('email',$user->email)->first();
            
            $leads = DB::table('lead_refers')
                    ->join('centers', 'centers.id', '=', 'lead_refers.to_center')
                    ->select('lead_refers.*', 'centers.name as transfar_to')
                    ->where('lead_refers.status', "1")
                    ->orderBy("lead_refers.id","desc")
                    ->get();
            return view('administrator.leads-refer.leads',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function add() {
        try {
            $user = Auth::user();
            $center = Center::select('city_id','id')->where('email',$user->email)->first();
            $centers = Center::where('id', '!=' , $user->id)->orderBy('name')->get();
            return view('administrator.leads-refer.add',compact('centers','center'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function send(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'city' => 'required',
                'pincode' => 'required',
            ]);
            
            $leadRefer = LeadRefer::create($data);
            $to_center = Center::findorFail($data['to_center']);
            $from_center = Center::findorFail($data['from_center']);

            $postData = [
                "email" => $to_center->email,
                "name" => $to_center->name,
                "from_center_name" => $from_center->name,
            ];

            $data['lead_id'] = $leadRefer->id;
            $this->sendEmailTemplate($data,$postData);
            return redirect()->back()->with('message', 'Lead Transfard successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function updateLeadStatus($id){
        try {
            $data = ['crm_status' => '1','otp_status' => '1'];
            $lead = Lead::findOrFail($id);
            $lead->update($data);
            return redirect()->back()->with('message', 'Lead updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function exportLeadCsv(){
        try {
            $leads = DB::table('leads')
            ->whereNot('otp_status','1')
            ->groupBy('mobile')
            ->havingRaw("crm_status != '1'")
            ->orderBy('id', 'ASC')->get();
            $report_header = ['Name','Email','Mobile','Center','City','Pincode','Source','Campaign','Created Date',];
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
                $leadReport[$key]['Created Date'] = $lead->created_at;
            }

          
            $fileName = 'leads-'.date("y-m-d-h-i-s").'.csv';
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

    public function sendEmailTemplate($data,$postData){
        try {
            $data['mobile'] = "XXXXXX".substr($data["mobile"], -4);
            $data['pincode'] = "XXX".substr($data["pincode"], -3);
            $data['from_center_name'] = $postData['from_center_name'];


            $mail = Mail::send("administrator.email.leadTransfarNotificationTemplate", $data, function ($m) use ($postData) {
                $m->from("connect@icajobguarantee.com", "ICA Edu Skils");
                $m->to($postData["email"], $postData["name"])
                    ->subject($postData["from_center_name"]." sent you a lead")
                    ->cc('backup.proloy.ghosh@icagroup.in');
            });    
            return redirect()->back()->with('message', 'Lead Transfard successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
}
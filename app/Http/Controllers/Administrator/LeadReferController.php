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
            $centers = Center::whereIn('city_id',$center)->where('id', '!=' , $user->id)->orderBy('name')->get();
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

    public function backLogLeads(){
        try {
            $leads = DB::table('leads')
                ->whereNot('otp_status','1')
                ->groupBy('mobile')
                ->havingRaw("crmStatus != '1'")
                ->orderBy('id', 'ASC')->get();
            return view('administrator.leads-refer.backlog',compact('leads'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function updateLeadStatus($id){
        try {
            $data = ['crmStatus' => '1'];
            $lead = Lead::findOrFail($id);
            $lead->update($data);
            return redirect()->back()->with('message', 'Lead updated successfully!');
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
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Lead;
use App\Jobs\SendEmailJob; 
use Mail;

class SendBrochureMailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendbrochuremail:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Brochure Mail';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postData = [
            "email" => "akash.dutta@icagroup.in",
            "name" => "Akash Dutta",
        ];

        $data = [
            "name" => "Akash Dutta",
            "mobile" => "9836555023",
            "city" => "Kolkata",
            "pincode" => "711203",
            "from_center_name" => "Dalhousi",
            "lead_id"=>1
        ];

        $mail = Mail::send("administrator.email.leadTransfarNotificationTemplate", $data, function ($m) use ($postData) {
            $m->from("connect@icajobguarantee.com", "ICA Edu Skils");
            $m->to($postData["email"], $postData["name"])
                ->subject("Sent you a lead")
                ->cc('akash.dutta@icagroup.in');
        }); 
        // $leads = Lead::where('mailStatus', '0')->get();
        // if ($leads->count() > 0) {
        //     foreach($leads as $key => $lead)
        //     {
        //         $email = $lead->email;
        //         $data = array(
        //             'name' => 'Akash Dutta',
        //             'email' => 'akash.dutta@icagroup.in'
        //         );
        //         $job = SendEmailJob::dispatchSync($data);
        //     }
        // }
    }
}

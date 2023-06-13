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
        $leads = Lead::where('mailStatus', '0')->get();
        if ($leads->count() > 0) {
            foreach($leads as $key => $lead)
            {
                $email = $lead->email;
                $data = array(
                    'name' => 'Akash Dutta',
                    'email' => 'akash.dutta@icagroup.in'
                );
                $job = SendEmailJob::dispatchSync($data);
            }
        }
    }
}

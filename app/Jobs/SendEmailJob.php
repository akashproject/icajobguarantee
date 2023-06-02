<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\NotifyMail;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = mail("akash.dutta@icagroup.in","My subject",json_encode($this->details));

        // $email = new NotifyMail();
        // Mail::to($this->details['email'])->send($email);
        
        // setcookie("TestCookie", strtotime("now"));

        $data = $this->details;
        Mail::send('email.leadCaptureTemplate', $data, function($message) use ($data) {
            $message->from('connect@icajobguarantee.com', 'ICA Edu Skils');
            $message->to($data['email'], $data['name'])->subject('Course Enquiry Submitted Successfully');
        });

        
    }
}
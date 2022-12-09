<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\EmailCampaign;
use DB;
use Illuminate\Support\Facades\Mail;
use App\User;

class SendWithReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:reminderemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with reminder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $reminders = EmailCampaign::where('date', date('Y-m-d'))->where('status', "pending")->where('time', date('H:i'))->get();
        foreach($reminders as $reminder){
            if($reminder->count < $reminder->times){
                // $urll = url('/');
                // $paath = $urll."/public/videos/";
                // $img_path = $paath.$reminder->image;
                $img = $reminder->image;
                $img_path = "https://construxo.in/mafama/public/videos/".$img;
                // $img_path = "https://thumbs.dreamstime.com/z/spring-flowers-blue-crocuses-drops-water-backgro-background-tracks-rain-113784722.jpg";

                $userdet = DB::table('contacts')->where('email', $reminder->email)->get();
                if(count($userdet) > 0){
                    $username = $userdet[0]->first_name." ".$userdet[0]->last_name;
                }
                else{
                    $username = "";
                }
                $emaildetails = array(
                    'malto'             => $reminder->email,
                    'subject'           => $reminder->subject,
                    'bakg'              => $reminder->backhground,
                    'campaign_name'     => "",
                    'body'              => $reminder->message,
                    'username'          => $username,
                    'greetings'         => $reminder->greeting,
                    'forecolorr'        => $reminder->forecolorr,
                    'user_banner'       => $reminder->user_banner,
                );
                $malto = $reminder->email;
                $subject = $reminder->subject;

                // print_r($emaildetails);die();
                $user_name = User::where('id', $reminder->uid)->first();
                Mail::send('email_campaign_template', $emaildetails, function($message) use ($malto, $subject, $img_path) {
                     $message->to($malto)
                     ->subject($subject);
                     $message->attach($img_path);
                     $message->from('dsvmailer@gmail.com', $user_name->name);
                  });
                $count = $reminder->count + 1;
                $time1 = $reminder->time;
                $time = date("H:i", strtotime('+'.$reminder->time_diff.' hours', strtotime($time1)));
                $countupdate = DB::table('email_campaigns')->where('id', $reminder->id)->update(['count' => $count, 'time' => $time]);
                User::where('id', $reminder->uid)->update(['total_send_emails'=> DB::raw('total_send_emails+1')]);
            }
            else{
                $reminders = EmailCampaign::where('id', $reminder->id)->update(['status' => "sent"]);
            }
        }
        dd(date('H:i'));
    }
}

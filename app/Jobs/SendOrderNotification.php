<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Notifications\updateStatus;
use App\Orders;
use App\admin;
use App\Florist;
use Session;

class SendOrderNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $florist = Florist::where(['id'=>'5'])->first();
        // $admin =  admin::where(['username'=>'admin'])->first();
        // $admin->notify(new updateStatus($florist));
        $admin = new admin();
        $admin->username='saeed';
        $admin->password='saeed';
        $admin->save();

    }
}

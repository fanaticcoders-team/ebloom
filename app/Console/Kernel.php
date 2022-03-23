<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\SendOrderNotification;
use Carbon\Carbon;
use App\Orders;
use App\admin;
use App\Florist;
use Session;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $now = Carbon::now();
        $hours = $now->format('h');
        $order = Orders::where(['id'=>'17'])->first();
        $currentDate = Carbon::parse($now)->format('d-m-Y');
        if ($currentDate == '08-05-2021') {
            
        }
        $schedule->job(new SendOrderNotification)->dailyAt('14:25');

        // $schedule->job(new SendOrderNotification)->dailyAt('13:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

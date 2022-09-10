<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();


        // insert categories everyday
        $schedule->command('categroy:coins')->daily();

        // remove cache everyday
        $schedule->command('remove:cache')->dailyAt('13:00');
        // remove extra
        $schedule->command('remove:media')->twiceDaily(1, 13);

        // Clear sperkline
        $schedule->command('sperkline:delete')->twiceDaily(1, 13);
        // $schedule->command('sperkline:delete')->everyMinute();

        // import all coin data
        $schedule->command('coin:import')->dailyAt('13:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}

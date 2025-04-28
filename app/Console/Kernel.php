<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Foundation\Inspiring; // Don't forget to use the Inspiring class

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command scheduling.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('inspire')->hourly();
        // $schedule->command('your:custom-command')->hourly(); // You can remove this line if you don't have this custom command yet
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
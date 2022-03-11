<?php

namespace App\Jobs;

use App\Notifications\emailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class sendingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;
    private $user, $inputs;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $inputs)
    {
        $this->user = $user;
        $this->inputs = $inputs;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->user->notify(new emailNotification($this->inputs));
    }
}

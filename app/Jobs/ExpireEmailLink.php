<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use Log;

class ExpireEmailLink implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data;
    public function __construct($id)
    {
        $this->data = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::where('id', $this->data)->update(['token' => 'null']);
        Log::info('Job Run Sucessfully'. $this->data);
    }
}

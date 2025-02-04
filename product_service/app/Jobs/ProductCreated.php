<?php

namespace App\Jobs;

use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProductCreated implements ShouldQueue
{
    use Queueable;

    private $data;

    /**
     * Create a new job instance.
     *
     * @param $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    }
}

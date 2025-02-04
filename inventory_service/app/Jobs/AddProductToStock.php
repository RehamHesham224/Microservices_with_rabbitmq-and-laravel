<?php

namespace App\Jobs;

use App\Models\Stock;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class AddProductToStock implements ShouldQueue
{
    use Queueable;

    private $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->data) {
            Stock::query()->firstOrCreate(['product_id' => $this->data['product_id']]);
            echo "product has been added to stock. product_id: ".$this->data['id'].PHP_EOL;
        }
    }
}

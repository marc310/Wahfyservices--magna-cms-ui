<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewService
{
    use SerializesModels;

    public $service;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($service)
    {
        $this->service = $service;
    }
}

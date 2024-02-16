<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewAbout
{
    use SerializesModels;

    public $about;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($about)
    {
        $this->about = $about;
    }
}

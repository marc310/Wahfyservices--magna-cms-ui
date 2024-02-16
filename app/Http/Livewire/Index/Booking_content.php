<?php

namespace App\Http\Livewire\Index;

use Livewire\Component;

class Booking_content extends Component
{
    public $picked_data;
    
    
    protected $listeners = ['get_date_button'];

  


    public function get_date_button($value)
    {
           if(!is_null($value))
         $this->picked_data = $value;
    }

    public function render()
    {
        return view('livewire.index.booking_content');
    }
}

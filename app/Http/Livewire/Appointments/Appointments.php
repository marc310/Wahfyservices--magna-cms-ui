<?php

namespace App\Http\Livewire\Appointments;

use App\Models\Appointment;
use Livewire\Component;
use App\Models\Days_Slots;

class Appointments extends Component
{

    public $getdaysno; 
    public $getperiodsno; 
    public $selected_day;
    public $Appointment;

 public function check_Day_as_WorkingDay($selected_day){

    $this->Appointment = Appointment::where('id', $selected_day)->first();
    if($this->Appointment->working_day == 0){
      return  Appointment::where('id', $selected_day)->update(['working_day' => '1']);
    }else{
        return  Appointment::where('id', $selected_day)->update(['working_day' => '0']);

    }
   
}



public function check_Day_as_dayoff($selected_day){

    $this->Appointment = Appointment::where('id', $selected_day)->first();
    if($this->Appointment->dayoff  == 0){
      return  Appointment::where('id', $selected_day)->update(['dayoff' => '1']);
    }else{
        return  Appointment::where('id', $selected_day)->update(['dayoff' => '0']);

    }
   
}
    
    public function render()
    {
        return view('livewire.appointments.appointments');
    }
}

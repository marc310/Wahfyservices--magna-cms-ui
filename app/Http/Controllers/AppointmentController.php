<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Period;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logos = Appointment::all();

        return view('appointments.appointments', compact('logos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('logo.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Logo $logo
     * @return \Illuminate\Http\Response
     */
    public function show($indexing)
    {
        $Appointment = Appointment::where('indexing',$indexing)->first();
  
        return view('slots.view_slots',compact('Appointment'));
     }

    /**
     * @param \App\Http\Requests\LogoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $fdate = $request->indexing;
        $tdate = $request->appointment_day;
        $datetime1 = strtotime($fdate); // convert to timestamps
        $datetime2 = strtotime($tdate); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400);
        //    dd($days);
        // foreach($request->indexing as $key => $indexx){
        //     // $key is your name01, name02, etc
        //     // here you will get padded name string if you want to check.
        //             $vars[] = [
        //                 'appointment_day' => $request->appointment_day[$key],
        //                 'indexing' => $indexx
        //             ];
                
        //     }
      
            
    

        for($i=0;$i < $days+1; $i++){

            
            // $key is your name01, name02, etc
            // here you will get padded name string if you want to check.
                    $Appointment = new Appointment();
                    
                            // $Appointment->appointment_from = $request->appointment_from[$i] ;
                            // $Appointment->appointment_to = $request->appointment_to[$i];
                            $Appointment->indexing = Carbon::parse($request->indexing)->addDays($i); 
                            $Appointment->appointment_day = Carbon::parse($request->indexing)->addDays($i)->format('l'); 
                            $Appointment->dayoff = $request->dayoff == 1 ? '1' : '0';
                            if($Appointment->appointment_day == "Friday")
                            {
                            $Appointment->working_day = $request->working_day == NULL ? '0' : '1';
                            }else{
                           $Appointment->working_day = $request->working_day == NULL ? '1' : '0';
                            }
                            $Appointment->save();
        }
            


  
            
        
                                // $Period->save();
    


        return redirect()->route('appointment.store');
    }


    function destroy($id)

    {

      $Appointment = Appointment::findOrfail($id);
 
      $Appointment->delete();

      return back();

     }


     public function edit($indexing)

     {
         $Appointment = Appointment::where('indexing',$indexing)->first();
  
         return view('slots.slots',compact('Appointment'));
 
     }


     

     public function update(Request $request)

     {
         $Appointment = Appointment::findOrfail($request->id);
 
         $Appointment->update($request->all());
 
         return back();
 
     }
 
}

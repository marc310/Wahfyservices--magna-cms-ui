<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Appointment;
use App\Models\Days_Slots;
use Illuminate\Http\Request;

class DaysSlotsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $days_slots = Days_Slots::all();

        return view('slots.slots', compact('days_slots'));
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
     * @param \App\Http\Requests\LogoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            

      
        foreach($request->indexing as $key => $val) { 

            if (in_array($val, $request->indexing)) {
            
          $Days_Slots = new Days_Slots;
    
          $Days_Slots->date_of_day = $request->date_of_day[$key];
          $Days_Slots->day = $request->day[$key];
          $Days_Slots->begin_from = $request->begin_from[$key];
          $Days_Slots->end_to = $request->end_to[$key];
          $Days_Slots->indexing = $val;
          
            
        
                                $Days_Slots->save();
            }
        }
        return redirect()->back()->with('msg','تم الحفظ');
    }


    


    function destroy($id)

    {

      $days_slots = Days_Slots::findOrfail($id);
 
      $days_slots->delete();

      return back();

     }


     public function update(Request $request)

     {
         $days_slots = Days_Slots::findOrfail($request->id);
 
         $days_slots->update($request->all());
 
         return back();
 
     }
 
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LandingStoreRequest;
use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $landings = Landing::all();

        return view('landing.landings', compact('landings'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('landing.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Landing $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Landing $landing)
    {
        return view('landing.landing', compact('landings'));
    }

    /**
     * @param \App\Http\Requests\LandingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandingStoreRequest $request)
    {
        // $file = time().'.'.request()->landing_image->getClientOriginalExtension();
        // request()->landing_image->move(public_path('uploads/'), $file);
      
        // $request->logo_image = $file;
  
      
          $landings = Landing::create([
             'landing_h' => $request->landing_h,
             'landing_p' => $request->landing_p,

              ]);
  
  
  
          return back();
        }
  
  
      function destroy($id)
  
      {
  
        $landings = Landing::findOrfail($id);
   
        $landings->delete();
  
        return back();
  
       }
  
  
       public function update(Request $request)
  
       {
           $landings = Landing::findOrfail($request->id);
   
           $landings->update($request->all());
   
           return back();
   
       }
}



<?php

namespace App\Http\Controllers;

use App\Models\Namozag;
use Illuminate\Http\Request;

class NamozagController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Namozags = Namozag::all();

        return view('Namozag.Namozags', compact('Namozags'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('Namozag.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Namozag $Namozag
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Namozag $Namozag)
    {
        return view('Namozag.Namozag', compact('Namozags'));
    }

    /**
     * @param \App\Http\Requests\NamozagStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = time().'.'.request()->Namozag_image->getClientOriginalExtension();
        // request()->Namozag_image->move(public_path('uploads/'), $file);
      
        // $request->logo_image = $file;
  
      
          $Namozags = Namozag::create([
             'landing_h' => $request->landing_h,
             'landing_p' => $request->landing_p,
             'price' => $request->price,
             'step_one' => $request->step_one,
             'step_two' => $request->step_two,
             'step_three' => $request->step_three,
             'step_four' => $request->step_four,
             'step_five' => $request->step_five,
             'step_six' => $request->step_six,
             'step_seven' => $request->step_seven,
             'step_eight' => $request->step_eight,
             'step_nine' => $request->step_nine,
             'step_ten' => $request->step_ten,
         
              ]);
  
  
  
          return back();
        }
  
  
      function destroy($id)
  
      {
  
        $Namozags = Namozag::findOrfail($id);
   
        $Namozags->delete();
  
        return back();
  
       }
  
  
       public function update(Request $request)
  
       {
           $Namozags = Namozag::findOrfail($request->id);
   
           $Namozags->update($request->all());
   
           return back();
   
       }
}

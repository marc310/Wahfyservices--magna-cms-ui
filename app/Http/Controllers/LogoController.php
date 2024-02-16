<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoStoreRequest;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logos = Logo::all();

        return view('logo.logos', compact('logos'));
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
    public function show(Request $request, Logo $logo)
    {
        return view('logo.logos', compact('logos'));
    }

    /**
     * @param \App\Http\Requests\LogoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogoStoreRequest $request)
    {
            
      $file = time().'.'.request()->logo_image->getClientOriginalExtension();
      request()->logo_image->move(public_path('uploads/logo/'), $file);
    
      $request->logo_image = $file;


      
    
        $logo = Logo::create([
           'logo_name' => $request->logo_name,
           'logo_image' => $file
            ]);



        return redirect()->back()->with('msg','تم الحفظ بنجاح');
    }


    function destroy(Request $request)

    {

      $logo = Logo::findOrfail($request->id);
 
      $logo->delete();

      return back();

     }


     public function update(Request $request)

     {
         $logo = Logo::findOrfail($request->id);
 
         $logo->update($request->all());
 
         return back();
 
     }
 
}

<?php

namespace App\Http\Controllers;

use App\Events\NewService;
use App\Http\Requests\PortifolioStoreRequest;
use App\Jobs\SyncMedia;
use App\Models\Portifolio;
use App\Notification\ReviewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PortifolioController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $portifolios = Portifolio::all();

        return view('portifolio.portifolios', compact('portifolios'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('portifolio.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Portifolio $portifolio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Portifolio $portifolio)
    {
        $portifolios = Portifolio::orderBy('id','ASC')->get();
        return view('portifolio.portifolios', compact('portifolios'));
    }

    /**
     * @param \App\Http\Requests\PortifolioStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortifolioStoreRequest $request)
    {

        
    
    //   $file = time().'.'.request()->portifolio_image->getClientOriginalExtension();
    //   request()->portifolio_image->move(public_path('uploads/'), $file);
    
    //   $request->portifolio_image = $file;


      
    
        $portifolio = Portifolio::create([
           'manhageya_title' => $request->manhageya_title,
           'manhageya_desc' => $request->manhageya_desc,
            ]);


        // $request->session()->flash('portifolio.year', $portifolio->year);

        return redirect()->route('portifolio.store')->with('msg','تم حفظ البيانات بنجاح');
    }

    function destroy(Request $request)

    {

      $portifolio = Portifolio::findOrfail($request->id);
 
      $portifolio->delete();

      return back();

     }

     


     public function update(Request $request)

     {
         $portifolio = Portifolio::findOrfail($request->id);
 
         $portifolio->update($request->all());
 
         return back();
 
     }
}

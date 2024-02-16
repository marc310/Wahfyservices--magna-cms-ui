<?php

namespace App\Http\Controllers;

use App\Events\NewAbout;
use App\Http\Requests\AboutStoreRequest;
use App\Jobs\SyncMedia;
use App\Models\About;
use App\Notification\ReviewNotification;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AboutController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $abouts = About::all();

        return view('about.about', compact('abouts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('about.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, About $about)
    {
        return view('about.about', compact('abouts'));
    }

    /**
     * @param \App\Http\Requests\AboutStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
      
        
      
          $about = About::create([
             'about_name' => $request->about_name,
             'about_desc' => $request->about_desc,
              ]);
  
        //  Notification::send($portifolio->author, new ReviewNotification($portifolio));
  
         // SyncMedia::dispatch($portifolio);
  
         // event(new NewService($portifolio));
  
  
          return redirect()->route('about.store')->with('msg','تم حفظ البيانات بنجاح');

    }


 

    function destroy(Request $request)

    {

      $about = About::findOrfail($request->id);
 
      $about->delete();

      return back();

     }


     public function update(Request $request)

     {
         $about = About::findOrfail($request->id);
 
         $about->update($request->all());
 
         return back();
 
     }
 
}

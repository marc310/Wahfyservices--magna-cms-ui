<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeatureStoreRequest;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $features = Feature::all();

        return view('feature.features', compact('features'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('feature.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Feature $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Feature $feature)
    {
        return view('feature.features', compact('features'));
    }

    /**
     * @param \App\Http\Requests\FeatureStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeatureStoreRequest $request)
    {
     /*
        $file = time().'.'.request()->feature_image->getClientOriginalExtension();
        request()->feature_image->move(public_path('uploads/'), $file);
      
        $request->logo_image = $file;
  */
      
 $features = Feature::create([
             'feature_h' => $request->feature_h,
             'feature_p' => $request->feature_p,
             'feature_phone' => $request->feature_phone,
             'feature_fax' => $request->feature_fax,
             'feature_address' => $request->feature_address,
             'feature_image' => 'no-image.png',
              ]);
  
  
          $request->session()->flash('feature.feature_h', $features->feature_h);
  
          return redirect()->route('feature.store');
      }
  
  
      function destroy(Request $request)
  
      {
  
        $features = Feature::findOrfail($request->id);
   
        $features->delete();
  
        return back();
  
       }
  
  
       public function update(Request $request)
  
       {
           $features = Feature::findOrfail($request->id);
   
           $features->update($request->all());
   
           return back();
   
       }
}

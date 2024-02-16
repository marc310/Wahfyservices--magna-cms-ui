<?php

namespace App\Http\Controllers;

use App\Events\NewService;
use App\Http\Requests\ServiceStoreRequest;
use App\Jobs\SyncMedia;
use App\Models\Service;
use App\Notification\ReviewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ServiceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::all();

        return view('service.services', compact('services'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('service.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Service $service)
    {
        $services = Service::all();
        return view('service.services', compact('services'));
    }

    /**
     * @param \App\Http\Requests\ServiceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 


    if(!empty(request()->service_image)){
      $file = time().'.'.request()->service_image->getClientOriginalExtension();
      request()->service_image->move(public_path('uploads/'), $file);
    }else{
        $file='img.png';
    }
         
  if(!empty(request()->service_attachment)){

      $attach = time().'.'.request()->service_attachment->getClientOriginalExtension();
      request()->service_attachment->move(public_path('uploads/'), $attach);
  }else{
        $attach='img.png';
    }
         
  if(!empty(request()->barcode)){

      $bar = time().'.'.request()->barcode->getClientOriginalExtension();
      request()->barcode->move(public_path('uploads/barcodes'), $bar);
      }else{
        $bar='img.png';
    }


     $request->service_image = $file;
     $request->service_attachment = $attach;
     $request->barcode = $bar;

      
    
        $service = Service::create([
            'name' => $request->name,
            'passport' => $request->passport,
            'phone_number' => $request->phone_number,
            'expiry_date' => $request->expiry_date,
            'nationality' => $request->nationality,
            'birth_date' => $request->birth_date,
        'service_type' => $request->service_type,
           'service_code' => $request->service_code,
         'barcode' => $bar,
    'service_license_no' => $request->service_license_no,
            'service_no' => $request->service_no,
            'servi_ces' => $request->servi_ces,
           'service_image' => $file,
        'attachment_desc' => $request->attachment_desc,
           'service_attachment' => $attach,
    'attachment_descc' => $request->attachment_descc,
            ]);

        //Notification::send($service->author, new ReviewNotification($service));

        SyncMedia::dispatch($service);

        event(new NewService($service));

        $request->session()->flash('service.service_name', $service->service_name);

        return redirect()->route('service.store');
    }

    
    function destroy(Request $request)

      {

        $service = Service::findOrfail($request->id);
   
        $service->delete();

        return back();

       }


       public function update(Request $request)

       {
           $service = Service::findOrfail($request->id);
   
           $service->update($request->all());
   
           return back();
   
       }

       
       public function search(Request $request)

       {
   
        $query = \Request::get('query');
        $requested_name = \Request::get('requested_name');
        $requested_num = \Request::get('requested_num');

        if(\Request::get('query')){

            $search_res = Service::Where('name','like','%'.$query.'%')
            ->orWhere('passport','like','%'.$query.'%')
            ->first();

        }elseif(\Request::get('requested_name') && \Request::get('requested_num')){

        $search_res = Service::Where('name','like','%'.$requested_name.'%')
            ->Where('passport','like','%'.$requested_num.'%')
            ->first();
        }
        return view ('search_results',['search_res'=>$search_res]);

       }

         public function get_status(Request $request)

       {
   
        $request_name = \Request::get('request_name');
        $request_num = \Request::get('request_num');

        if(\Request::get('request_name')){

        $search_res = Service::Where('name','like','%'.$request_name.'%')
            ->first();
        }elseif(\Request::get('request_num')){
           $search_res = Service::Where('passport','like','%'.$request_num.'%')
            ->first();  
        
        }else{
            return redirect()->back()->with('msg','املاأ الحقول الفارغة');
        }
                return view ('show_status',['search_res'=>$search_res]);

       }


       public function generate_pdf($id){

    $Service = Service::find($id);

    $encloses = explode("," , $Service->service_attachment);

    foreach ($encloses as $key => $val) {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/uploads/$val";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        //to download pdf
        //return response()->download($file, 'filename.pdf', $headers);

        //to display pdf via browser
        //return response()->file($file);
        return response()->file($file, $headers);
    
}
}



   public function generate_img($id){

    $Service = Service::find($id);


    
    $encloses = explode("," , $Service->service_image);

    foreach ($encloses as $key => $val) {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/uploads/$val";

        //to download img
        //return response()->download($file, 'filename.pdf', $headers);

        //to display img via browser
        //return response()->file($file);


        return response()->file($file);
    
}
}  



}

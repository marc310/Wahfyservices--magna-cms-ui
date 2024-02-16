<?php



namespace App\Http\Controllers;


use App\Http\Requests\BookingStoreRequest;

use App\Events\NewService;

use App\Jobs\SyncMedia;

use App\Models\Booking;

use App\Models\Days_Slots;


use App\Notification\ReviewNotification;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;



class BookingController extends Controller

{

    /**

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        return view('booking.bookings');



    }



    /**

     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response

     */

    public function create(Request $request)

    {

     //   return view('booking.create');

    }



    /**

     * @param \Illuminate\Http\Request $request

     * @param \App\Models\Portifolio $booking

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

      $booking = Booking::findorfail($id);

      
      return view('booking.booking_details',compact('booking'));

    }



    /**

     * @param \App\Http\Requests\PortifolioStoreRequest $request

     * @return \Illuminate\Http\Response

     */

    public function store(BookingStoreRequest $request)

    {



        
$validatedRequest = $request->validated();
    

    //   $file = time().'.'.request()->portifolio_image->getClientOriginalExtension();

    //   request()->portifolio_image->move(public_path('uploads/'), $file);

    

    //   $request->portifolio_image = $file;


 

    Booking::create([
      'booking_date' => $request->booking_date,
      'booking_from' => $request->booking_from,
      'booking_to' => $request->booking_to,
      'reserver_name' => $request->reserver_name,
      'phone' => $validatedRequest['phone'],
      'mail' => $request->mail,
      'agree_conditions' => $request->agree_conditions,
       ]);

 
    Days_Slots::where('date_of_day',$request->booking_date)->where('begin_from',$request->booking_from)->where('end_to',$request->booking_to)->update(['status' =>'temp_booked']);



       // $request->session()->flash('booking.title', $booking->title);



        return redirect()->back()->with('msg','تم الحجز بنجاح');

    }



    function destroy($id)



    {



      $booking = Booking::findOrfail($id);

 

      $booking->delete();


      return redirect()->back();





     }



     





     public function update(Request $request,$id)



     {

         $booking = Booking::where('id',$id);

 

         $booking->update([
           'booking_status' => $request->booking_status
        ]);

           if($request->booking_status == 1){
               
                $bookings = Booking::where('id',$id)->first();
                
               Days_Slots::where('date_of_day',$bookings->booking_date)->where('begin_from',$bookings->booking_from)->where('end_to',$bookings->booking_to)->update(['status' => 1]);
         return back()->with('msg','تم تأكيد الحجز بنجاح');
           }else{
               
               $book = Booking::where('id',$id)->first();

            Days_Slots::where('date_of_day',$book->booking_date)->where('begin_from',$book->booking_from)->where('end_to',$book->booking_to)->update(['status' => 2]);
            return back()->with('error','تم إلغاء الحجز');
           }

 

     }

}


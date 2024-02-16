
         <select
                  required
                  id="select_start_data"
                  dir="rtl"
                  type="text"
                  name="booking_from"
                  class = "box-component flex items-center justify-center py-8 px-4"
                >

                <option value="---">اختر ميعاد الحجز </option>
                   
                  <?php
                  $check_booking_exists = App\Models\Booking::where('booking_date','2024-02-03')->exists();
                  $get_Slots = App\Models\Days_Slots::where('date_of_day','2024-02-03')->get();
                  $get_Days_Slots = App\Models\Days_Slots::where('date_of_day','2024-02-03')->get();

                  ?>
                 

@if($check_booking_exists == false)
      
             

                 @foreach($get_Slots as $get_Slots)

                      <option data-end_date="{{$get_Slots->end_to}}" value="{{$get_Slots->begin_from}}" >{{$get_Slots->begin_from.'-'.$get_Slots->end_to."(1)"}}</option>
                  @endforeach
             

             
             @else




                  @foreach($get_Days_Slots as $get_Days_Slot)
                  <?php  
        $check_slot_cancelled_in_bookings = App\Models\Booking::where('booking_date','2024-02-03')
        ->where('booking_from',$get_Days_Slot->begin_from)
        ->where('booking_to',$get_Days_Slot->end_to)
        ->where('booking_status','2')
        ->exists();


   

             ?>

                   @if($check_slot_cancelled_in_bookings == true || $get_Days_Slot->status == 0)
                   
        
        
        


                      <option data-end_date="{{$get_Days_Slot->end_to}}" value="{{$get_Days_Slot->begin_from}}" >{{$get_Days_Slot->begin_from.'-'.$get_Days_Slot->end_to."(2)"}}</option>

                                                                  </select>


                    @endif
           
                      @endforeach


@endif


                                                             </select>

      

 
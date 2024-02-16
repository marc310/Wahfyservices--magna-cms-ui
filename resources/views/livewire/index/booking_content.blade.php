<div>


    <style>
        
        
        .hero-conatiner {
    background: url(assets/img/HeroSection.png) 50%/cover no-repeat !important;
    height: 100vh !important;
    max-height: 100vh !important;
    min-height: 690px !important;
    width: 100% !important;
}


  select {
  /* for Firefox */
  -moz-appearance: none;
  /* for Chrome */
  -webkit-appearance: none;
}

/* For IE10 */
select::-ms-expand {
  display: none;
}




.booking-content
{
  background: #60affe url(assets/img/Images_6.png) 100%/cover no-repeat;
  /* height: 180vh !important; */
  /* min-height: 690px; */
  /*top: 7rem*/
  top: 0rem;
}
/* 
.policy-content {
    background: #fff url(assets/img/policey-background.jpg) 100%/cover no-repeat;
    height: 87vh !important;
    max-height: 1000px;
    min-height: 690px;
    position: relative;
    width: 100%
} */

.third-frame {
    left: -40rem !important;
    position: relative !important;
    top: 25px !important;
}
.main-navbar-index {
    background: none !important;
}
      </style>
      

          
  
 
      <!-- ---------------Booking ShowCase Section---------------- -->
      <section class="booking-container index-pages" id="section4">
        <div class="booking-content">
          <div class="booking-discription text-center text-white z-10 section">
            <h1 class="text-5xl font-bold">احجز مقابلة مجانية معنا</h1>
            <p
              class="text-center m-auto relative mt-[1rem]"
            >
              استفد من فرصة مقابلة استشارية مجانية الآن!
            </p>
            <p class="text-center m-auto relative">
              دعنا نساعدك في تحقيق أهدافك وفتح أفاق جديدة لنجاحك. احجز موعدك اليوم
              وابدأ رحلتك نحو مستقبل مشرق.
            </p>
          </div>
          <div class="calender z-10">
            <!-- component -->
            <div id="book_now" class="box-component flex items-center justify-center px-4">

  

<div class="booking-inputs hidden" wire:ignore.self>
                         <div dir="rtl" class="date-column text-white">
                <ul id="dateInfo" class="flex text-xl mr-4 mt-4 mb-1" wire:ignore>
                  <li><h1 id="dayInfo" class="text-xl">اليوم</h1></li>
                  <li><p id="dateNumber">7</p></li>
                  <li><p id="monthInfo"> فبراير</p></li>
                  <li><p id="yearInfo">2024</p></li>
                </ul>




     <input 
      type="hidden" 
      id="dob"
      class="text-black">
      
      

              </div>
                      <form method="POST" action="{{url('book_appointment')}}" enctype="multipart/form-data">
                          @csrf
  
                    <input type="hidden"  name="booking_date"  value="{{$picked_data}}" wire:ignore.self>



                  <label
                    dir="rtl"
                    class="uppercase text-sm float-right mr-4 font-bold opacity-70 text-white"
                    >الوقت</label
                  >

              
              

               

         <select
                  required
                  id="select_start_data"
                  dir="rtl"
                  type="text"
                  name="booking_from"
                  class="p-2 top-2 relative mt-6 mb-4 w-[350px] block ml-[3rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                >

                <option value="---">اختر ميعاد الحجز </option>
                   
                  <?php
                  $check_booking_exists = App\Models\Booking::where('booking_date',$picked_data)->exists();
                  $get_Slots = App\Models\Days_Slots::where('date_of_day',$picked_data)->get();
                  $get_Days_Slots = App\Models\Days_Slots::where('date_of_day',$picked_data)->get();

                  ?>
                 

@if($check_booking_exists == false)
      
             

                 @foreach($get_Slots as $get_Slots)

                      <option data-end_date="{{$get_Slots->end_to}}" value="{{$get_Slots->begin_from}}" >{{$get_Slots->begin_from.'-'.$get_Slots->end_to}}</option>
                  @endforeach
             

             
             @else




                  @foreach($get_Days_Slots as $get_Days_Slot)
                  <?php  
        $check_slot_cancelled_in_bookings = App\Models\Booking::where('booking_date',$picked_data)
        ->where('booking_from',$get_Days_Slot->begin_from)
        ->where('booking_to',$get_Days_Slot->end_to)
        ->where('booking_status','2')
        ->exists();


   

             ?>

                   @if($check_slot_cancelled_in_bookings == true || $get_Days_Slot->status == 0)
                   
        
        
        


                      <option data-end_date="{{$get_Days_Slot->end_to}}" value="{{$get_Days_Slot->begin_from}}" >{{$get_Days_Slot->begin_from.'-'.$get_Days_Slot->end_to}}</option>

                       

                    @endif
           
                      @endforeach



@endif


                                                             </select>



      

 

            <input type="text" class="get_end_date" name="booking_to" style="display:none;" value="" >

            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script>
              $('#select_start_data').change(function(){
                $('.get_end_date').val($(this).find(':selected').data('end_date'));
              });
            </script>
          
                  <div class="relative">
                    <span
                      class="absolute inset-y-0 right-[1rem] mt-[2rem] pl-2 flex items-center z-10"
                    >
                      <i class="fas fa-user text-gray-500"></i>
                    </span>
                    <label
                      dir="rtl"
                      class="uppercase text-sm float-right mr-4 font-bold opacity-70 text-white"
                      >الاسم الكامل</label
                    >
                    <input
                    required
                      dir="rtl"
                      type="text"
                      placeholder="الاسم"
                      name="reserver_name"
                      class="pr-[2rem] p-2 top-2 relative mt-6 mb-4 w-[350px] block ml-[3rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                       value=""
                      />
                  </div>
                  <div class="relative">
                    <span
                      class="absolute inset-y-0 right-[1rem] mt-[2rem] pl-2 flex items-center z-10"
                    >
                      <i class="fas fa-envelope text-gray-500"></i>
                    </span>
                    <label
                      dir="rtl"
                      class="uppercase text-sm float-right mr-4 font-bold opacity-70 text-white"
                      >البريد الالكتروني</label
                    >
                    <input
                    required
                      dir="rtl"
                      type="email"
                      name="mail"
                      placeholder="  البريد الالكتروني"
                      value=""
                      class="pr-[2rem] p-2 top-2 relative mt-6 mb-4 w-[350px] block ml-[3rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                    />
                  </div>
                  <div class="relative">
                    <span
                      class="absolute inset-y-0 right-[1rem] pl-2 flex items-center z-10"
                    >
                      <i class="fas fa-phone text-gray-500"></i>
                    </span>
                    <label
                      dir="rtl"
                      class="uppercase text-sm float-right mr-4 font-bold opacity-70 text-white"
                    >
                      رقم التوصل</label
                    >
                    <input
                    required
                      dir="rtl"
                      type="text"
                      name="phone"
                      maxlength="14"
                      value=""
                      placeholder="رقم التواصل"
                      class="@error('phone') is-invalid @enderror pr-[2rem] p-2 top-2 relative mt-6 mb-4 w-[350px] block ml-[3rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
                    />
                    
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
                    <label dir="rtl" for="terms" class="flex items-center">
                      <input
                      required
                        dir="rtl"
                        type="checkbox"
                        id="terms"
                        name="agree_conditions"
                        class="form-checkbox text-blue-500"
                        value="1"
                      />
                      <span class="ml-2 text-sm text-white">
                        هل توافق علي الشروط والاحكام
                      </span>
                    </label>
                  </div>
                  <button
                  type="submit"
                    class="bg-[#fff] hover:bg-[#fff]  text-blue-600 font-bold py-2 px-4 float-right mt-1 rounded toggle-booking-inputs"
                  >
                    احجز الموعد
                  </button>

                </form>
</div>              
              <!--<div class="max-w-[29rem] w-full shadow-lg">-->
             <!--<div>-->
              
              
            <div class="wrapper">
              <div class="card" wire:ignore>
                <div class="card__body">
                  <table class="calendar">
                    <thead class="calendar__header">
                      <tr class="calendar__controller">
                        <td>
                          <button type="button" id="prevMonthBtn"
                            class="controller controller--pre-month">&lt;</button>
                        </td>
                        <td colspan="5">
                          <span id="selectedMonth">Month</span>
                          <span id="selectedYear">Year</span>
                        </td>
                        <td>
                          <button type="button" id="nextMonthBtn"
                            class="controller controller--next-month">&gt;</button>
                        </td>
                      </tr>
                      <tr class="calendar__days">
                        <td>الاحد</td>
                        <td>الاثنين</td>
                        <td>الثلاثاء</td>
                        <td>الاربعاء</td>
                        <td>الخميس</td>
                        <td>الجمعه</td>
                        <td>السبت</td>
                      </tr>
                    </thead>
                    <tbody id="dates" class="calendar__dates">
                        
                        

                      <tr>
                        <td>
                          <button type="button"
                            class="date date--prev-month">30</button>
                        </td>
                        <td>
                          <button type="button"
                            class="date date--prev-month">31</button>
                        </td>
                        <td>
                          <button type="button" class="date">1</button>
                        </td>
                        <td>
                          <button type="button" class="date">2</button>
                        </td>
                        <td>
                          <button type="button" class="date">3</button>
                        </td>
                        <td>
                          <button type="button" class="date">4</button>
                        </td>
                        <td>
                          <button type="button" class="date">5</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            </div>
          </div>
        </div>
                            <!-- @include('layouts.site_footer') -->

      </section>
      <!---------------------------------subscribtion section-------------------------------------->
    

      
    
      <!---------------------------Footer---------------------->
  
  
  
  
  
  <script>
      // start calnder
// JS logic for calendar
// TODO: generate the calendar component data dynamically =D

const createDateDom = (date, type, hasEvents, cb) => {
  let dateClasses = "date ";
  switch (type) {
    case "today":
      dateClasses += " date--today";
      break;
    case "prev":
      dateClasses += " date--prev-month";
      break;
    case "next":
      dateClasses += " date--next-month";
      break;
    default:
      dateClasses += "";
      break;
  }
  
  if (date.getDay() === 5 || date.getDay() === 6) {
    dateClasses += " display-off";
  }
  
  if (hasEvents) {
    dateClasses += " date--has-events";
  }

  return $("<td>").append(
    $("<button>")
      .attr("type", "button")
      .css({ "opacity": 0 })
      .data("date", date.getDate())
      .data("month", date.getMonth())
      .data("year", date.getFullYear())
      .addClass(dateClasses)
      .text(date.getDate())
      .on("click", cb)
      .animate({ opacity: 1 }, 50)
  )
}



const updateCalendar = (date) => {
  const fullMonths = [
    "يناير", "فبراير", "مارس", "إبريل", "مايو", "يونيو", "يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر",
  ];
  const fullWeekdays = [
    "الاحد", "الاثنين", "الثلاثاء", "الاربعاء", "الخميس", "الجمعه", "السبت"
  ];

  const selectedMonthDom = $("#selectedMonth");
  const selectedYearDom = $("#selectedYear");
  const datesDom = $("#dates");

  const currentMonth = date.getMonth();
  const currentFullMonth = fullMonths[currentMonth];
  const currentFullYear = date.getFullYear();

  const currentMonthFirstDate = new Date(date.valueOf())
  currentMonthFirstDate.setDate(1);

  const preMonthLastDate = new Date(date.valueOf())
  preMonthLastDate.setDate(0);

  const currentMonthLastDate = new Date(date.valueOf())
  currentMonthLastDate.setMonth(currentMonth + 1, 0);

  selectedMonthDom.text(" " + currentFullMonth + " ");
  selectedYearDom.text(" " + currentFullYear + " ");

  const currentMonthFirstDateDay = currentMonthFirstDate.getDay();

  let iDate = new Date(preMonthLastDate.valueOf());
  iDate.setDate(iDate.getDate() - currentMonthFirstDateDay + 1);

  const curentMonthFirstDateValue = (new Date(currentMonthFirstDate.getFullYear(), currentMonthFirstDate.getMonth(), currentMonthFirstDate.getDate())).valueOf();
  const now = new Date();
  const todayDateValue = (new Date(now.getFullYear(), now.getMonth(), now.getDate())).valueOf();

  const curentMonthLastDateValue = (new Date(currentMonthLastDate.getFullYear(), currentMonthLastDate.getMonth(), currentMonthLastDate.getDate())).valueOf();

  datesDom.children().remove();
  while (1) {
    let shouldGetOut = false;


    const row = $("<tr>");




    for (let i = 0; i < 7; i++) {
      const iDateValue = (new Date(iDate.getFullYear(), iDate.getMonth(), iDate.getDate())).valueOf();

      const dateType =
        iDateValue < curentMonthFirstDateValue ? "prev" :
          (iDateValue > curentMonthLastDateValue ? "next" :
            (iDateValue == todayDateValue ? "today" : "Unknown")
          );


      row.append(
        createDateDom(iDate, dateType, false, (e) => {
          const target = $(e.currentTarget)



          var targetDate = target.data("year") + "-" + (target.data("month") + 1).toString().padStart(2, '0') + "-" + target.data("date").toString().padStart(2, '0');
          var inputDate = document.getElementById('dob');
          inputDate.value = targetDate;
        //   console.log(targetDate);
        
        
                  // edit ========================
          const ulElement = $("#dateInfo");
          ulElement.find("#dayInfo").text(fullWeekdays[i]);
          ulElement.find("#dateNumber").text(target.data("date"));
          ulElement.find("#monthInfo").text(currentFullMonth);
          ulElement.find("#yearInfo").text(target.data("year"));
          // edit ========================
          
         Livewire.emit('get_date_button',targetDate); //also write Javascript Hear



          const bookingInputs = $(".booking-inputs");
          if (bookingInputs) {
            bookingInputs.removeClass('hidden');
          }
        //   updateDateInputValue(iDate);
        })
      )




      if (iDateValue == curentMonthLastDateValue) {
        shouldGetOut = true;
      }
      
      

      iDate.setDate(iDate.getDate() + 1);

    }

    datesDom.append(row);

    if (shouldGetOut) {
      break;
    }
  }
}



$(document).ready(() => {
  const date = new Date();
  updateCalendar(date);

  $("#prevMonthBtn").on("click", () => {
    date.setMonth(date.getMonth() - 1);
    updateCalendar(date);
  });

  $("#nextMonthBtn").on("click", () => {
    date.setMonth(date.getMonth() + 1);
    updateCalendar(date);
  })
})
// end calnder=========================

  </script>

</div>

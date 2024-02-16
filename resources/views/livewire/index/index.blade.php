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

.booking-content {
    background: #60affe url(assets/img/Images_6.png) 100%/cover no-repeat;
    height: 180vh !important;
    min-height: 690px;
    top: 7rem
}

.policy-content {
    background: #fff url(assets/img/policey-background.jpg) 100%/cover no-repeat;
    height: 87vh !important;
    max-height: 1000px;
    min-height: 690px;
    position: relative;
    width: 100%
}

.third-frame {
    left: -40rem !important;
    position: relative !important;
    top: 25px !important;
}
.main-navbar-index {
    background: none !important;
}
      </style>
      

          
      <section class="Hero-sction">
        <div class="Hero-intro">
          <div id="section1" class="hero-conatiner section">
            <div class="hero-content top-[22rem] relative mr-16 z-30" dir="rtl">
              <h1 class="text-white text-5xl" id="intro-frame">وجهتك لابتكار</h1>
              <div class="sime-title" id="intro-frame-v2">
                <img
                  src="{{asset('assets/Frame 521.png')}}"
                  alt="custom-border"
                  class="custom-border w-[675px] h-[150px] absolute z-10 opacity-90 mt-[-2rem]"
                />
                <h1
                  class="text-white text-5xl tracking-wide z-20 absolute mt-[3rem]"
                >
                  نموذج عمل صعب التقليد
                </h1>
              </div>
              <div
                class="content-details mt-[8rem] text-white text-xl w-[810px] absolute"
              >
                <h1 class="fram-intro-text">
                  نحن نعمل على تغيير القواعد والمعايير في عالم الأعمال، ونحن هنا
                  لمساعدتك على تحقيق أهدافك بطرق لا تصدق.
                </h1>
                <button
                  dir="ltr"
                  id="fram-button"
                  class="bg-transparent hover:bg-blue-500 text-[#6CAEFF] bg-white hover:text-white py-2 px-12 border border-white-500 hover:border-transparent rounded absolute mt-8"
                >
                  <h1>
                    <i
                      class="fa-solid fa-arrow-left mr-2 top-[0.3rem] relative"
                    ></i>
                    كن جزاّ من التحول الان
                  </h1>
                </button>
              </div>
            </div>
            <!-------------------Hero right Coulmn---------------------------->
            <div class="hero-left-column relative top-[0.8rem]">
              <!-------------------icons collection Svg---------------------------->
              <div class="icons-collection">
                <img
                  src="{{asset('assets/Layer10.png')}}"
                  alt="Layer10"
                  id="top-left-rectangle"
                  class="absolute w-[50px] ml-14 mt-[7rem] z-20"
                />
                <!-------------------insides Rectangle Svg---------------------------->
  
                <img
                  src="{{asset('assets/rectangle2.png')}}"
                  class="absolute w-[50px] ml-8 mt-[18rem] z-20"
                  alt=""
                  id="icon-fram_1"
                />
                <img
                  src="{{asset('assets/rectangle.png')}}"
                  class="absolute w-[60px] ml-[26rem] mt-[10rem] z-20"
                  alt=""
                  id="icon-fram_2"
                />
                <img
                  src="{{asset('assets/Layer7.png')}}"
                  class="absolute w-[60px] ml-[26rem] mt-[18rem] z-20"
                  alt=""
                  id="icon-fram_3"
                />
              </div>
              <div class="third-frame">
                <img
                  src="{{asset('assets/img/Ellipse84.png')}}"
                  alt="main-Svgrectangle"
                  class="absolute z-10 w-[530px] mt-[1rem]"
                />
                <img
                  class="profile-media w-[280px] mt-[11rem] ml-[8rem] relative z-20"
                  src="{{asset('assets/handsome-man-with-dish-dasha-working-his-business-office-dubai-(1) 1.png')}}"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--------------------Bussniess Discription Comoponent------------------------>
      <section class="bussiness-Discription">
        <div class="splide">
          <div class="my-slider-progress" dir="rtl">
            <div class="my-slider-progress-bar"></div>
            <div class="progress-content">
              <img src="{{asset('assets/paperplane.png')}}" alt=" Icon" width="100" />
              <span id="progressText" class="text-[#2286FF] text-3xl w-[450px]">
                هل سمعت؟</span
              >
            </div>
          </div>
          <div class="splide__track section">
<ul class="splide__list section" id="section2">
            <li class="splide__slide">
              <img
                src="{{asset('assets/img/Images_1.png')}}"
                class="w-full absolute"
                id="filter-background" />
              <div
                class="Discription-content text-white m-auto w-[608px] top-[24rem] relative z-20 text-center">
                <h1>
                  هل سمعت بسيارة
                  <span id="backgroundAnimation"
                    class="background-animations">ذاتية الغسيل </span>
                  من الداخل والخارج؟
                </h1>
              </div>
            </li>
            <li class="splide__slide">
              <img
                src="{{asset('assets/img/Images_2.png')}}"
                class="w-full absolute"
                id="filter-background" />
              <div
                class="Discription-content text-white m-auto w-[608px] top-[24rem] relative z-20 text-center">
                <h1>
                  هل سمعت بمطعم يقدم وجبات للعملاء
                  <span
                    id="backgroundAnimation_2"
                    class="background-animations">
                    بناءا على حالتهم النفسية؟
                  </span>
                </h1>
              </div>
            </li>
            <li class="splide__slide">
              <img
                src="{{asset('assets/img/Images_3.png')}}"
                class="w-full absolute"
                id="filter-background" />
              <div
                class="Discription-content text-white m-auto w-[608px] top-[24rem] relative z-20 text-center">
                <h1>
                  ل سمعت بمعرض ادوات منزلية مثل ساكو وغيرها يقدم
                  <span
                    id="backgroundAnimation_3"
                    class="background-animations">
                    تجربة حقيقية
                  </span>

                  للعملاء لمعرفة كيفية استخدام الادوات التي تستخدم
                  في اعمال المنزل والحديقة
                </h1>
              </div>
            </li>
            <li class="splide__slide">
              <img
                src="{{asset('assets/img/Images_4.png')}}"
                class="w-full"
                id="filter-background" />
              <div
                class="Discription-content text-white m-auto w-[608px] top-[24rem] absolute right-0 left-0 z-20 text-center">
                <h1>
                  هل سمعت بشركة طيران
                  <br>
                  <span
                    id="backgroundAnimation_4"
                    class="background-animations">
                    تقلع طائراتها بعد امتلاء المقاعد
                  </span>
                  <br>
                  وتستهدف عملاء غير حساسين لوقت الاقلاع والهبوط؟

                </h1>
              </div>
            </li>
          </ul>          </div>
          <div class="custom-pagination">
            <button data-splide-page="1">
              <img
                class="icons-inactive w-[80px]"
                id="border-icon"
                src="{{asset('assets/icon-active.png')}}"
              />
            </button>
            <button data-splide-page="2">
              <img
                class="icons-inactive w-[80px]"
                src="{{asset('assets/icon-active-2.png')}}"
              />
            </button>
            <button data-splide-page="3">
              <img
                class="icons-inactive w-[80px]"
                src="{{asset('assets/icon-activer3.png')}}"
              />
            </button>
            <button data-splide-page="4">
              <img
                class="icons-inactive w-[80px]"
                src="{{asset('assets/icon-active-4.png')}}"
              />
            </button>
          </div>
        </div>
      </section>
      <!----------------------- Policy Component------------------>
      <section class="policy-container section" id="section3">
        <div class="policy-content">
          <div class="policy-details relative text-center z-10 top-[14rem]">
            <div class="policy-animations h-[74px]">
              <img
                src="{{asset('assets/paperplane.png')}}"
                class="w-[70px] m-auto relative left-[18rem] opacity-0"
                id="plane-frame"
                alt=""
              />
              <img
                src="{{asset('assets/img/Vector2.png')}}"
                class="w-[40px] m-auto relative left-[26px] top-[-12px] right-0 z-[-1] absolute"
                id="plane-frame_2"
                alt=""
              />
              <img
                src="{{asset('assets/img/Vector3.png')}}"
                class="w-[35px] m-auto relative left-[29px] top-[-79px] right-0 z-[-1] absolute"
                id="plane-frame_3"
                alt=""
              />
            </div>
            <h1
              class="text-3xl mt-[1.1rem] font-semibold w-[1068px] text-center text-[#2286FF] m-auto"
            >
              نحن نعمل على تغيير القواعد والمعايير في عالم الأعمال، ونحن هنا علي
              مساعدتك
            </h1>
            <span
              class="text-3xl mt-16 font-semibold w-[1068px] text-center text-[#2286FF] m-auto"
            >
              <img
                src="{{asset('assets/Frame 521.png')}}"
                alt="custom-border"
                class="custom-border m-auto left-0 right-0 w-[500px] h-[100px] absolute z-10 top-[8rem] z-[-1]"
              />
              <p class="mt-4 policy-frame text-2xl text-[#fff]">
                !تحقيق أهدافك بطرق لا تصدق
              </p>
            </span>
            <button
              dir="ltr"
              class="bg-black hover:bg-blue-500 text-[#fff] bg-black hover:text-white py-2 px-12 border border-black-500 hover:border-transparent rounded relative text-center top-[4rem] m-auto flex"
            >
              <h1>
                <i class="fa-solid fa-arrow-left mr-2 top-[0.3rem] relative"></i>
                كن جزاّ من التحول الان
              </h1>
            </button>
          </div>
        </div>
      </section>
      <!-- ---------------Booking ShowCase Section---------------- -->
      <section class="booking-container">
        <div class="booking-content">
          <div
            id="section4"
            class="booking-discription top-[10rem] text-center m-auto text-white relative z-10 section"
          >
            <h1 class="text-5xl font-bold">احجز مقابلة مجانية معنا</h1>
            <p
              class="font-semibold w-[450px] text-center m-auto relative mt-[1rem]"
            >
              استفد من فرصة مقابلة استشارية مجانية الآن!
            </p>
            <p class="font-semibold w-full text-center m-auto relative">
              دعنا نساعدك في تحقيق أهدافك وفتح أفاق جديدة لنجاحك. احجز موعدك اليوم
              وابدأ رحلتك نحو مستقبل مشرق.
            </p>
          </div>
          <div class="calender relative z-10 top-[13rem]">
            <!-- component -->
            <div id="book_now" class="box-component flex items-center justify-center py-8 px-4">

  

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
      </section>
      <!---------------------------------subscribtion section-------------------------------------->
    
      @php
      $Namozag = App\Models\Namozag::latest('id')->first(); 
      @endphp
      
    
      <section class="subscribtion">
        <div class="subscribtion-container">
          <div
            id="section5"
            class="subscribtion-title relative z-10 top-[9rem] m-auto w-full text-center text-white section"
          >
          <h1 class="text-6xl">اشترك معنا واحصل على نموذج عمل صعب التقليد</h1>
          <p class="mt-[1rem]">
            استفد من أدوات التفوق معنا: تحديد المخرجات، ابتكار الحلول، وربطها
            بنموذج عمل فريد، مع تكتيكات تنفيذية وفكرة تسويقية قوية. انضم الآن
            للنجاح!
          </p>
          </div>
          <!--<div-->
          <!--  class="subscribtion-content w-[422px] h-auto relative m-auto top-[12rem]"-->
          <!-->-->
          <!--  <div-->
          <!--    class="subscribtion-details bg-[#147EFF] h-[20vh] relative z-10 w-full rounded-t-lg"-->
          <!--  >-->
          <!--    <h1-->
          <!--      class="package-price text-l ml-6 text-white top-[3rem] relative font-semibold"-->
          <!--    >-->
          <!--      س.ر {{$Namozag->price}}-->
          <!--    </h1>-->
          <!--    <p-->
          <!--      dir="rtl"-->
          <!--      class="text-xl text-white mr-16 relative font-semibold"-->
          <!--    >-->
          <!--      باقة مجنا استراتجي-->
          <!--    </p>-->
          <!--    <img-->
          <!--      src="{{asset('assets/paperplane (1).png')}}"-->
          <!--      alt="logo-pramtter"-->
          <!--      class="absolute right-4"-->
          <!--    />-->
          <!--    <h1 dir="rtl" class="text-xl text-white mr-16 font-semibold">-->
          <!--      للمنشأت الصغيرة-->
          <!--    </h1>-->
          <!--  </div>-->
          <!--  <div dir="rtl" class="subscribtion-feature relative z-20 mt-4">-->
          <!--    <p-->
          <!--      class="text-white font-semibold m-auto border-b-[1px] w-[90%] pb-4"-->
          <!--    >-->
          <!--    {{$Namozag->landing_p}}           -->
          <!--   </p>-->
          <!--    <ul class="feature-list mt-4 mr-2">-->
          <!--      <li dir="rtl" class="features-source">-->
<img src="{{asset('assets/arrow.png')}}" />
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_one}}       -->
          <!--          </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
          <!--        <img src="{{asset('assets/arrowv2.png')}}" />-->
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_two}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
<img src="{{asset('assets/arrow.png')}}" />
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_three}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
          <!--        <img src="{{asset('assets/arrowv2.png')}}" />-->
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_four}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
<img src="{{asset('assets/arrow.png')}}" />
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_five}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
          <!--        <img src="{{asset('assets/arrowv2.png')}}" />-->
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_six}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
<img src="{{asset('assets/arrow.png')}}" />
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_seven}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
          <!--        <img src="{{asset('assets/arrowv2.png')}}" />-->
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_eight}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
<img src="{{asset('assets/arrow.png')}}" />
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_nine}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--      <li dir="rtl" class="features-source mt-4">-->
          <!--        <img src="{{asset('assets/arrowv2.png')}}" />-->
          <!--        <p class="text-white mr-2">-->
          <!--          {{$Namozag->step_ten}}       -->
          <!--        </p>-->
          <!--      </li>-->
          <!--    </ul>-->
          <!--    <div class="sub-button m-auto relative p-4 text-center">-->
          <!--      <button-->
          <!--        id="booking-button"-->
          <!--        class="bg-[#147EFF] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-[#147EFF] hover:border-transparent rounded relative w-[250px] font-semibold"-->
          <!--      >-->
          <!--        احجز استشارتك الأن-->
          <!--      </button>-->
                
                
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          
          
          <div
          class="subscribtion-content w-[422px] h-[627px] relative m-auto top-[4rem] z-10	">
          <div
            class="subscribtion-details bg-[#147EFF] h-[20vh] relative z-10 w-full rounded-t-lg">

            <h1
            
              class="package-price text-xl ml-6 text-white top-[3rem] relative font-semibold">
               <span dir="rtl">ر.س</span>   {{$Namozag->price}}
            </h1>
            <div>
              <p
                dir="rtl"
                class="p-package-price text-xm text-white mr-16 relative font-semibold pb-2	">
                باقة مجنا استراتجي
              </p>
              <img
                src="{{asset('assets/img/paperplane(1).png')}}"
                alt="logo-pramtter"
                class="img-public  absolute right-4" />
              <h1 dir="rtl"
                class=" p-package-price text-2xl text-white mr-16 font-semibold">
                للمنشأت الصغيرة
              </h1>
            </div>
          </div>
          <div dir="rtl" class="subscribtion-feature relative z-20 mt-4">
            <p
              class="text-white font-semibold m-auto border-b-[1px] w-[90%] pb-4">
              {{$Namozag->landing_p}}           
            </p>
            <ul class="feature-list mt-4 mr-2">
              <li dir="rtl" class="features-source">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_two}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_three}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_four}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_five}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
              {{$Namozag->step_six}}       

                     </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_seven}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_eight}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_nine}}       
                </p>
              </li>
              <li dir="rtl" class="features-source mt-4">
<img src="{{asset('assets/arrow.png')}}" />
                <p class="text-white mr-2">
                    {{$Namozag->step_ten}}       
                </p>
              </li>
   
            </ul>
            <div class="sub-button m-auto relative p-4 text-center">
              <button
                id="booking-button"
                class="bg-[#147EFF] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-[#147EFF] hover:border-transparent rounded relative w-[374px] h-[50px] font-semibold">
                احجز استشارتك الأن
              </button>
            </div>
          </div>
        </div>
        </div>
     @include('layouts.site_footer')
      </section>
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

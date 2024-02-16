@extends('layouts.master')
    <!--------------------Header Comoponent------------------------>
    <!---------------------------Main Hero-Section--------------------------------->

    @section('title')
        الرئيسية
    @endsection

    @section('content')   
    
    
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
          <p class="mt-[4rem]">
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
          class="subscribtion-content w-[422px] h-auto relative m-auto top-[12rem] z-10	">
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
                class="bg-[#147EFF] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-[#147EFF] hover:border-transparent rounded relative w-[250px] font-semibold">
                احجز استشارتك الأن
              </button>
            </div>
          </div>
        </div>
        </div>
     @include('layouts.site_footer')
      </section>

    @endsection

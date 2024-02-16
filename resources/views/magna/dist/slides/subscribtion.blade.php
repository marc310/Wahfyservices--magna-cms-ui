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
/* 

.subscribtion-container
{
  background: rgba(21, 21, 27, .898) url(./Public/assets/meetings_background.jpg) 100%/cover no-repeat;
  height: 2000vh !important;
  /*max-height: 1100px;*/
 max-height: 1180px;
  min-height: 1000px;
  position: relative;
  /*top: 7rem;*/
  top: 0rem !important;
  width: 100%;
  z-index: -1; */
}
      </style>
    
    
    
      @php
      $Namozag = App\Models\Namozag::latest('id')->first(); 
      @endphp
      
      
      <section class="subscribtion index-pages" id="section5">
        <div class="subscribtion-container">
          <div
            class="subscribtion-title relative z-10  w-full text-center text-white section"
          >
          <h1 class="text-6xl">اشترك معنا واحصل على نموذج عمل صعب التقليد</h1>
          <p class="mt-[4rem]">
            استفد من أدوات التفوق معنا: تحديد المخرجات، ابتكار الحلول، وربطها
            بنموذج عمل فريد، مع تكتيكات تنفيذية وفكرة تسويقية قوية. انضم الآن
            للنجاح!
          </p>
          </div>
          <div class="subscribtion-content h-auto relative z-10	">
          <div class="subscribtion-details bg-[#147EFF]  relative z-10 w-full">
            
            <div class="package--feature">
              <div class="package-text">
                <p
                  dir="rtl"
                  class="p-package-price text-xm text-white relative font-semibold	">
                  باقة مجنا استراتجي
                </p>
                <h1 dir="rtl"
                  class="p-package-price text-2xl text-white  font-semibold">
                  للمنشأت الصغيرة
                </h1>
              </div>
              <img
                src="{{asset('assets/img/paperplane(1).png')}}"
                alt="logo-pramtter"
                class="img-public right-4" />
            </div>
            <h1 class="package-price text-white relative ">
            <span dir="rtl">ر.س</span>   
              {{$Namozag->price}}
            </h1>
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
<img src="{{asset('assets/arrowv2.png')}}" />
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
<img src="{{asset('assets/arrowv2.png')}}" />
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
<img src="{{asset('assets/arrowv2.png')}}" />
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
<img src="{{asset('assets/arrowv2.png')}}" />
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

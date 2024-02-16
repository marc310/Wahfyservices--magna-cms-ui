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


.third-frame {
    left: -40rem !important;
    position: relative !important;
    top: 25px !important;
}
.main-navbar-index {
    background: none !important;
}

.policy-container
{
  display: block;
  /* height: 105vh; */
  margin: 0 auto;
  /* max-height: 800px; */
  /* max-width: 2560px; */
  position: relative;
  top: 0rem !important;  
  /*top:9rem;*/
  width: 100%;
}


footer
{
    
  background: snow !important;

}

footer h1
{
    color:#000 !important;
}
      </style>
    
      <!----------------------- Policy Component------------------>
      <section class="policy-container section index-pages" id="section3">
        <div class="policy-content">
          <div class="policy-details relative text-center z-10 ">
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
              class="policy-details--header text-3xl mt-[1.1rem] font-semibold w-[1068px] text-center text-[#2286FF] m-auto"
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
                class="s4cb custom-border m-auto left-0 right-0 w-[500px] h-[100px] absolute z-10 top-[8rem] z-[-1]"
              />
              <p class="mt-4 policy-frame text-2xl text-[#fff]">
                !تحقيق أهدافك بطرق لا تصدق
              </p>
            </span>
            <button
              dir="ltr"
              class="policy__button bg-black hover:bg-blue-500 text-[#fff] bg-black hover:text-white py-2 px-12 border border-black-500 hover:border-transparent rounded relative text-center top-[4rem] m-auto flex"
            >
              <h1>
                <i class="fa-solid fa-arrow-left mr-2 top-[0.3rem] relative"></i>
                كن جزاّ من التحول الان
              </h1>
            </button>
          </div>
        </div>
             <!-- @include('layouts.site_footer') -->

      </section>
    @endsection

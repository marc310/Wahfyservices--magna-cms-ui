@extends('layouts.master')
    <!--------------------Header Comoponent------------------------>
    <!---------------------------Main Hero-Section--------------------------------->

    @section('title')
        الرئيسية
    @endsection

    @section('content')   
    
    
    <style>
        
        
 html{
  background-color: #2c85ec
 }


  select {
  /* for Firefox */
  /* -moz-appearance: none; */
  /* for Chrome */
  /* -webkit-appearance: none; */
}

/* For IE10 */
/* select::-ms-expand {
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
} */

/* .third-frame {
    left: -40rem !important;
    position: relative !important;
    top: 25px !important;
}
.main-navbar-index {
    background: none !important;
} */
      </style>
    
      <section class="Hero-sction section index-pages" id="section1">
        <div class="Hero-intro">
          <div class="hero-conatiner">
            <div class="hero-content top-[22rem] z-30" dir="rtl">
              <h1 class="text-white text-5xl" id="intro-frame">وجهتك لابتكار</h1>
              <div class="sime-title" id="intro-frame-v2">
                <h1 class="main-text--intro text-white text-5xl tracking-wide z-20 absolute mt-[3rem]">
                  نموذج عمل صعب التقليد
                </h1>
                <img
                  src="{{asset('assets/Frame 521.png')}}"
                  alt="custom-border"
                  class="main-img-tag--intro custom-border absolute z-10 opacity-90 mt-[-2rem]"
                />
              </div>
              <div class="content-details text-white text-xl">
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
                  class="main-icon icon-1"
                />
                <!-------------------insides Rectangle Svg---------------------------->
  
                <img
                  src="{{asset('assets/rectangle2.png')}}"
                  class="main-icon icon-2"
                  alt=""
                  id="icon-fram_1"
                />
                <img
                  src="{{asset('assets/rectangle.png')}}"
                  class="main-icon icon-3"
                  alt=""
                  id="icon-fram_2"
                />
                <img
                  src="{{asset('assets/Layer7.png')}}"
                  class="main-icon icon-4"
                  alt=""
                  id="icon-fram_3"
                />
              </div>
              <div class="third-frame">
                <!-- <img
                  src="{{asset('assets/img/Ellipse84.png')}}"
                  alt="main-Svgrectangle"
                  class="absolute z-10 w-[530px] mt-[1rem]"
                /> -->
                <span class="blue-circle"></span>
                <img
                  class="main-intro--picture profile-media h-[72vh] relative z-20"
                  src="{{asset('assets/handsome-man-with-dish-dasha-working-his-business-office-dubai-(1) 1.png')}}"
                />
              </div>
            </div>
          </div>
        </div>
             <!-- @include('layouts.site_footer') -->

      </section>

    @endsection

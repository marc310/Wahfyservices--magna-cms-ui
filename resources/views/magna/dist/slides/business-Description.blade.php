@extends('layouts.master')
    <!--------------------Header Comoponent------------------------>
    <!---------------------------Main Hero-Section--------------------------------->

    @section('title')
        الرئيسية
    @endsection

    @section('content')   
    
    
    <style>
        body {
          background-color:#000
        }
/*         
        .hero-conatiner {
    background: url(assets/img/HeroSection.png) 50%/cover no-repeat !important;
    height: 100vh !important;
    max-height: 100vh !important;
    min-height: 690px !important;
    width: 100% !important;
} */


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

/* section.bussiness-Discription
{
  height: auto !important;
  margin: 0 auto;
  max-height: 700px;
  max-width: 2560px;
  min-height: 600px;
  min-height: 1400px;
  position: relative;
  width: 100%;
} */
      </style>
    
    <!--------------------Bussniess Discription Comoponent------------------------>
      <section class="bussiness-Discription index-pages" id="section2">
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
<ul class="splide__list section">
            <li class="splide__slide">
              <img
                src="{{asset('assets/img/Images_1.png')}}"
                class="w-full absolute"
                id="filter-background" />
              <div
                class="Discription-content text-white m-auto relative z-20 text-center">
                <h1>
                  هل سمعت بسيارة
                  <span id="backgroundAnimation"
                    class="background-animations">ذاتية الغسيل </span><br>
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
                class="Discription-content text-white m-auto relative z-20 text-center">
                <h1>
                  هل سمعت بمطعم يقدم وجبات للعملاء
                  <br><span
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
                class="Discription-content text-white m-auto relative z-20 text-center">
                <h1>
                  ل سمعت بمعرض ادوات منزلية مثل ساكو وغيرها يقدم
                  <br><span
                    id="backgroundAnimation_3"
                    class="background-animations">
                    تجربة حقيقية
                  </span><br>

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
                class="Discription-content text-white m-auto absolute right-0 left-0 z-20 text-center">
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
            <button  class="business-button data-splide-page='1'">
              <img
                id="business-icon-index"
                class="business-icon-image business-inactive-icon "
                src="{{asset('assets/business-icon/icon-1.png')}}"
              />
            </button>
            <button class="business-button data-splide-page='2'">
              <img
                class="business-icon-image business-inactive-icon "
                src="{{asset('assets/business-icon/icon-2.png')}}"
              />
            </button>
            <button class="business-button data-splide-page='3'">
              <img
                class="business-icon-image business-inactive-icon "
                src="{{asset('assets/business-icon/icon-3.png')}}"
              />
            </button>
            <button class="business-button data-splide-page='4'">
              <img
                class="business-icon-image business-inactive-icon "
                src="{{asset('assets/business-icon/icon-4.png')}}"
              />
            </button>
          </div>
        </div>
             <!-- @include('layouts.site_footer') -->

      </section>
    @endsection

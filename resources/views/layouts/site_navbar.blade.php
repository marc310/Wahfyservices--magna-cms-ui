<header>
 
  <?php
    $logo = App\Models\Logo::latest('id')->first(); 
    $get_url = Request::fullUrl();
    $sociallink = App\Models\Sociallink::latest('id')->first(); 

//$get_url == "http://cms.wahfyservices.com/Magna/public/contactus"  
//$get_url == "http://cms.wahfyservices.com/Magna/public/clients"
   ?>
   
   
   @if( $get_url == "http://cms.wahfyservices.com/Magna/public/policy")
      
  <nav
      
        
        class="main-navbar-routes mr-16 mt-8 flex fixed right-0 z-50"
        dir="rtl">
        <div class="responsive-icons mr-6">
          <i class="fa-solid fa-bars icon-active"></i>
        </div>
        <a href="{{url('/index')}}">
          <div class="logo" id="logo_routes">
            <img
            src="{{url('assets/Logo.png')}}"
              alt
              class="magna-logo w-[150px] relative mt-[0.2rem] mr-16" />
          </div>
        </a>
        <!------responsive_logo--------->
        <a href="./index.html">
          <div class="responsive_logo">
            <img
              src="{{asset('uploads/logo/'.$logo->logo_image)}}"
              alt=""
              class="magna-logo w-[30px] relative mt-[1.5rem] mr-16"
            />
          </div>
        </a>
        
        <ul class="main-list flex mr-2 mt-2 font-semibold" id="nav-routes">
       <li><a href="{{URL::to('index')}}">{{$sociallink->home}}</a></li>
      <li><a href="{{URL::to('policy')}}">{{$sociallink->manahageya}}</a></li>
      <li><a href="{{URL::to('clients')}}">{{$sociallink->clients}}</a></li>
      <li><a href="{{URL::to('contactus')}}">{{$sociallink->contactus}}</a></li>
        </ul>
      </nav>
       <a href="{{url('/index#book_now')}}"
        id="booking-button"
        dir="ltr"
        class="bg-transparent-nav mt-[-0.5rem] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded left-16  top-[2rem] z-50 fixed">
        احجز استشارتك الأن
      </a>

      
         @elseif( $get_url == "http://cms.wahfyservices.com/Magna/public/contactus")
      
   <nav
  class="main-navbar-routes mr-16 mt-8 flex fixed right-0 z-50"
        dir="rtl">
        <div class="responsive-icons mr-6">
          <i class="fa-solid fa-bars icon-active"></i>
        </div>
        <a href="{{url('/index')}}">
          <div class="logo" id="logo_routes">
            <img
            src="{{url('assets/Logo.png')}}"
              alt
              class="magna-logo w-[150px] relative mt-[0.2rem] mr-16" />
          </div>
        </a>
        <!------responsive_logo--------->
        <a href="./index.html">
          <div class="responsive_logo">
            <img
              src="{{asset('uploads/logo/'.$logo->logo_image)}}"
              alt=""
              class="magna-logo w-[30px] relative mt-[1.5rem] mr-16"
            />
          </div>
        </a>
        
        <ul class="main-list flex mr-2 mt-2 font-semibold" id="nav-routes">
       <li><a href="{{URL::to('index')}}">{{$sociallink->home}}</a></li>
      <li><a href="{{URL::to('policy')}}">{{$sociallink->manahageya}}</a></li>
      <li><a href="{{URL::to('clients')}}">{{$sociallink->clients}}</a></li>
      <li><a href="{{URL::to('contactus')}}">{{$sociallink->contactus}}</a></li>
        </ul>
      </nav>
       <a href="{{url('/index#book_now')}}"
        id="booking-button"
        dir="ltr"
        class="bg-transparent-nav mt-[-0.5rem] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded left-16  top-[2rem] z-50 fixed">
        احجز استشارتك الأن
      </a>




   @elseif( $get_url == "http://cms.wahfyservices.com/Magna/public/clients")
      
      <nav
        class="main-navbar-routes mr-16 mt-8 flex fixed right-0 z-50"
        dir="rtl">
        <div class="responsive-icons mr-6">
          <i class="fa-solid fa-bars icon-active"></i>
        </div>
        <a href="{{url('/index')}}">
          <div class="logo" id="logo_routes">
            <img
            src="{{url('assets/Logo.png')}}"
              alt
              class="magna-logo w-[150px] relative mt-[0.2rem] mr-16" />
          </div>
        </a>
        <!------responsive_logo--------->
        <a href="./index.html">
          <div class="responsive_logo">
            <img
              src="{{asset('uploads/logo/'.$logo->logo_image)}}"
              alt=""
              class="magna-logo w-[30px] relative mt-[1.5rem] mr-16"
            />
          </div>
        </a>
        
        <ul class="main-list flex mr-2 mt-2 font-semibold" id="nav-routes">
       <li><a href="{{URL::to('index')}}">{{$sociallink->home}}</a></li>
      <li><a href="{{URL::to('policy')}}">{{$sociallink->manahageya}}</a></li>
      <li><a href="{{URL::to('clients')}}">{{$sociallink->clients}}</a></li>
      <li><a href="{{URL::to('contactus')}}">{{$sociallink->contactus}}</a></li>
        </ul>
      </nav>
       <a href="{{url('/index#book_now')}}"
        id="booking-button"
        dir="ltr"
        class="bg-transparent-nav mt-[-0.5rem] hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded left-16  top-[2rem] z-50 fixed">
        احجز استشارتك الأن
      </a>

 
  @else
  <nav class="main-navbar z-50" dir="rtl">
      
    <a href="{{url('/index')}}">
      <div class="logo">
        <img
           src="{{asset('assets/Logo.png')}}" 
           {{--  src="{{asset('uploads/logo/'.$logo->logo_image)}}"--}}
          alt=""
          class="magna-logo w-[150px] relative mt-[0.2rem] mr-16"
        />
      </div>
    </a>
    <!--------------------logo V2------------------------>

    <a href="{{url('/index')}}">
      <div class="logo_2">
        <img
           src="{{asset('assets/Logo_3.png')}}" 
          {{--  src="{{asset('uploads/logo/'.$logo->logo_image)}}" --}}
          alt=""
          class="magna-logo w-[150px] relative mt-[0.2rem] mr-16"
        />
      </div>
    </a>
    <!--------------------logo V3------------------------>
    <a href="{{url('/index')}}">
      <div class="logo_3">
        <img
          src="{{asset('assets/Logo_2.png')}}" 
          {{--  src="{{asset('uploads/logo/'.$logo->logo_image)}}"--}}

          alt=""
          class="magna-logo w-[150px] relative mt-[0.2rem] mr-16"
        />
      </div>
    </a>
    <!--------------------nav Comoponent------------------------>

    <!-- mobile menu -->
    <div class="mobile-menu">
      <a onclick="sidebarToggle()" class="menu-toggle">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </a>
      <!--------------------logo mobile------------------------>
      <a class="logo-mobile" href="{{url('/index')}}">
        <div class="logo-mobile">
          <img
            src="{{asset('assets/Logo-mobile.png')}}" 
            {{--  src="{{asset('uploads/logo/'.$logo->logo_image)}}"--}}

            alt=""
            class="magna-logo"
          />
        </div>
      </a>
    </div>

    <div class="menu-links">
      <ul class="main-list flex">
        <li><a href="{{URL::to('index')}}">{{$sociallink->home}}</a></li>
        <li><a href="{{URL::to('policy')}}">{{$sociallink->manahageya}}</a></li>
        <li><a href="{{URL::to('clients')}}">{{$sociallink->clients}}</a></li>
        <li><a href="{{URL::to('contactus')}}">{{$sociallink->contactus}}</a></li>
      </ul>
      <a href="{{url('/index#book_now')}}"
        id="booking-button"
        dir="ltr"
        class="menu-booking-button bg-transparent hover:bg-blue-500 text-white hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded font-light"
      >
        احجز استشارتك الأن
      </a>
    </div>

  </nav>
  
  
    @endif   



      
  <div class="menu-sidebar" id="sidebar">
    <div class="sidebar-header">
      <a class="sidebar-logo" href="{{url('/index')}}">
          <img
            src="{{asset('assets/Logo_2.png')}}" 
            {{--  src="{{asset('uploads/logo/'.$logo->logo_image)}}"--}}
            alt=""
            class="magna-logo w-[150px] relative mt-[0.2rem] mr-16"
          />
      </a>
      <a onclick="backsidebar()" class="backsidebar">
        <i class="fa-solid fa-chevron-right"></i>
      </a>
    </div>
    <a href="{{url('/index#book_now')}}"
      id="booking-button"
      dir="ltr"
      class="menu-booking-button"
      >
      احجز استشارتك الأن
    </a>
    <ul class="mobile-links">
      <li><a href="{{URL::to('index')}}">{{$sociallink->home}} <img src="{{ asset('assets/arrow.png') }}"></a></li>
      <li><a href="{{URL::to('policy')}}">{{$sociallink->manahageya}} <img src="{{ asset('assets/arrow.png') }}"></a></li>
      <li><a href="{{URL::to('clients')}}">{{$sociallink->clients}} <img src="{{ asset('assets/arrow.png') }}"></a></li>
      <li><a href="{{URL::to('contactus')}}">{{$sociallink->contactus}} <img src="{{ asset('assets/arrow.png') }}"></a></li>
    </ul>
  </div>



  <!--<div class="scrollbar">-->
  <!--  <div class="dot" data-target="section1"></div>-->
  <!--  <div class="dot" data-target="section2"></div>-->
  <!--  <div class="dot" data-target="section3"></div>-->
  <!--  <div class="dot" data-target="section4"></div>-->
  <!--  <div class="dot" data-target="section5"></div>-->
  <!--</div>-->
  
  
  
  
  <!--<div class="scrollbar">-->

  <!--     <div>-->
  <!--          <a href="#section1" class="" >-->
  <!--            <i  id="scrollArrow"   class="fa-solid fa-arrow-up  arrow-up-scrollbar"   ></i>-->
  <!--          </a>-->
  <!--        </div>-->
          
  <!--       <div class="dot" data-target="section1"></div>-->
  <!--        <div class="dot" data-target="section2"></div>-->
  <!--        <div class="dot" data-target="section3"></div>-->
  <!--        <div class="dot" data-target="section4"></div>-->
  <!--        <div class="dot" data-target="section5"></div>-->
  <!--      </div>-->
  
  
  <div class="scrollbar">
    <a id="scrollArrow" href="{{url('/test')}}" class="fa-solid fa-arrow-up  arrow-up-scrollbar"></a>
    <a href="{{url('/test')}}" class="dot" data-target="section1"></a>
    <a href="{{url('/business-Description')}}" class="dot" data-target="section2"></a>
    <a href="{{url('/policy-container')}}" class="dot" data-target="section3"></a>
    <a href="{{url('/booking-content')}}" class="dot" data-target="section4"></a>
    <a href="{{url('/subscribtion')}}" class="dot" data-target="section5"></a>
  </div>
        
</header>
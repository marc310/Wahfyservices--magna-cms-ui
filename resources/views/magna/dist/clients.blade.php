@extends('layouts.master')

@section('title')
    عملاؤنا
@endsection


@section('content')
    
<style>
  .Routes-container
{
  background: url(assets/img/Frame_488.png) 50%/cover no-repeat !important;
  height: 60vh !important;
  /*max-height: 500px !important;*/
}
.scrollbar{
  display: none !important;
}



.splide {
    position: relative;
}

.splide:after {
    content: url(assets/img/icon.png);
    position: absolute;
    right: -50px;
    top: 43%;
}

.splide:before {
    content: url(assets/img/Vector.png);
    position: absolute;
    left: -50px;
    top: 43%;
}
</style>
    <!--ALL ROUTES Header ShowCASE-->


    @php
$aboutus = App\Models\About::latest('id')->first(); 
@endphp

    <section class="Routes-header" id="clients-Route">
      <div class="Routes-container Routes-container-client" id="client-routes_container">
        <div
          dir="rtl"
          class="routes-content text-white relative z-10 mr-12 top-[12rem]"
          id="client-routes_content"
        >
          <h1 class="h1-clinet text-5xl">{{$aboutus->about_name}}</h1>
          <p class="mt-8 text-xl font-thin">
            {{$aboutus->about_desc}}
          </p>
        </div>
      </div>
    </section>
    <!--          End FROM HERE DEPLOY ON ALL ROUTES         -->
    <div class="client-range bg-white w-[80%] mt-[-4rem] m-auto">
      <section class="sponsers-logo top-[3rem]">
        <div
          class="text-center font-thin text-3xl text-[#147EFF] tracking-wide"
        >
          <h1>من هم عملاؤنا المميزين</h1>
        </div>
        <div class="grid grid-cols-4 m-auto gap-[4rem] mt-12">
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
          <div class="sponsers_column">
            <img src="{{asset('assets/sponsers_logo.png')}}" />
          </div>
        </div>
      </section>
      <div class="feedback-slider mt-[4rem]">
        <h1 class="text-[#147EFF] text-4xl text-center relative top-[4rem]">
          ماذا قالو عن ماجنا ستراتيجي
        </h1>
        
        <div
          class="splide lg:w-[60%] m-auto bg-[#EDF2F7] text-center mt-[7rem] h-auto rounded sm:w-full rounded-2xl"
        >
            
            
          <div class="splide__track">
            <ul class="splide__list">

@php
$comments = App\Models\Clients_Comments::get();
@endphp

              @foreach ($comments as $comments)
                  
              <li class="splide__slide">
                <img
                  src="{{asset('assets/icons8_get_quote_1 1.png')}}"
                  alt=""
                  class="quote absolute ml-6 mt-8"
                />
                <div dir="rtl" class="client-avatar flex">
                  <img
                    src="{{asset('uploads/comments/'.$comments->image)}}"
                    class="w-[80px] h-[80px] mt-[1rem] mr-6 bg-[#aeaeae] rounded-full"
                  />
                  <div class="slider-content font-bold mr-4 mt-8">
                    <h1 class="client-name">{{ $comments->commentor_name }}</h1>
                    <h1 class="client-title"> {{ $comments->commentor_job }}</h1>
                  </div>
                </div>
                <div class="feedback-discription w-[full]">
                  <p>
                    {{ $comments->comment }}
                  </p>
                </div>
              </li>
              @endforeach

            </ul>
          </div>
        </div>
      </div>
    </div>
    
    @include('layouts.site_footer_2')
    @endsection


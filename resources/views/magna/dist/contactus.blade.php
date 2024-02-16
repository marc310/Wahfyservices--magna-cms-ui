@extends('layouts.master')

@section('title')
    تواصل معنا
@endsection

@section('content')
    
<style>
  .Routes-container{
    background:url(assets/img/Frame_488.png) 50%/cover no-repeat;
    height:60vh;
    /*max-height:500px !important;*/
  }
  .scrollbar{
  display: none !important;
}
  </style>   

@php
$feature = App\Models\Feature::latest('id')->first(); 
@endphp
    <!--ALL ROUTES Header ShowCASE-->
    <!--<section class="Routes-header" id="clients-Route">-->
    <!--  <div class="Routes-container" id="client-routes_container">-->
    <!--    <div-->
    <!--      dir="rtl"-->
    <!--      class="routes-content text-white relative z-10 mr-12 top-[12rem]"-->
    <!--      id="client-routes_content"-->
    <!--    >-->
    <!--      <h1 class="text-6xl">{{$feature->feature_h}}</h1>-->
    <!--      <p class="mt-8 text-xl font-thin">-->
    <!--        {{$feature->feature_p}}-->
    <!--      </p>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    
      <section class="Routes-header" id="clients-Route">
      <div class="Routes-container Routes-container-contact" id="client-routes_container">
        <div
          dir="rtl"
          class="routes-content text-white relative z-10 mr-12 top-[12rem]"
          id="client-routes_content">
          <h1 class="text-4xl">{{$feature->feature_h}}</h1>
          <p class="mt-8 text-xl font-thin">
            {{$feature->feature_p}}
          </p>
        </div>
      </div>
    </section>
    
    <div
      class="lg:grid grid-cols-2 sm:grid grid cols-1 block max-w-[1260px] m-auto pb-12"
     
    >
      <!----------------------Contacts inputs ----------------------------->
      <section class="contact-inputs w-[476px] h-[752px] bg-white ml-[4rem]">
        <h1 dir="rtl" class="text-xl mt-4 rounded mr-4 pb-2">
          تواصل مع الدعم الفني
        </h1>
        <div class="contact-form">
            <form id="contactusform" class="probootstrap-form probootstrap-form-box mb60" method="post" action="{{route('contact.store')}}">
              {{ csrf_field() }}
            <hr class="my-6" />
            <label
              dir="rtl"
              class="uppercase text-sm float-right mr-4 font-bold opacity-70"
              >الاسم</label
            >
            <input
              dir="rtl"
              type="text"
              placeholder="الاسم"
              name="name"
              required
              class="@error('name') is-invalid @enderror p-3 top-2 relative mt-6 mb-4 w-[450px] block ml-[1rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
            />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            <label
              dir="rtl"
              class="uppercase text-sm float-right mr-4 font-bold opacity-70"
              >البريد الالكتروني</label
            >
            <input
              dir="rtl"
              type="email"
              name="mail"
              required
              placeholder="البريدالالكتروني"
              class="@error('mail') is-invalid @enderror p-3 top-2 relative mt-6 mb-4 w-[450px] block ml-[1rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
            />

                    
            @error('mail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label
              dir="rtl"
              class="uppercase text-sm float-right mr-4 font-bold opacity-70"
            >
              رقم التواصل</label
            >
            <input
              dir="rtl"
              type="text"
              name="phone_no"
              required
              placeholder="رقم التواصل"
              class="@error('phone_no') is-invalid @enderror p-3 top-2 relative mt-6 mb-4 w-[450px] block ml-[1rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
            />

            @error('phone_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            <label
              dir="rtl"
              class="uppercase text-sm float-right mr-4 font-bold opacity-70"
            >
              الرسالة
            </label>
            <textarea
              dir="rtl"
              id="message"
              name="message"
              required
              rows="4"
              class="@error('message') is-invalid @enderror contact-inputs-textarea p-3 top-2 relative mt-6 mb-4 w-[450px] h-[267px] block ml-[1rem] bg-white rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none"
              placeholder="اكتب رسالتك."
            ></textarea>

        
            @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          <button type="submit"
            class="w-[120px] p-[0.6rem] text-center relative top-[1rem] left-[1rem] shadow-lg shadow-gray-500/50 bg-[#147EFF] text-white rounded-lg text-[15px] cursor-pointer active:scale-[.97]"
          >
            ارسال
          </button>
        </form>
   
        </div>
      </section>
      
      
      
      
      <!----------------------Contacts info ----------------------------->
      <div class="left-column grid-cols-1">
        
               <section
          class="contact-info float-right w-[652px] h-[165px] bg-white mr-12">
          <h1
            dir="rtl"
            class=" contact-info-h1 text-2xl border-b-2 w-[90%] mr-4 float-right mt-4 p-[1rem]">
            معلومات عن التواصل
          </h1>


            <div class="contact-info_container mt-4 float-right">
           
            <a
              href="tel:{{$feature->feature_phone}}"
              class="text-black relative right-[-11rem] hover:underline">{{$feature->feature_phone}}
              <i class="fa-brands fa-whatsapp"></i></a>
            <a
              href="mailto:{{$feature->feature_fax}}"
              class="text-black mt-2 relative right-[-8rem] hover:underline pb-3">
               {{$feature->feature_fax}}
                <i class="fa-solid fa-envelope"></i></a>
          </div>
        </section>
        <!------------------MAP Section---------------------->
    <!--<section id="map">-->
    <!--      <div class="map_container">-->
    <!--        <div dir="rtl" class="location absolute right-0">-->
    <!--          <h1 class="text-4xl mr-2 border-b-2 w-[600px] p-[0.2rem]">-->
    <!--            عنوان الشركة-->
    <!--          </h1>-->
    <!--          <span class="on-hold flex">-->
    <!--            <p dir="ltr" class="text-2xl mt-2">-->
    <!--              {{$feature->feature_address}}-->
    <!--            </p>-->
    <!--            <i dir="rtl" class="fa-solid fa-location-dot"></i>-->
    <!--          </span>-->
    <!--        </div>-->
    <!--        <iframe-->
    <!--          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475323.9792524807!2d39.2111492!3d21.45012295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d01fb1137e59%3A0xe059579737b118db!2sJeddah%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1705508225378!5m2!1sen!2seg"-->
    <!--          width="620"-->
    <!--          height="321"-->
    <!--          style="border-radius: 12px"-->
    <!--          allowfullscreen=""-->
    <!--          loading="lazy"-->
    <!--          referrerpolicy="no-referrer-when-downgrade"-->
    <!--        ></iframe>-->
    <!--      </div>-->
    <!--    </section>-->
    
            <section id="map">
          <div class="map_container">
            <div dir="rtl" class="location absolute right-0">
              <!-- edit------------------------- -->

              <h1
                class="text-xl mt-5 mr-2 mb-1 border-b-2 w-[600px] p-[0.5rem] pb-[1rem]">
                <!-- edit------------------------- -->

                عنوان الشركة
              </h1>
              <!-- edit------------------------- -->
              <span class="on-hold mt-5 mr-2 mb-5 flex justify-end	flex-row-reverse	">
                <!-- edit------------------------- -->

                <p dir="ltr" class="text-xl mr-2">
             {{$feature->feature_address}}              
               </p>
                <i dir="rtl" class="fa-solid fa-location-dot"></i>
              </span>
            </div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475323.9792524807!2d39.2111492!3d21.45012295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d01fb1137e59%3A0xe059579737b118db!2sJeddah%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1705508225378!5m2!1sen!2seg"
              width="620"
              height="321"
              style="border-radius: 12px"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
      </div>
    </div>

    @include('layouts.site_footer_2')

@endsection

@extends('layouts.master')

    
@section('content')
<style>
    
</style>
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('images/IMG-20230502-WA0003.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <p class="heading mb-2 display-4 font-light probootstrap-animate">تقدم شركة المسار الإلكترونى خدمة متميزة لعملائنا الكرام
              قم بعمل بحث او استعلام عن الطلبات الخاصة بك   .
            </p>
            <p class="lead mb-5 probootstrap-animate">

            </p>
              <a href="{{url('/search_request')}}" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">قم بالبحث عن  طلب</a> 
            </p>
          </div> 

        </div>
      </div>
    
    </section>
    <!-- END section -->

   
@include('layouts.site_footer')

@extends('layouts.master')

    
@section('content')
<style>
    .label{
      background-color: #00CA4C;
    color: #fff;
    font-weight: bold;
    text-align: center;
    line-height: 2.5;
    margin-top: 3px;
    white-space: nowrap;
    }
</style>
    
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('images/IMG-20230502-WA0003.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">قم بعمل استعلام أو بحث عن الطلبات الخاصة بك </h2>
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="{{url('/site')}}" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">العودة للصفحة الرئيسية</a> 
            </p>
          </div> 
          <div class="col-md probootstrap-animate probootstrap-form-service">


            @if (Session::has('msg'))

            <span class="alert alert-danger">
   {{Session::get('msg')}}
            </span>    
                 @endif


              @php 
$logo = App\Models\Logo::latest('id')->first(); 
@endphp
<div class="probootstrap-form-service">            
<img class="img-responsive logo-image" src="{{asset('uploads/logo/'.$logo->logo_image)}}" width="40" height="30"  /> 
</div>        
  <form class="probootstrap-form" method="GET" action="{{route('service.search')}}" enctype="multipart/form-data">
    @csrf
              <div class="form-group">
                <div class="row mb-3">
                    <div class="label col-md-3">
                      <label for="id_label_single">الإسم : </label>
                    </div>
                    <div class="col-md-9">
                     <input type="text" name="requested_name" class="form-control" value="" required id="requested_name">
                  </div>
                </div>
                </div>
                <!-- END row -->
                <div class="form-group">
                  <div class="row mb-3">
                      <div class="label col-md-4">
                        <label for="id_label_single">رقم التصريح / الجواز : </label>
                      </div>
                      <div class="col-md-8">
                       <input type="text" name="requested_num" class="form-control" value="" required id="requested_num">
                    </div>
                  </div>
                  </div>
                <!-- END row -->
                <div class="row">
                <span class="col-md-4"></span>
        <span style="display:none;" class="btn-success btn-md col-md-4 text-center">البحث</span>
        <span class="col-md-4"></span>
                </div>

                <div class="row pt-2">
                  <button type="submit" class="btn-success btn-md col-md-4">استعراض الطلب</button>
                </form>

                

                  <form id="req_status" class="col-md-4" method="GET" action="{{route('service.get_status')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden"  id="request_name" name="request_name" >
                    <input type="hidden"  id="request_num"  name="request_num" >
                  </form>
                  {{-- <button type="submit" class="btn-success btn-md col-md-4">حالة التصريح</button> --}}
                  <a class="btn-success btn-md col-md-4 text-center" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('req_status').submit();">
                   {{ __('حالة التصريح') }}
               </a>


               <div class="row mt-5">
                <span class="col-md-1"></span>
                <a href="{{url('/site')}}" style="margin-right: 100px;" class="btn-success btn-md col-md-10 text-center">الرجوع للصفحة الرئيسية</a>
                <span class="col-md-1"></span> 
              </div>

                  </div>

                

              </div>

<!-- end of div -->


          </div>
        </div>

    
      </div>
    
    </section>
    <!-- END section -->
    

    
   
@include('layouts.site_footer')

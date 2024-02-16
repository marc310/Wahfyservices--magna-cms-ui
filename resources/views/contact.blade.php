@extends('layouts.master')

    
@section('content')
    

      @php
       $feature = App\Models\Feature::latest('id')->first(); 
              @endphp

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('images/IMG-20230502-WA0004.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">{{$feature->feature_h}}</h2>
             
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="#contactusform" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">راسلنا</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <p class="mb-5">
             {{$feature->feature_p}}
            </p>
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> البريد الالكترونى</span>
                    you_mail@gmail.com
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> تليفون</span>
                    {{$feature->feature_phone}}
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> فاكس</span>
                    {{$feature->feature_fax}}
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span> العنوان</span>
                    {{$feature->feature_address}}<br>
               
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7  probootstrap-animate">
            
            @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

              <form id="contactusform" class="probootstrap-form probootstrap-form-box mb60" method="post" action="{{route('contact.store')}}">
                {{ csrf_field() }}
              <div class="row mb-3">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable"> الإسم</label>
                    <input type="text" class="form-control" id="fname" name="name" placeholder="الإسم">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">البريد الالكترونى</label>
                <input type="email" class="form-control" id="email" name="mail" placeholder="البريد الالكترونى">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="اكتب الرسالة"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="أرسال">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  
  
    @include('layouts.site_footer')

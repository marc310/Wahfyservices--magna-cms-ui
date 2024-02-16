@extends('layouts.master')

    
@section('content')
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('images/IMG-20230502-WA0004.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">عن الموقع</h2>
             
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="#contactusform" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">نبذه عن الموقع</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6">
          @php 
$about = App\Models\About::latest('id')->first(); 
@endphp
          <div class="col-md-12 probootstrap-animate">
            <h2>{{$about->about_name}}</h2>
            <p class="mb-5">
              {{$about->about_desc}}
            </p>

            <p class="mb-5">
              {{$about->about_desc_2}}
            </p>
          
          </div>
      
        </div>
        <div class="col-md-6">
          <img class="img-rounded img-responsive" src="{{asset('uploads/about/'.$about->about_image)}}" width="500" height="300" alt="">
        </div>
        </div>
       
      </div>
  
    </section>
    
  
    @include('layouts.site_footer')

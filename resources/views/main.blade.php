<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leon | Template One</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="{{asset('css/leon.css')}}" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}



    </style>
  </head>

  <body>
    <!-- Start Header -->
    <div class="header" style="padding: 2px;">
      <div class="container">
        
       <!-- <img class="logo" src="images/logo.png" alt="" /> -->
       @php
       $logo = App\Models\Logo::orderBy('id', 'desc')->first();
   @endphp
   
      <div >
          @if($logo)
        <img class="logo" style="float: left;" src="{{asset('uploads/'.$logo->logo_image)}}" height="60" width="24" alt="" />
    &nbsp; <h3 style="float: right;">{{$logo->logo_name}}</h3>
        @else
                            <center>{{'no logo inserted'}}</center>

        @endif
      </div>
        <div class="links">
          <span class="icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <ul>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing Section -->
  
  <!--  <div class="landing">
      
      <div class="intro-text">
        <h1>Hello There</h1>
        <p>We are Leon - Super Creative & Minimal Agency Web Template</p>
      </div>
    </div>
  -->

    <div class="container" style="
color: white;
padding: 0;
margin: 0;
height: 100px;

  ">
    @php
    $landing = App\Models\Landing::orderBy('id', 'desc')->first();
@endphp


@if($landing)
<img src="{{asset('uploads/'.$landing->landing_image)}}" alt="Snow" style="
position: absolute;
width: 100%;
height: calc(100vh - 64px);
">

<div class="centered intro-text" style="
position: absolute;
top: 48%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
"> 
<h1 style="color: #11ccb9;">{{$landing->landing_h}}</h1>
<p class="intro-text" style="color: #000;">{{$landing->landing_p}}</p>
</div>
@else

{{'No landing image or data'}}

@endif
  
  </div>

    <!-- End Landing Section -->
    <!-- Start Features -->
    <div class="features" style="margin-top: 475px;">

      @php
      $Feature = App\Models\Feature::all();
  @endphp

      <div class="container" style="margin-top:75px;">
        @foreach ($Feature as $Feature)

        <div class="feat">
         <!-- <i class="fas fa-magic fa-3x"></i> -->
         <img src="{{asset('uploads/'.$Feature->feature_image)}}" alt="" height="35" width="35">
          <h3>{{$Feature->feature_h}}</h3>
          <p>{{$Feature->feature_p}}</p>
        </div>
  @endforeach
      </div>
    </div>
    <!-- End Features -->
    <!-- Start Services -->
    <div class="services" id="services">
      <div class="container">
        <h2 class="special-heading">Services</h2>
        <p>Don't be busy, be productive</p>
        <div class="services-content">
          @php
              $services = App\Models\Service::all();
              
               $services_count = App\Models\Service::count();

              $max_iteration = round(count($services));

          @endphp



@if($services_count > 0)



@foreach($services->chunk(2) as $services)

          <div class="col-md-8">

            @foreach ($services as $services)

            <!-- Start Service -->
            <div class="srv">
              <i class="fas fa-palette fa-2x"></i>
              <!--<img style="flex-basis: 60px; float:left;" src="{{asset('uploads/'.$services->service_image)}}" alt="" height="45" width="35">-->
              <div class="text" style="line-height: 20px;">
                <h3>{{$services->service_name}}</h3>
                <p>
                  {{$services->service_desc}}
                </p>
              </div>
            </div>
            @endforeach


            <!-- End Service -->
          </div>
          @endforeach


            @php
              $get_services_img = App\Models\Service::orderBy('id','asc')->first();
          @endphp

          <div class="col-md-4">
            <div class="image image-column">
         <img src="{{asset('uploads/'.$get_services_img->service_image)}}">
            </div>
          </div>
        </div>
        @else
                    <center>{{'no services inserted'}}</center>

        @endif
      </div>
    </div>
    <!-- End Services -->
    <!-- Start Portfolio -->
    <div class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="special-heading">Portfolio</h2>
        <p>If you do it right, it will last forever.</p>
        <div class="portfolio-content">
          @php
          $portfolios = App\Models\Portifolio::all();
          
           $portfolio_count = App\Models\Portifolio::count();

          $max_iteration = round(count($portfolios));

      @endphp


@if($portfolio_count > 0)


@foreach($portfolios as $portfolios)

          <div class="card">
            <img style="max-width: 100%; width: 750px; height: auto;" src="{{asset('uploads/'.$portfolios->portifolio_image)}}" alt="" height="60" width="69">
            <div class="info">
              <h3>{{$portfolios->portifolio_name}}</h3>
              <p>{{$portfolios->portifolio_desc}}</p>
            </div>
          </div>
    @endforeach
        </div>
      </div>
    </div>
    
    @else
            <center>{{'no portfolio inserted'}}</center>

    @endif
    <!-- End Portfolio -->
    <!-- Start About -->
    <div class="about">
      <div class="container">
        @php
        $About = App\Models\About::orderBy('id', 'desc')->first();
    @endphp
        <h2 class="special-heading">About</h2>
    
    @if($About)

        <p>{{$About->about_name}}</p>


        <div class="about-content">
          <div class="image">
            <img style="height: 375px;" src="{{asset('uploads/'.$About->about_image)}}" alt="" />
          </div>
          <div class="text">
            <p>
              {{$About->about_desc}}
            </p>
            <hr />
            <p>
       {{$About->about_desc_2}}
            </p>
          </div>
        </div>
        @else
        <center>{{'no footer inserted'}}</center>
        @endif
      </div>
    </div>
    <!-- End About -->
    <!-- Start Contact -->
    <div class="contact">
      <div class="container">
        <h2 class="special-heading">Contact</h2>
        <p>We are born to create</p>
        <div class="info">
         <!-- <p class="label">Feel free to drop us a line at:</p>-->
          <p class="label">Feel free to Contact us :</p>
        <!--  <a href="mailto:leonagency@mail.com?subject=Contact" class="link">leonagency@mail.com</a> -->


        <div class="container">
          @if ($message = Session::get('message'))
          <div class="alert alert-success alert-block">
           <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
          </div>
          @endif
          <form method="POST" action="{{route('contact.store')}}">
            @csrf

            <input type="text" id="fname" name="name" placeholder="Your name..">
        
            <input type="text" id="lname" name="mail" placeholder="Your Email..">
        
            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        
          </form>
        </div>



          <div class="social">
            Find Us On Social Networks
            @php
            $sociallinks = App\Models\Sociallink::orderBy('id', 'desc')->first();
        @endphp

@if (empty($sociallinks))  
<i class="fab fa-youtube"></i>
@else
<a href="{{$sociallinks->youtube}}"><i class="fab fa-youtube"></i></a>
@endif

@if (empty($sociallinks))  
<i class="fab fa-facebook"></i>
@else
<a href="{{$sociallinks->facebook}}"><i class="fab fa-facebook"></i></a>
@endif


@if (empty($sociallinks))  
<i class="fab fa-twitter"></i>
@else
<a href="{{$sociallinks->twitter}}"><i class="fab fa-twitter"></i></a>
@endif
         
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->
    <!-- Start Footer -->
    @php
    $footer = App\Models\Footer::orderBy('id', 'desc')->first();
@endphp
    <div class="footer">&copy; 
      @php
          $year = date("Y"); 
          echo $year;
      @endphp 
      @if (empty($footer))  
      <span>Leon</span>   
      @else
      <span>{{$footer->footer_span}}</span>
      @endif
       All Right Reserved</div>
    <!-- End Footer -->
  </body>
</html>

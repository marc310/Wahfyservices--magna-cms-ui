@extends('layouts.master')


@section('title')
منهجية ماجنا الإستراتيجي
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

.space-y-3 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(-3.25rem * calc(1 - var(--tw-space-y-reverse))) !important;
  margin-bottom: calc(-15.25rem * var(--tw-space-y-reverse));
  margin-left: 201px !important;
}



.data {
    display: flex;
    flex-direction: column;
    gap: 53px;
    align-items: center;
    padding-top: 100px;
    padding-bottom: 100px;
    align-content: center;
    justify-content: space-between;
}

/* rtl */

.text-p-boxx {
    font-size: 16px;
    font-weight: 800;
    line-height: 26px;
    letter-spacing: 0em;
    text-align: center;
}

.box-rtl {
   width: 815px;
    position: relative;
    min-height: 144px;
}

.box-rtl .boxx {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: nowrap;
    gap: 20px;
    flex-direction: row-reverse;
}

.box-rtl .numper {
    color: white;
    border-radius: 50%;
    padding: 3px 20px;
    font-size: 37px;
    z-index: 1;
}

.content {
    text-align: center;
}

.box-rtl:before {
    position: absolute;
    content: "";
    border-right: 4px dashed #2994eb;
    border-bottom: 4px dashed #2994eb;
    border-top: none;
    border-left: none;
    box-sizing: border-box;
    width: 135%;
    height: 50%;
    top: 55%;
    padding-bottom: 20px;
    right: 4%;
    border-radius: 0px 0px 20px 0px;
    border-width: 4px;
    animation: moveLine-t-b-l 3s linear infinite;
}

@keyframes moveLine-t-b-l {
    0% {
        width: 0%;
        height: 0px;
        border-width: 0px;
    }

    25% {
        width: 0%;
        height: 60%;
        border-width: 4px;
    }

    80% {
        width: 91%;
        height: 60%;
        border-width: 4px;
    }

    100% {
        width: 91%;
        height: 60%;
        border-width: 4px;
    }
}

.box-rtl:after {
    position: absolute;
    content: "";
    border-top: 4px dashed #2994eb;
    border-right: 4px dashed #2994eb;
    border-bottom: none;
    border-left: none;
    box-sizing: border-box;
    width: 23%;
    height: 100px;
    top: 112%;
    right: 95%;
    border-radius: 0px 20px 0px 0px;
    border-width: 3px;
    animation: moveLLiner-l-b 3s linear infinite;
    transform: rotateY(189deg);
}

@keyframes moveLLiner-l-b {
    0% {
        width: 0%;
        height: 0px;
        border-width: 0px;
    }

    79% {
        width: 0%;
        height: 0px;
        border-width: 0px;
    }

    80% {
        width: 5%;
        height: 0;
        border-width: 4px;
    }

    100% {
        width: 5%;
        height: 100px;
        border-width: 4px;
    }
}

.box-rtl .numper::after {
  content: url(assets/img/paperplane.png);
  position: absolute;
  width: 7px;
  height: 5px;
  right: 8px;
  top: 164px;
  animation: paperplane-one 3s linear infinite;
}

@keyframes paperplane-one {
    0% {
        opacity: 1;
        top: 59px;
        right: 49px;
        transform: rotate(0deg);
    }

    25% {
        top: 125px;
        right: 49px;
        opacity: 1;
        transform: rotate(0deg);
    }

    30% {
        top: 145px;
        right: 20px;
        right: 64px;
        transform: rotate(90deg);
        opacity: 1;
    }

    80% {
        top: 145px;
        right: 749px;
        transform: rotate(90deg);
        opacity: 0.7;
    }

    100% {
        top: 145px;
        right: 750px;
        transform: rotate(90deg);
        opacity: 0;
    }
}




/* ltr */
.box-ltr {
      width: 860px;
    position: relative;
    min-height: 159px;
}

.box-ltr .boxx {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: nowrap;
    gap: 20px;
    flex-direction: row;
    padding-bottom: 17px;
}

.box-ltr .numper {
    color: white;
    border-radius: 50%;
    padding: 3px 20px;
    font-size: 37px;
    z-index: 1;
}


.content {
    direction: rtl;
}

.box-ltr:not(:last-child):before {
    position: absolute;
    content: "";
    border-right: 4px dashed #2994eb;
    border-bottom: 4px dashed #2994eb;
    border-top: none;
    border-left: none;
    box-sizing: border-box;
    width: 135%;
    height: 50%;
    top: 44%;
    padding-bottom: 20px;
    left: 2.5%;
    border-radius: 0px 0px 20px 0px;
    border-width: 4px;
    transform: rotateY(180deg);
    animation: moveLine-t-b-r 3s linear infinite;
}

@keyframes moveLine-t-b-r {
    0% {
        width: 0%;
        height: 0px;
        border-width: 4px;
    }

    25% {
        width: 0%;
        height: 60%;
        border-width: 4px;
    }

    80% {
        width: 90%;
        height: 60%;
        border-width: 4px;
    }

    100% {
        width: 90%;
        height: 60%;
        border-width: 4px;
    }
}

.box-ltr:not(:last-child):after {
    position: absolute;
    content: "";
    border-top: 4px dashed #2994eb;
    border-right: 4px dashed #2994eb;
    border-bottom: none;
    border-left: none;
    box-sizing: border-box;
    width: 23%;
    height: 100px;
    top: 102%;
    right: 5%;
    border-radius: 0px 20px 0px 0px;
    border-radius: 0px 20px 0px 0px;
    border-width: 0px;
    animation: moveLLine-l-r-b 3s linear infinite;
}

@keyframes moveLLine-l-r-b {
    0% {
        width: 0%;
        height: 0px;
        border-width: 0px;
    }

    79% {
        width: 0%;
        height: 0px;
        border-width: 0px;
    }

    80% {
        width: 5%;
        height: 0;
        border-width: 4px;
    }

    100% {
        width: 5%;
        height: 100px;
        border-width: 4px;
    }
}

.box-ltr .numper:after {
    content: url(assets/img/paperplanetwo.png);
    position: absolute;
    left: -9px;
    top: 85px;
    animation: paperplane-two 3s linear infinite;

}

.box-ltr .numper.last:after {
    content: none;
}

.box-ltr.last:before,
.box-ltr.last:after {
    content: none;
}

@keyframes paperplane-two {
    0% {
        opacity: 1;
        left: 20px;
        top: 85px;
        transform: rotate(0deg);
    }

    25% {
        top: 120px;
        left: 22px;
        opacity: 1;
        transform: rotate(0deg);
    }

    30% {
        top: 125px;
        left: 68px;
        transform: rotate(-90deg);
        opacity: 1;
    }

    80% {
        top: 125px;
        left: 799px;
        transform: rotate(-90deg);
        opacity: 0.7;
    }

    100% {
        top: 125px;
        left: 800px;
        transform: rotate(-90deg);
        opacity: 0;
    }
}


/* ltr */
</style>    


@php
$manhageya = App\Models\Portifolio::get(); 
$Landing = App\Models\Landing::get(); 
$posts = App\Models\Post::latest('id')->first(); 
@endphp
<!--<section class="Routes-header" id="clients-Route">-->
<!--      <div class="Routes-container" id="client-routes_container">-->
<!--        <div-->
<!--          dir="rtl"-->
<!--          class="routes-content text-white relative z-10 mr-12 top-[12rem]"-->
<!--          id="client-routes_content"-->
<!--        >-->
<!--          <h1 class="text-6xl"> {{$posts->title}}</h1>-->
<!--          <p class="mt-8 text-xl font-thin">-->
<!--            {{$posts->content}}-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->


  <section class="Routes-header" id="clients-Route">
      <div class="Routes-container Routes-container-policy" id="client-routes_container">
        <div
          dir="rtl"
          class="routes-content text-white relative z-10 mr-12 top-[12rem]"
          id="client-routes_content">
          <h1 class="h1-section-one-policy text-4xl">{{$posts->title}}</h1>
          <p class="mt-8 text-xl font-thin">
            {{$posts->content}}        
             </p>
        </div>
      </div>
    </section>
    <!----------------------Steps sections------------------->


    <section class="steps">
      <div
        class="section-container w-[880px] bg-white h-auto m-auto relative">
        <div class="data">
          <!--  -->
          
          <?php  $latest_box = App\Models\Portifolio::latest('id')->first(); ?>
          
      @foreach ($manhageya as $manhageya)

      @if ($latest_box->id != $manhageya->id) 
        @if ($manhageya->id  % 2 != 0) 

               <div class="box-rtl">
            <div class="boxx">
                
                
                          <div
                class="numper numper bg-gradient-to-r from-cyan-500 to-blue-500 ">{{$manhageya->id}}
                </div>
              <div class="content">
                <h1 class="h1-boxx text-2xl text-[#318EFF] mt-4">
                     {{$manhageya->manhageya_title}}
				  </h1>
                <p class="p-boxx text-sm font-bold w-[676px] pb-3 mt-6">
                                {{$manhageya->manhageya_desc}}
                </p>
              </div>
              
                @else
                
                
             <div class="box-ltr">
            <div class="boxx">
                
                          <div
                class="numper numper bg-gradient-to-r from-cyan-500 to-blue-500 ">{{$manhageya->id}}
                </div>
              <div class="content">
                <h1 class="h1-boxx text-2xl text-[#318EFF] mt-4">
                     {{$manhageya->manhageya_title}}
				  </h1>
                <p class="p-boxx text-sm font-bold w-[676px] pb-3 mt-6">
                                {{$manhageya->manhageya_desc}}
                </p>
              </div>
                
             @endif

    
            </div>
          </div>
          


          
          
          @else
          <div class="box-ltr last">
            <div class="boxx">
              <div
                class="numper last bg-gradient-to-r from-cyan-500 to-blue-500">{{$manhageya->id}}</div>
                
              <div class="content">
                <h1 class="h1-boxx text-2xl text-[#318EFF] mt-4">
                     {{$manhageya->manhageya_title}}
                   </h1>
                <p
                  class="p-boxx text-sm font-bold w-[676px] pb-3 mt-6 leading-relaxed	">في
                                {{$manhageya->manhageya_desc}}
                  <br>
                  <div class="text-p-boxx">
                    وتشمل خطة العمل مايلي:
                    <br>
                    @foreach($Landing as $Landing)
                    {{$Landing->id}} - {{$Landing->landing_h}}    
                    <br>
                    @endforeach
                  </div>
                </p>
              </div>
            </div>
          </div>
          @endif

    @endforeach
        </div>

      </div>
    </section>
    
 
    @endsection

    
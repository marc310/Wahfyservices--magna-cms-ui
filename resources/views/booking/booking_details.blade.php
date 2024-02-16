@extends('layouts.app')
          
          
          <style>
    
@font-face{
  font-family: "ExpoArabic-Bold";
  
    src: url(../../webfonts/Expo-Arabic-Bold.ttf); /* IE9 Compat Modes */
    src: url(../../webfonts/Expo-Arabic-Bold.ttf) format('embedded-opentype'), /* IE6-IE8 */
         url(../../webfonts/Expo-Arabic-Bold.ttf) format('woff'), /* Modern Browsers */
         url(../../webfonts/Expo-Arabic-Bold.ttf)  format('truetype'), /* Safari, Android, iOS */
         url(../../webfonts/Expo-Arabic-Bold.ttf) format('svg'); /* Legacy iOS */
		 
	
}
			@font-face{
  font-family: "ExpoArabic-Book";
  

		 
		 src: url(../../webfonts/Expo-Arabic-Book.ttf); /* IE9 Compat Modes */
    src: url(../../webfonts/Expo-Arabic-Book.ttf) format('embedded-opentype'), /* IE6-IE8 */
         url(../../webfonts/Expo-Arabic-Book.ttf) format('woff'), /* Modern Browsers */
         url(../../webfonts/Expo-Arabic-Book.ttf)  format('truetype'), /* Safari, Android, iOS */
         url(../../webfonts/Expo-Arabic-Book.ttf) format('svg'); /* Legacy iOS */
}

h1,h2,p{
							    font-family: ExpoArabic-Bold !important;

}
label,span,a,input[type="text"],button,table{
							    font-family: ExpoArabic-Book !important;

}
</style>

@section('content')

<div class="container mt-5">

    <div class="relative mt-5 md:mt-0">
  
    <h1 class="mt-4">لوحة التحكم</h1>
 
  
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
  
                  <div class="row">
                    <div class="col-md-4">
                     <span>   طلب حجز موعد باسم :  </span>
                     <h2>{{$booking->reserver_name}}</h2>
                    </div>
                
  
                  </div>
                    </div>

@if(Session::has('msg'))
<h4 class="col-12 alert alert-success mt-1">
    {{Session::get('msg')}}
</h4>

@elseif(Session::has('error'))
<h4 class="col-12 alert alert-danger mt-1">
    {{Session::get('error')}}
</h4>
@endif
  
                 
            </div>
        </div>
  
    </div>
  
  
  
    <div class="card">
      <div class="mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            تفاصيل الحجز
        </div>
  
            
        <div class="card-body">
  

            <div class="row">
                <div class="col-6">
                    <label for="">اسم العميل : </label>
                    <input type="text" class="form-control" readonly value="{{$booking->reserver_name}}">
                </div>

                <div class="col-6">
                    <label for=""> الموبايل : </label>
                    <input type="text" class="form-control" readonly value="{{$booking->phone}}">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for=""> الإيميل : </label>
                    <input type="text" class="form-control" readonly value="{{$booking->mail}}">
                </div>

                <div class="col-6">
                    <label for=""> التاريخ : </label>
                    <input type="text" class="form-control" readonly value="{{$booking->booking_date}}">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for=""> الفترة : </label>
                    <input type="text" class="form-control" readonly value="{{$booking->booking_from."-".$booking->booking_to}}">
                </div>

                <div class="col-6">
                    <label for=""> الحالة : </label>
                    <form id="confirmBooking-form" action="{{ route('booking.update',$booking->id) }}" method="POST" >
                        @csrf
                        @method('PATCH')
                    <select class="form-control" name="booking_status" onchange="event.preventDefault();
                    document.getElementById('confirmBooking-form').submit();">
                        <option>اختر</option>
                        <option value="1" {{$booking->booking_status == 1 ? 'selected' : ''}}>تأكيد</option>
                        <option value="2" {{$booking->booking_status == 2 ? 'selected' : ''}}>إلغاء</option>
                    </select>

                
           
                </form> 
                </div>
            </div>
         
  
          
        </div>
    </div>
    </div>
  
    
    </div>
  </div>
  

  @endsection

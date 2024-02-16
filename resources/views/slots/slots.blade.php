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
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> بتاريخ {{$Appointment->indexing}} -
            ليوم {{$Appointment->appointment_day}} ومواعيد العمل </li>
    </ol>
  
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
  
                  <div class="row">
                    <div class="col-md-4">
                      <i class="fas fa-plus me-1"></i>
                     <span> أضف فترات العمل </span>
                    </div>
                
  
                  </div>
                                              </div>


                                              <?php $not_id = App\Models\Days_Slots::max('id'); ?>
                <div class="card-body col-lg-12 col-md-6 col-sm-12">
                    <form method="POST" action="{{route('slots.store')}}" enctype="multipart/form-data">
                       @csrf
                      

                       <table>
                        <tr>
                            <span>إضافة صف:</span>
                            <br>
                          <button type="button" id="clone" class="btn btn-success">+</button>
                        </tr> 
                       </table>
                
                                <table class="cloned-row table table-striped" id="0">
                        

                                  <thead>
                                    <th>اليوم</th>
                                    <th>التاريخ</th>
                                    <th>الفترة من </th>
                                    <th>الفترة إلى</th>
                                    <th>حذف</th>
                                  </thead>
  
                                    <tbody>
                                      
                                  <tr>

                                    
                                    <input type="hidden" name="indexing[]"   value="{{$not_id}}">
                                   
                                    <td><span>اليوم:</span>

                                    <input type="text" name="day[]" class="form-control" value="{{$Appointment->appointment_day}}" required>             
                                    </td>

                                    <td><span>التاريخ:</span>

                                      <input type="text" name="date_of_day[]" class="form-control" value="{{$Appointment->indexing}}" required>             
                                      </td>

                                <td><span>من:</span>
  
                                  <input class="form-control" type="time" name="begin_from[]" required value=""/>
                                </td>
                                <td><span>إلى:</span>
                                  <input class="form-control" type="time"  name="end_to[]" required value=""/>
                                
                                </td>
                            
                                <td>
                                    <span>حذف صف:</span>
                                    <br>
                                  <button type="button" id="remove" class="btn btn-danger">-</button>
                                </td>
                              </tr>
                                    </tbody>
                            </table>
                              
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                            <script>
                              $(document).ready(function() {
                            
                                $(document).on('click', '#remove', function(){
                                  $(this).closest('.cloned-row').remove();
                                });
                            });
                            </script>
                            
                            
                            <script>
                              var counter = 1;
                            
                              $("#clone").click(function () {
                                counter += 1;
                                $(".cloned-row:first").eq(0).clone().insertAfter(".cloned-row:first");  
                            
                            
                              });
                            
                            </script>
  
  
  
  
          
  
  
  
  
                    
                    
                </div>
  
                        <div class="form-group m-2">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
                           </form>
                </div>
            </div>
        </div>
  
    </div>
  
  
  
    <div class="card">
      <div class="mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           أيام الأسبوع وفترات العمل
        </div>
  
            
        <div class="card-body">
  
  
            <?php
             $Days_Slots = App\Models\Days_Slots::count();
             $Days_Slots_all = App\Models\Days_Slots::where('date_of_day',$Appointment->indexing)->get();
            ?>
            @if ($Days_Slots == 0)
                {{ 'No Available abouts' }}
            @else
  
            <table class="table table-striped" id="ex_datatable">
                <thead>
                    <tr>
                        <th>اليوم</th>
                        <th>الفترة من</th>
                        <th>الفترة إلى </th>
                        {{-- <th>edit</th> --}}
                        <th>حذف</th>
                    </tr>
  
                <tbody>
                    @foreach ($Days_Slots_all as $Days_Slots_all)
  
                    <tr>
                
                        <td>{{ $Days_Slots_all->day}}</td>
                        <td>{{ $Days_Slots_all->begin_from}}</td>
                        <td>{{ $Days_Slots_all->end_to}}</td>
                        {{-- <td>                       
               <button type="button"  data-toggle="modal" data-comment_id="{{$comment->id}}" data-about_name="{{$comment->about_name}}" data-about_desc="{{$comment_all->about_desc}}" data-target="#editabout" class="btn btn-primary btn-sm mt-1">
                   <i class="fas fa-pen me-1"></i>
                </button>                                          
                        </td> --}}
                        <td>
                      
         
  
            
            <form action="{{ route('slots.destroy', $Days_Slots_all->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                <i class="fas fa-trash me-1"></i>
              </button>
          </form>
  
  
                        </td>
                        @endforeach
    @endif
                      </tr>
  
                
  
                </tbody>
            </table>
        </div>
    </div>
    </div>
  
    
    </div>
  </div>
  

  @endsection

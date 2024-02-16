<div class="container">

<style>
    .btn-outline-secondary{
        color: #b3e4ff !important;
    border-color: #b3e4ff !important;
    border-radius:0px !important;
    }
    .form-control{
        border-radius:0px !important;
    }
</style>
  <div class="relative mt-3 md:mt-0">

  <h1 class="mt-4">لوحة التحكم</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"> تحديد المواعيد</li>
  </ol>

  <div class="row">
      <div class="col-xl-12">
          <div class="card mb-4">
              <div class="card-header">

                <div class="row">
                  <div class="col-md-4">
                    <i class="fas fa-plus me-1"></i>
                   <span> أضف  مواعيد جديدة </span>
                  </div>
                  <div class="col-md-4">
                    
                    <span>أيام الحجوزات:</span>

                                    

                  </div>

                </div>
                </div>

              <div class="card-body col-lg-12 col-md-6 col-sm-12">
                  <form method="POST" action="{{route('appointment.store')}}" enctype="multipart/form-data">
                     @csrf
                    
              
        

<div class="row">                        
  
  <div class="form-group col-4">     <!-- 1st textfield with datepicker --> 
    <label>التاريخ من : </label>                                           
      <input type="text" name="indexing"  class="form-control" placeholder="من"   id="datepicker" />  
       </div>

       <div class="form-group col-4">     <!-- 1st textfield with datepicker -->                                            
        <label>التاريخ إلى : </label>                                           
        <input type="text" name="appointment_day" class="form-control" placeholder="إلى"  id="datepicker_2" />  
         </div>

         <div class="form-group col-4">
          <label></label> 
          <br>                                          
          <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
</div>
</form>

                                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
                                <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

                                <script>
                                  $('#datepicker').datepicker({
                                      uiLibrary: 'bootstrap5'
                                  });
                                </script>

                             <script>
                                $('#datepicker_2').datepicker({
                                     uiLibrary: 'bootstrap5'
                                    });
                                  </script>
                                {{-- <script>
                                
                                
                                
                                $("#pickyDate").datepicker({
                                onSelect: function(dateText) {
                                var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu' ];
                                var selecteddate = new Date (dateText).getDay ();
                                var weekday = days[selecteddate];
                                $('#txt_daypk').val(weekday);
                                }
                                });
                                </script>  --}}
                              
                         

                         
                             

              
                  



</div>
                  
                  
              </div>

                   
          </div>
      </div>

  </div>



  <div class="card" wire:ignore>
    <div class="mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
         مواعيد وفترات الحجز
      </div>

          
      <div class="card-body">


          <?php
           $Appointments = App\Models\Appointment::count();
           $Appointments_all = App\Models\Appointment::get();
          ?>
          @if ($Appointments == 0)
              {{ 'No Available abouts' }}
          @else

          <table class="table table-striped" id="ex_datatable">
              <thead>
                  <tr>
                    <th>التاريخ</th>
                      <th>اليوم</th>
                      <th> يوم عمل </th>
                      <!--<th>عطلة / أجازة</th>-->
                      {{-- <th>Action</th>
                      <th class="text-center">حذف</th> --}}
                  </tr>

              <tbody>


                  @foreach ($Appointments_all as $Appointments_all)

                  <tr>
              
                      <td>{{ $Appointments_all->indexing}}</td>
                      <td>{{ $Appointments_all->appointment_day}}</td>
                      <td>
                      <input type="checkbox" wire:click="check_Day_as_WorkingDay({{$Appointments_all->id}})"   class="form-check" {{$Appointments_all->working_day == 1 ? 'checked':''}}>
                    </td>
                    
                <!--<td>-->
                <!--<input type="checkbox" wire:click="check_Day_as_dayoff({{$Appointments_all->id}})" class="form-check" value="1" {{$Appointments_all->dayoff == 1 ? 'checked':''}} >-->
                <!--</td>-->
                      {{-- <td colspan="4">                       
             <a href="{{route('appointment.edit',$Appointments_all->indexing)}}"  class="btn btn-primary btn-sm mt-1">
                 <i class="fas fa-pen me-1"></i>
             </a>                                          
                                           
                <a href="{{route('appointment.show',$Appointments_all->indexing)}}"  class="btn btn-primary btn-sm mt-1">
                    <i class="fas fa-eye me-1"></i>
                </a>                                          
                      </td>     --}}
                    
     

          {{-- <td>
          <form action="{{ route('appointment.destroy', $Appointments_all->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
              <i class="fas fa-trash me-1"></i>
            </button>
        </form>


                      </td> --}}
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



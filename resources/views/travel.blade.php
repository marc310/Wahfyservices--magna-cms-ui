<div class="container">

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
                   <span> أضف   مواعيد جديدة </span>
                  </div>
                  <div class="col-md-4">
                    
                    <span>أيام الحجوزات:</span>

                                             <select wire:model="getdaysno" class="form-control col-md-2">
                                                    <option value="">اختر عدد الأيام</option>
                                                    @for($k=1; $k < 32; $k++)
                                                    <option value="{{$k}}">{{$k}}</option>
                                                    @endfor
                                                  </select>

                  </div>

                  {{-- <div class="col-md-4">
                    <span>فترات الحجز:</span>
                    <select wire:model="getperiodsno" class="form-control col-md-2">
                      <option value="">اختر عدد فترات الحجز</option>
                      @for($k=1; $k < 32; $k++)
                      <option value="{{$k}}">{{$k}}</option>
                      @endfor
                    </select>
                  </div> --}}
                </div>
                                            </div>
              <div class="card-body col-lg-12 col-md-6 col-sm-12">
                  <form method="POST" action="{{route('appointment.store')}}" enctype="multipart/form-data">
                     @csrf
                    
              
                @for($i=0; $i < $getdaysno; $i++)
                     <table id="mytable">
                      <tr>

      <?php $cc = $i+1; ?>
                        <input type="hidden" name="indexing[]"   value="{{$i+1}}">
                        <td><span>التاريخ:</span>
                              {{-- <select class="form-control" name="appointment_day[]">
                                <option value="">اختر</option>
                                <option value="saturday">السبت</option>
                                <option value="sunday">الأحد</option>
                                  <option value="monday">الإثنين</option>
                                  <option value="tuesday">الثلاثاء</option>
                                  <option value="wednesday">الأربعاء</option>
                                  <option value="thursday">الخميس</option>
                                  <option value="friday">الجمعة</option>
                              </select> --}}
                              <input class="form-control" type="date" id="pickyDate"  name="appointment_day[]" value=""/>

{{-- 
                              <input id="datepicker" width="276" />

                              <div class="form-group">
                                <!-- 1st textfield with datepicker -->                                            
                                <input type="date" class="form-control" placeholder=""  id="pickyDate" />  
                                </div>


                                <div class="form-group">
                                  <!-- 2nd textfield for show result weekdays -->   
                                  <input type="text" class="form-control" placeholder="Hari PK" name="txt_daypk" id="txt_daypk" disabled/>
                                  </div>

                                <script>
                                  $('#pickyDate').datepicker({
                                      uiLibrary: 'bootstrap5'
                                  });
                                </script>
                                <script>
                                
                                
                                
                                $("#pickyDate").datepicker({
                                onSelect: function(dateText) {
                                var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu' ];
                                var selecteddate = new Date (dateText).getDay ();
                                var weekday = days[selecteddate];
                                $('#txt_daypk').val(weekday);
                                }
                                });
                                </script> --}}
                              
                         

                         
                              </td>
                              <td>
                                <span>اليوم:</span>

                                <?php
                                $days = array('saturday','sunday','Monday','Tuesday','wednesday','thursday','Friday');
                                $days_ar = array('السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس','الجمعة');
                              ?>

                                <select  class="form-control" wire:model="picked_day">
                                  <option value="---">اختر</option>
                                  @for($h=0;$h<count($days);$h++)
                                  <option value="{{$days[$h]}}">{{$days_ar[$h]}}</option>
                                  @endfor
                                </select>
                              </td>

                    
                              <td>
                              <table class="ccc" id="0">
                      


                                <tr>

            <?php $slots = App\Models\Days_Slots::where('day',$picked_day)->count('id');
            ?>
                                  @if($picked_day)
                                  @foreach($periods as $items)
                                  <input type="hidden" name="indexxing[]" value="{{$cc}}">


                              <td><span>من:</span>

                                <input class="form-control" type="time" name="appointment_from[]" value="{{$items->begin_from}}"/>
                              </td>
                              <td><span>إلى:</span>
                                <input class="form-control" type="time"  name="appointment_to[]" value="{{$items->end_to}}"/>
                              
                              </td>
                              @endforeach
                               @endif
                            </tr>
                          </table>
                              </td>
                              <td><label>عطلة/راحة:</label>
                                <br>
                                <input type="checkbox" class="form-check-input" name="dayoff[]"  value="1">                                                    
                              </td>
                             
                          
                        </td>
                      </tr>
                      {{-- <button type="button" onclick="myFunction()"><i class="fa fa-plus-circle"></i></button> --}}

                    </table>

@endfor




              
                  




                  
                  
              </div>

                      <div class="form-group m-2">
                          <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
                         </form>
              </div>
          </div>
      </div>

  </div>



  <div class="card">
    <div class="card mb-4">
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
                      <th>اليوم</th>
                      <th>الفترة من</th>
                      <th>الفترة إلى </th>
                      <th>عطلة / أجازة</th>
                      {{-- <th>edit</th> --}}
                      <th>حذف</th>
                  </tr>

              <tbody>
                  @foreach ($Appointments_all as $Appointments_all)

                  <tr>
              
                      <td>{{ $Appointments_all->appointment_day}}</td>
                      <td>{{'----------------'}}</td>
                      <td>{{'----------------'}}</td>
                      <td>{{ $Appointments_all->dayoff == 1 ? 'عطلة':'---'}}</td>
                      {{-- <td>                       
             <button type="button"  data-toggle="modal" data-comment_id="{{$comment->id}}" data-about_name="{{$comment->about_name}}" data-about_desc="{{$comment_all->about_desc}}" data-target="#editabout" class="btn btn-primary btn-sm mt-1">
                 <i class="fas fa-pen me-1"></i>
              </button>                                          
                      </td> --}}
                      <td>
                    
       

          
          <form action="{{ route('comment.destroy', $Appointments_all->id) }}" method="POST">
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



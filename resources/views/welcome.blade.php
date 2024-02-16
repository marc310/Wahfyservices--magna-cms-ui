<div class="container">


  <h1 class="mt-4">لوحة التحكم</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"> تحديد المواعيد</li>
  </ol>

  <input type="text" wire:model="ind"  value="">
  <span>ind is : {{$ind}}</span>  

  <div class="row">
      <div class="col-xl-12">
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-plus me-1"></i>
                 <span> أضف   مواعيد جديدة </span>
              </div>
              <div class="card-body">
                  <form method="POST" action="{{route('appointment.store')}}" enctype="multipart/form-data">
                     @csrf
                    
              

                @for($i=1; $i < 32; $i++)
                     <table id="mytable">
                      <tr>
                          
                        
                            <input type="hidden" name="indexing[]"  value="{{$i}}">
                            <td><span>اليوم:</span>
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
                              <input class="form-control" type="date"  name="appointment_day[]" value=""/>
                              </td>
                              <td>
                              <table class="ccc" id="0">
                            
                                <tr>
                                  @for($j=1;$j<5;$j++)
                                  <input type="hidden" name="indexxing[]" value="{{$j}}">

                              <td><span>من:</span>

                                <input class="form-control" type="time" name="appointment_from[]" value=""/>
                              </td>
                              <td><span>إلى:</span>
                                <input class="form-control" type="time"  name="appointment_to[]" value=""/>
                              
                              </td>
                               @endfor
                            </tr>
                          </table>
                              </td>
                              <td><label>عطلة/راحة:</label>
                                <input type="checkbox" class="form-check-input" name="dayoff[]"  value="1">                                                    
                              </td>
                             
                          
                        </td>
                      </tr>
                      {{-- <button type="button" onclick="myFunction()"><i class="fa fa-plus-circle"></i></button> --}}

                    </table>

@endfor




              
                  




                  
                  
              </div>

                      <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
                         </form>
              </div>
          </div>
      </div>

  </div>



</div>

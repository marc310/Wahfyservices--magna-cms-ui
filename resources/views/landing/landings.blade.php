@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">  صفحة الهبوط -  نموذج  باقة ماجنا استراتيجي</li>
                        </ol>
                        <div class="col-xl-12 mb-3 ">

@if(Session::has('msg'))
<h4 class="col-12 alert alert-success mt-1">
    {{Session::get('msg')}}
</h4>
@endif
            </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-plus me-1"></i>
                                        نموذج  باقة ماجنا استراتيجي
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('namozag.store')}}" enctype="multipart/form-data">
                                           @csrf
                                            <div class="form-group" >
                                              <label for="exampleFormControlInput1"> العنوان</label>
                                              <input type="text" name="landing_h" class="form-control" id="exampleFormControlInput1" placeholder="Add your landing name" >
                                            </div>

                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1"> الوصف</label>
                                              <textarea class="form-control" name="landing_p" id="exampleFormControlTextarea1" rows="4" placeholder="Add your landing description" ></textarea>
                                           

                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> السعر</label>
                                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Add your landing name" >
                                              </div>


                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة1</label>
                                                <input type="text" name="step_one" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 1" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة2</label>
                                                <input type="text" name="step_two" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 2" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة3</label>
                                                <input type="text" name="step_three" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 3" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة4</label>
                                                <input type="text" name="step_four" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 4" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة5</label>
                                                <input type="text" name="step_five" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 5" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة6</label>
                                                <input type="text" name="step_six" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 6" >
                                              </div>
                                              <div class="form-group" >
                                                <label for="exampleFormControlInput1"> خطوة7</label>
                                                <input type="text" name="step_seven" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 7" >
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1"> خطوة8</label>
                                                <input type="text" name="step_eight" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 8" >
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1"> خطوة9</label>
                                                <input type="text" name="step_nine" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 9" >
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1"> خطوة10</label>
                                                <input type="text" name="step_ten" class="form-control" id="exampleFormControlInput1" placeholder="خطوة 10" >
                                              </div>
                                            </div> 

            
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
                                               </form>
                                    </div>
                                </div>
                            </div>
             
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              البيانات الحالية
                            </div>
                            
                            <div class="card-body">

                                <?php
                                 $servv = App\Models\Namozag::count();
                                 $serv = App\Models\Namozag::get();
                                ?>
                                @if ($servv == 0)
                                    {{ 'No Available landings' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                    <thead>
                                        <tr>
                                           <th>العنوان </th>
                                            <th> الوصف</th>
                                            <th> السعر</th>
                                            <th> خطوة1</th>
                                            <th> خطوة2</th>
                                            <th> خطوة3</th>
                                            <th> خطوة4</th>
                                            <th> خطوة5</th>
                                            <th> خطوة6</th>
                                            <th> خطوة7</th>
                                            <th> خطوة8</th>
                                            <th> خطوة9</th>
                                            <th> خطوة10</th>

                                            {{-- <th>تعديل</th> --}}
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($serv as $landing)

                                        <tr>
                                    
                                           <td>{{ $landing->landing_h}}</td> 
                                            <td>{{ $landing->landing_p}}</td>
                                            <td>{{ $landing->price}}</td>
                                            <td>{{ $landing->step_one}}</td>
                                            <td>{{ $landing->step_two}}</td>
                                            <td>{{ $landing->step_three}}</td>
                                            <td>{{ $landing->step_four}}</td>
                                            <td>{{ $landing->step_five}}</td>
                                            <td>{{ $landing->step_six}}</td>
                                            <td>{{ $landing->step_seven}}</td>
                                            <td>{{ $landing->step_eight}}</td>
                                            <td>{{ $landing->step_nine}}</td>
                                            <td>{{ $landing->step_ten}}</td>
                                        
                                        
                                        
                                            {{-- <td>                       
                                   <button type="button"  data-toggle="modal" data-landing_id="{{$landing->id}}" data-landing_h="{{$landing->landing_h}}" data-landing_p="{{$landing->landing_p}}" data-target="#editlanding" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td> --}}


                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-landing_id="{{$landing->id}}" data-target="#deletelanding" class="btn btn-danger btn-sm mt-1">
                                    <i class="fas fa-trash me-1"></i>
                                </button>
                                

                                            </td>
                                            @endforeach
                                        </tr>
              
                                    

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            
<!--update data Modal -->


<div class="modal" id="editlanding" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit landing Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('landing.update', $landing->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group" style="display:none;"> 
            <label for="exampleFormControlTextarea1">landing header</label>
            <input id="landing_h" type="text"  name="landing_h" class="form-control" placeholder="landing Title *" value=""/>
    </div>
    <div class="form-group"> 
                <input type="hidden" id="landing_id" name="id" value=""> 

        <label for="exampleFormControlTextarea1">landing paragraph</label>
      <!--  <input id="landing_p" type="text" name="landing_p" class="form-control" required='required' placeholder="landing Desc *" value=""/> -->

       <textarea class="form-control" name="landing_p" id="landing_p" rows="4"></textarea>

</div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </div>
    </form> 

    </div>
  </div>


<!-- End of Update modal -->

     <!--Delete data Modal -->

                    <div class="modal" id="deletelanding" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete namozag</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('namozag.destroy', $landing->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="landing_id" name="id" value=""> 
                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                                <button type="submit" class="btn btn-primary">Yes , Delete</button>
                            </div>
                          </div>
                        </form> 

                        </div>
                      </div>
   @endif
     <!-- end of Delete modal -->

                </main>
                @include('layouts.footer')

            </div>
            @endsection

          
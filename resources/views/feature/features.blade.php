@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">تواصل معنا</li>
                        </ol>
                        <div class="col-xl-12 mb-3 ">

                     @if (Session::has('msg'))

                <span class="alert alert-success">
       {{Session::get('msg')}}
                </span>    
                     @endif
            </div>
                            <div class="col-xl-12">
                              <div class="row">
                              <div class="card mb-4 col-md-6" style="border: 0px;">
      
                                  <div class="card-header">
                                      <i class="fas fa-plus me-1"></i>
                                      أضف بيانات للصفحة
                                  </div>
                                  <div class="card-body">
                                      <form method="POST" action="{{route('feature.store')}}" enctype="multipart/form-data">
                                         @csrf
                                          <div class="form-group">
                                            <label for="exampleFormControlInput1">عنوان</label>
                                            <input type="text" name="feature_h" class="form-control" id="exampleFormControlInput1" placeholder="اضف عنوان" required>
                                          </div>

                                          <div class="form-group pt-3">
                                            <label for="exampleFormControlTextarea1">وصف</label>
                                            <textarea class="form-control" name="feature_p" id="exampleFormControlTextarea1" rows="5" placeholder="اضف نص" required></textarea>
                                          </div>

                                          {{-- <div class="form-group">
                                              <label for="exampleFormControlInput1">ارفق صورة</label>
                                              <input type="file" name="feature_image" class="form-control" id="exampleFormControlInput1" placeholder="اضف صورة">
                                            </div> --}}

                                   

                              </div>
                              </div>
                                <div class="card mb-4 col-md-6" style="border: 0;">
                                    <div class="card-header">
                                        <i class="fas fa-plus me-1"></i>
                                         بيانات الإتصال
                                    </div>
                                    <div class="card-body">
                                    
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">تليفون</label>
                                              <input type="text" name="feature_phone" class="form-control" id="exampleFormControlInput1" placeholder="اضف تليفون" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1"> بريد  إلكتروني</label>
                                                <input type="text" name="feature_fax" class="form-control" id="exampleFormControlInput1" placeholder="اضف بريد إلكتروني" required>
                                              </div>

                                              
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">عنوان / مقر الشركة</label>
                                              <textarea class="form-control" name="feature_address" id="exampleFormControlTextarea1" rows="3" placeholder="اضف عنوان / مقر الشركة" required></textarea>
                                            </div>

                                              <div class="form-group col-md-6">
                                                <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button>                                       
                                               </form>
                                    </div>
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
                                 $serv = App\Models\feature::count();
                                ?>
                                @if ($serv == 0)
                                    {{ 'لايوجد نتائج ' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                    <thead>
                                        <tr>
                                            <th>عنوان</th>
                                            <th>وصف</th>
                                            <th>تليفون</th>
                                            <th>بريد إلكتروني</th>
                                            <th>مقر الشركة</th>
                                            {{-- <th>صورة</th> --}}
                                            <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($features as $feature)

                                        <tr>
                                    
                                            <td>{{ $feature->feature_h}}</td>
                                            <td>{{ $feature->feature_p}}</td>
                                            <td>{{ $feature->feature_phone}}</td>
                                            <td>{{ $feature->feature_fax}}</td>
                                            <td>{{ $feature->feature_address}}</td>

                                            {{-- <td><img src="{{asset('uploads/'.$feature->feature_image)}}" alt="" height="60" width="69"></td> --}}
                                            <td>                       
                                   <button type="button"  data-toggle="modal" data-feature_id="{{$feature->id}}" data-feature_h="{{$feature->feature_h}}" data-feature_p="{{$feature->feature_p}}" data-feature_phone="{{$feature->feature_phone}}" data-feature_fax="{{$feature->feature_fax}}" data-feature_address="{{$feature->feature_address}}" data-target="#editfeature" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td>
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-feature_id="{{$feature->id}}" data-target="#deletefeature" class="btn btn-danger btn-sm mt-1">
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


<div class="modal" id="editfeature" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                تحديث بيانات صفحة تواصل معنا
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('feature.update', $feature->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group"> 
            <input type="hidden" id="feature_id" name="id" value=""> 
            <label for="exampleFormControlTextarea1">العنوان </label>
            <input id="feature_h" type="text" name="feature_h" class="form-control" required='required' placeholder="feature Title *" value=""/>
    </div>
    <div class="form-group"> 
        <label for="exampleFormControlTextarea1">تعديل فقرة </label>
        <input id="feature_p" type="text" name="feature_p" class="form-control" required='required' placeholder="feature Desc *" value=""/>
</div>
<div class="form-group"> 
  <input type="hidden" id="feature_id" name="id" value=""> 
  <label for="exampleFormControlTextarea1">رقم التليفون </label>
  <input id="feature_phone" type="text" name="feature_phone" class="form-control" required='required' placeholder="feature Title *" value=""/>
</div>
<div class="form-group"> 
  <input type="hidden" id="feature_id" name="id" value=""> 
  <label for="exampleFormControlTextarea1">البريدالالكتروني </label>
  <input id="feature_fax" type="text" name="feature_fax" class="form-control" required='required' placeholder="feature Title *" value=""/>
</div>
<div class="form-group"> 
  <input type="hidden" id="feature_id" name="id" value=""> 
  <label for="exampleFormControlTextarea1">عنوان أو مقر الشركة </label>
  <input id="feature_address" type="text" name="feature_address" class="form-control" required='required' placeholder="feature Title *" value=""/>
</div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">تحديث </button>
        </div>
      </div>
    </form> 

    </div>
  </div>


<!-- End of Update modal -->

     <!--Delete data Modal -->

                    <div class="modal" id="deletefeature" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete feature</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('feature.destroy', $feature->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="feature_id" name="id" value=""> 
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

          
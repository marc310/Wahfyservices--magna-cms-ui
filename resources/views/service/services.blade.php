@extends('layouts.app')
         

<style>
/*
  ::file-selector-button {
  font: inherit;
  opacity: 0.1;
  color: transparent;
  text-rendering: unset;
  position: absolute;
  width: 100%;
  height: 120px;
  border: 0;
}
  span.drag-image
  {
    color: #000;
left: ;
line-height: 0px;
position: relative;
top: -12px;
font-size: 24px;
font-weight: bold;
  }
  */
</style>

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container col-md-12 px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><span>الخدمات</span></li>
                        </ol>
                        <div class="col-xl-12 mb-3 ">

                     @if (Session::has('service.service_name'))

                <span class="alert alert-success">
       {{'Congrats!! service   '.'('.Session::get('service.service_name').')'.'     added successfully'}}
                </span>    
                     @endif
            </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-plus me-1"></i>
            <span>أضف خدمه جديدة </span>     
                                      </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('service.store')}}" enctype="multipart/form-data">
                                           @csrf
                                            <div class="form-group">
                                              <div class="row">
                                              <div class="col-md-3">
                                              <label for="exampleFormControlInput1">الإسم</label>
                                              <input type="text" name="name" class="form-control" id="fname" placeholder="أدخل الإسم" required>
                                            </div>
                                            <div class="col-md-3">
                                              <label for="exampleFormControlInput1">رقم الجواز / البطاقة</label>
                                              <input type="text" name="passport" class="form-control" id="fpassport" placeholder="أدخل رقم الجواز/ البطاقة " required>
                                            </div>
                                             <div class="col-md-3">
                                              <label for="exampleFormControlInput1">رقم التليفون</label>
                                              <input type="text" name="phone_number" class="form-control" id="fphone_number" placeholder="أدخل رقم التليفون " required>
                                            </div>
                                            <div class="col-md-3">
                                              <label for="exampleFormControlInput1">تاريخ الإنتهاء</label>
                                              <input type="date" name="expiry_date" class="form-control" id="fexpiry_date" placeholder="تاريخ الإنتهاء" required>
                                            </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                            <div class="col-md-3">
                                            <label for="exampleFormControlInput1">الجنسية </label>
                                            <input type="text" name="nationality" class="form-control" id="fnationality" placeholder="الجنسية" required>
                                          </div>
                                          <div class="col-md-3">
                                            <label for="exampleFormControlInput1">تاريخ الميلاد</label>
                                            <input type="date" name="birth_date" class="form-control" id="fbirth_date" placeholder="تاريخ الميلاد" required>
                                          </div>
                                              <div class="col-md-3">
                                          <label for="exampleFormControlInput1">اسم الحملة</label>
                                          <input type="text" name="service_type" class="form-control" id="fservice_type" placeholder="اسم الحملة" required>
                                        </div>
                                           <div class="col-md-3">
                                            <label for="exampleFormControlInput1">رقم ترخيص الحملة</label>
                                 <input type="text" name="service_license_no" class="form-control" id="fservice_license_no" placeholder="رقم ترخيص الحملة" required>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="row">
                                      <!--    <div class="col-md-3">
                                          <label for="exampleFormControlInput1">رقم الحملة</label>
                                          <input type="text" name="service_no" class="form-control" id="fservice_no" placeholder="رقم الحملة" required>
                                        </div>
                                        -->
                                
                                        <div class="col-md-3">
                                          <label for="exampleFormControlInput1">رقم التصريح</label>
                                          <input type="text" name="service_code" class="form-control" id="fservice_code" placeholder="أدخل رقم التصريح" required>
                                        </div>

                                        <div class="col-md-3">
                                          <label for="exampleFormControlInput1">الباقات</label>
                                          <input type="text" name="servi_ces" class="form-control" id="fservices" placeholder="أدخل الباقات" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="exampleFormControlInput1">باركود</label>
                                <input type="file" name="barcode" class="col-md-3 form-control" id="fbarcode" placeholder="باركود" required>
                                        </div>
                                        <div class="col-md-3" style="margin-top: 27px; display:none;">
                        <button id="generate_barcode" class="btn btn-sm btn-danger" value="<?php echo rand(1234567890,50); ?>" type="button">Generate Barcode</button>
                                        </div>
                                        </div>
                                      </div>
                              
                                            
                                            <div class="form-group mt-2">
                   <label class="col-md-12" for="exampleFormControlInput1"  style="background-color:#439a8c30; border: 0px; text-align:center;"> مرفقات </label>

                                                  <div class="form-group">

                                                <!--<input type="file" style="opacity:0;" name="service_image" class="form-control" id="featuredImage" required> -->
                                                <div class="row mt-2">
                                                <div class="col-md-6">
                                                <label class="alert alert-sm alert-info" style="padding:2px; white-space:nowrap;">قم بإرفاق صورة</label>
                                                <input type="file"  name="service_image" class="form-control">
                                               <input type="text" name="attachment_desc" class="form-control mt-1" id="fattachment_desc" placeholder="أضف وصف للمرفق">
                                                </div>

                                             <div class="col-md-6">
                                    <label class="alert alert-sm alert-danger text-black font-bold" style="padding:2px; white-space:nowrap;">قم بإرفاق pdf</label>
                                                <input type="file"  name="service_attachment" class="form-control"  >
                                      <input type="text" name="attachment_descc" class="form-control mt-1" id="fattachment_desc_2" placeholder="أضف وصف للمرفق">
                                             </div>
                                             </div>
                                            </div>
                                            <!--    <span class="drag-image"> اسحب وافلت الصورة هنا</span>
                                                 <p style="color:#ccc;">او تصفح جهازك</p>
                                           -->
                                              </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-info btn-sm mt-2 text-white">حفظ</button>                                       
                                               </form>
                                    </div>
                                </div>
                            </div>
             
                        </div>
                        <div class="card mb-4" style="width: 100%; overflow-x: auto;">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
الطلبات والخدمات
                              </div>
                            
                            <div class="card-body">

                

                                <?php
                                 $serv = App\Models\Service::count();
                                ?>
                                @if ($serv == 0)
                                    {{ 'No Available services' }}
                                @else

                                <table class="table table-striped" style="white-space: nowrap; text-align:center;" id="ex_datatable">
                                    <thead class="text-center">
                                        <tr>
                                          <th>الإسم</th>
                                            <th> جواز السفر </th>
                                            <th>تاريخ الإنتهاء</th>
                                            <th>الجنسية</th>
                                             <th>رقم التليفون</th>
                                            <th> تاريخ الميلاد</th>
                                            <th>رقم التصريح</th>
                                            <th>اسم الحملة</th>
                                            <th>رقم ترخيص الحملة</th>
                                            <th>الخدمات</th>
                                            <th> مرفق1</th>
                                            <th> مرفق2</th>
                                            <th>حالة الطلب</th>
                                            <th>باركود</th>
                                            <th>تعديل </th>
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($services as $service)

                                        <tr>
                                    
                                          <td>{{ $service->name}}</td>
                                          <td>{{ $service->passport }}</td>
                                          <td>{{ $service->expiry_date}}</td>
                                         <td>{!! $service->nationality !!}</td>
                                          <td>{{ $service->phone_number }}</td>
                                          <td>{{ $service->birth_date}}</td>
                                         <td>{{ $service->service_code}}</td>
                                          <td>
                                            @if($service->service_type == 1)
                                            {{ 'اساسى' }}
                                            @elseif($service->service_type == 2)
                                            {{ 'اضافى' }}
                                            @else
                                            {{ 'بدون' }}
                                           @endif
                                          </td>
                                         <td>{{ $service->service_license_no}}</td>
                                          <td>{{ $service->servi_ces}}</td>
                                        <td>
                                         @if($service->service_image != 'img.png')

                              
                                            <a class="btn btn-default" href="{{url('img/'.$service->id)}}">
                                             <img style="margin-top:3px; background:#fff;" src="{{asset('assets/img/attachment-icon.png')}}" width='30' height='28' />
                                               </a>
                                             

                                                 <br>
                                                                      {{ $service->attachment_desc}}

                                             @else
                                              {{'لايوجد مرفقات'}}
                                               @endif
                                               
                                                                        </td>

                                              


                                        <td>
                                        @if($service->service_attachment != 'img.png')
                                            <a href="{{url('pdf/'.$service->id)}}">
                                             <img style="margin-top:3px;" src="{{asset('assets/img/pdf.png')}}" width='30' height='28' />
                                               </a>
                                               <br>
                                                                        {{ $service->attachment_descc}}


                                               @else
                                              {{'لايوجد مرفقات'}}
                                               @endif
                                         </td>
                                                 <td>
                                          
                                            @if($service->status == 3)
                                            <div class="progress-bar bg-danger p-2" role="progressbar" style="width:100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                              مرفوض
                                             </div>
                                            @elseif($service->status == 2)
                                            <div class="progress-bar bg-success p-2" role="progressbar" style="width:100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                             مقبول
                                            </div>
                                            @else
                                            <div class="progress-bar bg-warning p-2" role="progressbar" style="width:100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                             معلق
                                            </div>
                                            @endif
                                          </td>


                                         
                                   
                                          <td>
                                         <!--   <div>{!! DNS2D::getBarcodeHTML("$service->barcode", 'QRCODE') !!}</div> -->
                         <img style="margin-top:3px; background:#fff;" src="{{asset('uploads/barcodes/'.$service->barcode)}}" width='210' height='200' />

                                          </td>
                                            <td>                       
                                   <button type="button"  data-toggle="modal" data-service_id="{{$service->id}}" data-servi_ces="{{$service->servi_ces}}" data-name="{{$service->name}}" data-passport="{{$service->passport}}" data-expiry_date="{{$service->expiry_date}}" data-service_no="{{$service->service_no }}" 
 data-phone_number="{{$service->phone_number }}"  data-service_license_no="{{$service->service_license_no }}"  data-nationality="{{$service->nationality}}" data-birth_date="{{$service->birth_date}}" data-service_type="{{$service->service_type}}" data-service_code="{{$service->service_code}}" data-status="{{$service->status}}" data-target="#editservice" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td>
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-service_id="{{$service->id}}" data-target="#deleteservice" class="btn btn-danger btn-sm mt-1">
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


<div class="modal" id="editservice" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                تعديل بيانات طلب 
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('service.update', $service->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body col-md-12">

          <div class="form-group">
            <input type="hidden" id="service_id" name="id" value=""> 

            <div class="row">
            <div class="col-md-4">
            <label for="exampleFormControlInput1">الإسم</label>
            <input type="text" name="name" class="form-control" id="name"  required>
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1">رقم الجواز</label>
            <input type="text" name="passport" class="form-control" id="passport" required>
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1">تاريخ الإنتهاء</label>
            <input type="date" name="expiry_date" class="form-control" id="expiry_date"  required>
          </div>
          </div>
        </div>
      

        <div class="form-group">
          <div class="row">
          <div class="col-md-4">
          <label for="exampleFormControlInput1">الجنسية </label>
          <input type="text" name="nationality" class="form-control" id="nationality" placeholder="الجنسية" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1">تاريخ الميلاد</label>
          <input type="date" name="birth_date" class="form-control" id="birth_date" placeholder="تاريخ الميلاد" required>
        </div>
  

  <div class="col-md-4">
        <label for="exampleFormControlTextarea1">رقم التليفون </label>
        <input id="phone_number" type="text" name="phone_number" class="form-control" value=""/>
      </div>



        </div>
      </div>
        
        <div class="form-group"> 
          <div class="row">
<div class="col-md-4">
  <label for="exampleFormControlTextarea1">رقم الحملة</label>
  <input id="service_no" type="text" name="service_no" class="form-control" required='required' placeholder="Service Title *" value=""/>
</div>

<div class="col-md-4">
  <label for="exampleFormControlTextarea1">رقم التصريح</label>
  <input id="service_code" type="text" name="service_code" class="form-control" required='required' placeholder="Service Title *" value="0"/>
</div>


<div class="col-md-4">
  <label for="exampleFormControlTextarea1">حالة الطلب</label>

  <select class="form-select" name="status" id="status">
    <option value="1">معلق</option>
    <option value="2">مقبول</option></option>
    <option value="3">مرفوض</option></option>
  </select>

</div>
          </div>

          </div>

    <div class="form-group"> 
    <div class="row">
         <div class="col-md-4">
        <label for="exampleFormControlTextarea1">اسم الحملة </label>
        <input id="service_type" type="text" name="service_type" class="form-control" value=""/>
      </div>

      <div class="col-md-4">
          <label for="exampleFormControlInput1">رقم ترخيص الحملة</label>
          <input type="text" name="service_license_no" class="form-control" id="service_license_no" placeholder="رقم ترخيص الحملة" required>
        </div>


    <div class="col-md-4">
        <label for="exampleFormControlTextarea1">الخدمات</label>
        <input id="servi_ces" type="text" name="servi_ces" class="form-control" value=""/>
      </div>

        </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">حفظ وتعديل </button>
        </div>
      </div>
    </form> 

    </div>
  </div>


<!-- End of Update modal -->

     <!--Delete data Modal -->

                    <div class="modal" id="deleteservice" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete SERVICE</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('service.destroy', $service->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="service_id" name="id" value=""> 
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

          
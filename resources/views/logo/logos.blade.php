@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">اسم وشعار الموقع</li>
                        </ol>

                        <div class="row">
                            
                            @if(Session::has('msg'))
<div class="col-12 alert alert-success mt-1">
    {{Session::get('msg')}}
</div>
@endif
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-plus me-1"></i>
                                       <span> أضف اسم وشعار للموقع </span>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('logo.store')}}" enctype="multipart/form-data">
                                           @csrf
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">اسم الموقع </label>
                                              <input type="text" name="logo_name" class="form-control" id="exampleFormControlInput1" placeholder="Add your logo name">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">صورة الشعار</label>
                                                <input type="file" name="logo_image" class="form-control" id="exampleFormControlInput1" placeholder="Add your logo img" required>
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
                               الشعارات الحالية
                            </div>
                 
                                
                            <div class="card-body">

                      
                                <?php
                                 $log = App\Models\logo::count();
                                ?>
                                @if ($log == 0)
                                    {{ 'No Available logos' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                    <thead>
                                        <tr>
                                            <th>اسم الموقع</th>
                                            <th>الشعار</th>
                                            <!--<th>تعديل</th>-->
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($logos as $logo)

                                        <tr>
                                    
                                            <td>{{ $logo->logo_name}}</td>
                                            <td><img src="{{asset('uploads/logo/'.$logo->logo_image)}}" alt="" height="60" width="69"></td>
                                   <!--         <td>                       -->
                                   <!--<button type="button"  data-toggle="modal" data-logo_id="{{$logo->id}}" data-logo_name="{{$logo->logo_name}}"  data-target="#editlogo" class="btn btn-primary btn-sm mt-1">-->
                                   <!--    <i class="fas fa-pen me-1"></i>-->
                                   <!-- </button>                                          -->
                                   <!--         </td>-->
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-logo_id="{{$logo->id}}" data-target="#deletelogo" class="btn btn-danger btn-sm mt-1">
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

<div class="modal" id="editlogo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit logo Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('logo.update', $logo->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group"> 
            <input type="hidden" id="logo_id" name="id" value=""> 
            <label for="exampleFormControlTextarea1">logo Name</label>
            <input id="logo_name" type="text" name="logo_name" class="form-control" required='required' placeholder="logo Title *" value=""/>
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

                    <div class="modal" id="deletelogo" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete logo</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('logo.destroy', $logo->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="logo_id" name="id" value=""> 
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

          
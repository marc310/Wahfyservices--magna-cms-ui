@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">منهجية ماجنا </li>
                        </ol>
             
                            <div class="col-xl-12">
                                                    <div class="row">

                            @if(Session::has('msg'))
<div class="col-12 alert alert-success mt-1">
    {{Session::get('msg')}}
</div>
@endif

                                                      <div class="card mb-4 col-md-5">
                                                        <div class="card-header">
                                                            <i class="fas fa-plus me-1"></i>
                                                            اضف  عنوان ووصف مقدمة الصفحة
                                                        </div>
                                                        <div class="card-body">
                                                            <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                                                               @csrf
                                                                <div class="form-group">
                                                                  <label for="exampleFormControlInput1">عنوان  </label>
                                                                  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="أضف عنوان1 " required>
                                                                </div>
                    
                                                                  <div class="form-group">
                                                                  <label for="exampleFormControlInput1">وصف  </label>
                                                                  <input type="text" name="content" class="form-control" id="exampleFormControlInput1" placeholder="أضف عنوان2" required>
                                                                </div>
                    
                            
                    
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ </button>                                       
                                                                   </form>
                                                        </div>
                                                    </div>


                             
                                
                            </div>
              <div class="col-md-0"></div>


              <div class="card mb-4 col-md-5">
                <div class="card-header">
                    <i class="fas fa-plus me-1"></i>
                    اضف  خطوات منهجية ماجنا الإستراتيجية
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('portifolio.store')}}" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">اسم المرحلة أو الخطوة </label>
                          <input type="text" name="manhageya_title" class="form-control" id="exampleFormControlInput1" placeholder="أضف المرحلة / الخطوة" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">الوصف</label>
                          <textarea class="form-control" name="manhageya_desc" id="exampleFormControlTextarea1" rows="3" placeholder="Add your about description" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ </button>                                       
                           </form>
                </div>


                
            </div>



       
                        </div>



                        <div class="card mb-4 col-md-12">
                          <div class="card-header">
                              <i class="fas fa-plus me-1"></i>
                                                  فوتر الصفحة
                            </div>
                          <div class="card-body">
                            <form method="POST" action="{{route('landing.store')}}" enctype="multipart/form-data">
                              @csrf
                               <div class="form-group" >
                                 <label for="exampleFormControlInput1">العنوان </label>
                                 <input type="text" name="landing_h" class="form-control" id="exampleFormControlInput1" placeholder="أدخل العنوان" >
                               </div>

                               <div class="form-group">
                                 <label for="exampleFormControlTextarea1"> الوصف</label>
                                 <textarea class="form-control" name="landing_p" id="exampleFormControlTextarea1" rows="4" placeholder="أدخل الوصف" ></textarea>
                               
            
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ </button>                                       
                                     </form>
                          </div>
                      </div>
                      </div>

                    </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                خطوات أو مراحل منهجية ماجنا الإستراتيجية
                            </div>
                 
                                
                            <div class="card-body">

                      
                                <?php
                                 $Porti = App\Models\Portifolio::count();
                                ?>
                                @if ($Porti == 0)
                                    {{ 'No Available portifolios' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                    <thead>
                                        <tr>
                                          <th>الخطوة / المرحلة</th>
                                          <th>الوصف </th>
                                          <th>تعديل</th>
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($portifolios as $portifolio)

                                        <tr>
                                    
                                            <td>{{ $portifolio->manhageya_title}}</td>
                                            <td>{{ $portifolio->manhageya_desc}}</td>
                                            <td>                       
                                   <button type="button"  data-toggle="modal" data-portifolio_id="{{$portifolio->id}}" data-portifolio_name="{{$portifolio->manhageya_title}}"  data-target="#editportifolio" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td>
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-portifolio_id="{{$portifolio->id}}" data-target="#deleteportifolio" class="btn btn-danger btn-sm mt-1">
                                    <i class="fas fa-trash me-1"></i>
                                </button>
                             


                                            </td>
                                            @endforeach
                                        </tr>
              
                                    

                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <!-- جدول العنوان والوصف مقدمة الصفحة -->

                        <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              عنوان وبراجراف مقدمة الصفحة
                          </div>
               
                              
                          <div class="card-body">

                    
                              <?php
                               $Post = App\Models\Post::count();
                               $Posts = App\Models\Post::get();
                              ?>
                              @if ($Post == 0)
                                  {{ 'No Available portifolios' }}
                              @else

                              <table class="table table-striped" id="ex_datatable">
                                  <thead>
                                      <tr>
                                        <th>العنوان</th>
                                        <th>الوصف </th>
                                          <th>حذف</th>
                                      </tr>
       
                                  <tbody>
                                      @foreach ($Posts as $Posts)

                                      <tr>
                                  
                                          <td>{{ $Posts->title}}</td>
                                          <td>{{ $Posts->content}}</td>
                                          <td>                       
                                                                   
                                          </td>
                                          <td>
                                              
                              <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                         
                           

                              <form action="{{ route('post.destroy', $Posts->id) }}" method="POST">
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



                      
                        <!-- جدول    فوتر   الصفحة -->

                        <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                                فوتر الصفحة
                          </div>
               
                              
                          <div class="card-body">

                    
                              <?php
                               $Landing = App\Models\Landing::count();
                               $Landings = App\Models\Landing::get();
                              ?>
                              @if ($Landing == 0)
                                  {{ 'No Available portifolios' }}
                              @else

                              <table class="table table-striped" id="ex_datatable">
                                  <thead>
                                      <tr>
                                        <th>العنوان</th>
                                        <th>الوصف </th>
                                          <th>حذف</th>
                                      </tr>
       
                                  <tbody>
                                      @foreach ($Landings as $Landings)

                                      <tr>
                                  
                                          <td>{{ $Landings->landing_h}}</td>
                                          <td>{{ $Landings->landing_p}}</td>
                                          <td>                       
                                                                   
                                          </td>
                                          <td>
                                              
                              <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                         
                           

                              <form action="{{ route('landing.destroy', $Landings->id) }}" method="POST">
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

            
<!--update data Modal -->

<div class="modal" id="editportifolio" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit portifolio Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('portifolio.update', $portifolio->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group"> 
            <input type="hidden" id="portifolio_id" name="id" value=""> 
            <label for="exampleFormControlTextarea1"> الخطو أو المرحلة  </label>
            <input id="portifolio_name" type="text" name="manhageya_title" class="form-control" required='required' placeholder="portifolio Title *" value=""/>
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

                    <div class="modal" id="deleteportifolio" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete portifolio</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('portifolio.destroy', $portifolio->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="portifolio_id" name="id" value=""> 
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

          
@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">الصفحة الرئيسية</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">عن الموقع</li>
                        </ol>
                        <div class="col-xl-12 mb-3 ">

     @if(Session::has('msg'))
<h4 class="col-12 alert alert-success mt-1">
    {{Session::get('msg')}}
</h4>
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
                                <form method="POST" action="{{route('about.store')}}" enctype="multipart/form-data">
                                  @csrf
                                   <div class="form-group">
                                     <label for="exampleFormControlInput1">العنوان</label>
                                     <input type="text" name="about_name" class="form-control" id="exampleFormControlInput1" placeholder="Add your about name" required>
                                   </div>

                                   <div class="form-group">
                                     <label for="exampleFormControlTextarea1">الوصف</label>
                                     <textarea class="form-control" name="about_desc" id="exampleFormControlTextarea1" rows="3" placeholder="Add your about description" required></textarea>
                                   </div>

                                    
                                   <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">حفظ</button> 
                                   </div>                                      
                                   </form>

                               

                          </div>
                          </div>
                            <div class="card mb-4 col-md-6" style="border: 0;">
                                <div class="card-header">
                                    <i class="fas fa-plus me-1"></i>
                                     إضافة تعليقات 
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="{{route('comment.store')}}" enctype="multipart/form-data">
                                    @csrf
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">الإسم</label>
                                    <input type="text" name="commentor_name" class="form-control" id="exampleFormControlInput1" placeholder="أدخل الاسم" required>
                                  </div>


                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">المنصب الوظيفى</label>
                                    <input type="text" name="commentor_job" class="form-control" id="exampleFormControlInput1" placeholder="المنصب او الوظيفة" required>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> التعليق  </label>
                                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" placeholder="اضف تعليق" required></textarea>
                                  </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">أرفق صورة</label>
                                    <input type="file" name="image" class="form-control" id="exampleFormControlInput1" placeholder="صورة" required>
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
                               عملاؤنا
                            </div>
                 
                                
                            <div class="card-body">

                      
                                <?php
                                 $abou = App\Models\about::count();
                                 $aboutt = App\Models\about::get();
                                ?>
                                @if ($abou == 0)
                                    {{ 'No Available abouts' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                    <thead>
                                        <tr>
                                            <th>about Name</th>
                                            <th>Description</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($aboutt as $about)

                                        <tr>
                                    
                                            <td>{{ $about->about_name}}</td>
                                            <td>{{ $about->about_desc}}</td>
                                            <td>                       
                                   <button type="button"  data-toggle="modal" data-about_id="{{$about->id}}" data-about_name="{{$about->about_name}}" data-about_desc="{{$about->about_desc}}" data-target="#editabout" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td>
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-about_id="{{$about->id}}" data-target="#deleteabout" class="btn btn-danger btn-sm mt-1">
                                    <i class="fas fa-trash me-1"></i>
                                </button>
                             


                                            </td>
                                            @endforeach
                                        </tr>
              
                                    

                                    </tbody>
                                </table>
                            </div>
                        </div>
                     
                

            
<!--update data Modal -->

<div class="modal" id="editabout" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit about Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('about.update', $about->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group"> 
            <input type="hidden" id="about_id" name="id" value=""> 
            <label for="exampleFormControlTextarea1">about Name</label>
            <input id="about_name" type="text" name="about_name" class="form-control" required='required' placeholder="about Title *" value=""/>
    </div>
    <div class="form-group"> 
        <label for="exampleFormControlTextarea1">about description</label>
        <input id="about_desc" type="text" name="about_desc" class="form-control" required='required' placeholder="about Desc *" value=""/>
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

                    <div class="modal" id="deleteabout" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete about</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('about.destroy', $about->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="about_id" name="id" value=""> 
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



     <div class="card">
      <div class="mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           التعليقات
        </div>

            
        <div class="card-body">

  
            <?php
             $comments = App\Models\Clients_Comments::count();
             $comment_all = App\Models\Clients_Comments::get();
            ?>
            @if ($comments == 0)
                {{ 'No Available abouts' }}
            @else

            <table class="table table-striped" id="ex_datatable">
                <thead>
                    <tr>
                        <th> اسم صاحب التعليق</th>
                        <th>الوظيفة</th>
                        <th>نص التعليق</th>
                        <th>صورة شخصية</th>
                        {{-- <th>edit</th> --}}
                        <th>حذف</th>
                    </tr>

                <tbody>
                    @foreach ($comment_all as $comment)

                    <tr>
                
                        <td>{{ $comment->commentor_name}}</td>
                        <td>{{ $comment->commentor_job}}</td>
                        <td>{{ $comment->comment}}</td>
                        <td><img src="{{asset('uploads/comments/'.$comment->image)}}" alt="" height="60" width="69"></td>
                        {{-- <td>                       
               <button type="button"  data-toggle="modal" data-comment_id="{{$comment->id}}" data-about_name="{{$comment->about_name}}" data-about_desc="{{$comment_all->about_desc}}" data-target="#editabout" class="btn btn-primary btn-sm mt-1">
                   <i class="fas fa-pen me-1"></i>
                </button>                                          
                        </td> --}}
                        <td>
                      
         

            
            <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                <i class="fas fa-trash me-1"></i>
              </button>
          </form>


                        </td>
                        @endforeach
                    </tr>

                

                </tbody>
            </table>
        </div>
    </div>
    </div>
  </div>
         <!--Delete data Modal -->

         <div class="modal" id="deletecomment" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete about</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{route('comment.destroy', $comment->id)}}" method="post">
                  {{ method_field('delete') }}
                  {{csrf_field()}}   
              <div class="modal-body">
                <p>          
                       Are you sure?
              </p>
              <div class="form-group"> 
                  <input type="text" id="comment_id" name="id" value=""> 
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

          
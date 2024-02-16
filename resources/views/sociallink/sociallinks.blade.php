@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">لوحة التحكم</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> صفحات الموقع</li>
                        </ol>

            
            <?php
                                             $sociallinks = App\Models\sociallink::latest('id')->first();
            
            ?>
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
                                        أضف  صفحات الموقع
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('sociallink.store')}}" enctype="multipart/form-data">
                                           @csrf
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">الرئيسية</label>
                                              <input type="text" name="home" class="form-control" id="exampleFormControlInput1" value="{{$sociallinks->home}}" placeholder="{{$sociallinks->home}}" required>
                                            </div>

                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">منهجية ماجنا</label>
                                              <input type="text" name="manahageya" class="form-control" id="exampleFormControlInput1" value="{{$sociallinks->manahageya}}" placeholder="{{$sociallinks->manahageya}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">عملاؤنا</label>
                                                <input type="text" name="clients" class="form-control" id="exampleFormControlInput1" value="{{$sociallinks->clients}}" placeholder="{{$sociallinks->clients}}" required>
                                         </div>

                                         <div class="form-group">
                                          <label for="exampleFormControlTextarea1">تواصل معنا</label>
                                          <input type="text" name="contactus" class="form-control" id="exampleFormControlInput1" value="{{$sociallinks->contactus}}" placeholder="{{$sociallinks->contactus}}" required>
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
الصفحات الحالية                            </div>
                 
                                
                            <div class="card-body">

                      
                                <?php
                                 $sociallink = App\Models\sociallink::count();
                                 $sociallinks = App\Models\sociallink::orderBy('id','DESC')->get();
                                ?>
                                @if ($sociallink == 0)
                                    {{ 'No Available sociallinks' }}
                                @else

                                <table class="table table-striped" id="ex_datatable">
                                  <thead>
                                        <tr>
                                            <th>الرئيسية</th>
                                            <th>منهجية الموقع</th>
                                            <th>عملاؤنا</th>
                                            <th>تواصل معنا</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sociallinks as $sociallink)

                                        <tr>
                                    
                                            <td>{{ $sociallink->home}}</td>
                                            <td>{{ $sociallink->manahageya}}</td>
                                            <td>{{ $sociallink->clients}}</td>
                                            <td>{{ $sociallink->contactus}}</td>

                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-sociallink_id="{{$sociallink->id}}" data-target="#deletesociallink" class="btn btn-danger btn-sm mt-1">
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

<div class="modal" id="editsociallink" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit sociallink Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('sociallink.update', $sociallink->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      

            <div class="form-group">

                <input type="hidden" id="sociallink_id" name="id" value=""> 

                <label for="exampleFormControlInput1">facebook</label>
                <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Add your facebook link" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Twitter</label>
                <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Add your twitter link" required>
              </div>

              <div class="form-group">
                  <label for="exampleFormControlTextarea1">youtube</label>
                  <input type="text" name="youtube" class="form-control" id="youtube" placeholder="Add your youtube link" required>
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

                    <div class="modal" id="deletesociallink" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete sociallink</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('sociallink.destroy', $sociallink->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="sociallink_id" name="id" value=""> 
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

          
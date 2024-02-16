@extends('layouts.app')
          

@section('content')
    
          <div id="layoutSidenav_content">
                <main>
                    <div class="container px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">footer</li>
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
                                        أضف تزييل (فوتر) جديد
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('footer.store')}}" enctype="multipart/form-data">
                                           @csrf
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">اسم الفوتر</label>
                                              <input type="text" name="footer_span" class="form-control" id="exampleFormControlInput1" placeholder="Add your footer name" required>
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
                                    جميع التزييلات للموقع
                            </div>
                 
                                
                            <div class="card-body">

                      
                                <?php
                                 $log = App\Models\footer::count();
                                ?>
                                @if ($log == 0)
                                    {{ 'No Available footers' }}
                                @else

                                <table class="table-striped" style="white-space: nowrap;" id="ex_datatable">
                                    <thead>
                                        <tr>
                                            <th>اسم الفوتر</th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>تعديل </th>
                                            <th></th>
                                            <th>حذف</th>
                                        </tr>
         
                                    <tbody>
                                        @foreach ($footers as $footer)

                                        <tr>
                                    
                                            <td>{{ $footer->footer_span}}</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td>                       
                                   <button type="button"  data-toggle="modal" data-footer_id="{{$footer->id}}" data-footer_span="{{$footer->footer_span}}"  data-target="#editfooter" class="btn btn-primary btn-sm mt-1">
                                       <i class="fas fa-pen me-1"></i>
                                    </button>                                          
                                            </td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td>
                                                
                                <!-- <button type="button" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash me-1"></i></button> -->
                                <button data-toggle="modal" data-footer_id="{{$footer->id}}" data-target="#deletefooter" class="btn btn-danger btn-sm mt-1">
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

<div class="modal" id="editfooter" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
                Edit footer Data
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('footer.update', $footer->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('PATCH') }}    
        <div class="modal-body">
      
        
        <div class="form-group"> 
            <input type="hidden" id="footer_id" name="id" value=""> 
            <label for="exampleFormControlTextarea1">footer Name</label>
            <input id="footer_span" type="text" name="footer_span" class="form-control" required='required' placeholder="footer Title *" value=""/>
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

                    <div class="modal" id="deletefooter" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete footer</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('footer.destroy', $footer->id)}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}   
                            <div class="modal-body">
                              <p>          
                                     Are you sure?
                            </p>
                            <div class="form-group"> 
                                <input type="hidden" id="footer_id" name="id" value=""> 
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

          
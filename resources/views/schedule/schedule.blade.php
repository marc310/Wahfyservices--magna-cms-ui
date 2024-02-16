@extends('layouts.app')
          

@section('content')

 
<div class="container mt-5">

  <div class="relative mt-3 md:mt-0">

  <h1 class="mt-4">لوحة التحكم</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">  الأيام ومواعيد العمل</li>
  </ol>



  </div>



  <div class="card" wire:ignore>
    <div class="mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          الأيام ومواعيد العمل
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
                    <th>التاريخ</th>
                      <th>اليوم</th>
                      <th>حالة اليوم</th>
                      <th>Action</th>
                      <th class="text-center">حذف</th>
                  </tr>

              <tbody>


                  @foreach ($Appointments_all as $Appointments_all)

                  <tr>
              
                      <td>{{ $Appointments_all->indexing}}</td>
                      <td>{{ $Appointments_all->appointment_day}}</td>
                      <td>
                        @if($Appointments_all->working_day == 1)
                        {{ 'يوم عمل'}}
                        @else
                        {{ 'أجازة'}}
                        @endif
                      </td>
                      {{-- <td>
                      <input type="checkbox" wire:click="check_Day_as_WorkingDay({{$Appointments_all->id}})"   class="form-check" {{$Appointments_all->working_day == 1 ? 'checked':''}}>
                    </td>
                      <td>
                    <input type="checkbox" wire:click="check_Day_as_dayoff({{$Appointments_all->id}})" class="form-check" value="1" {{$Appointments_all->dayoff == 1 ? 'checked':''}} >
                    </td> --}}
                     
                      <td colspan="4">    
                      @if($Appointments_all->working_day == 1)
             <a href="{{route('appointment.edit',$Appointments_all->indexing)}}"  class="btn btn-primary btn-sm mt-1">
                 <i class="fas fa-pen me-1"></i>
             </a>                                          
                                           
                <a href="{{route('appointment.show',$Appointments_all->indexing)}}"  class="btn btn-primary btn-sm mt-1">
                    <i class="fas fa-eye me-1"></i>
                </a>            
                @else
                
                   <a class="btn btn-primary btn-sm mt-1">
                 <i class="fas fa-pen me-1"></i>
             </a>                                          
                                           
                <a class="btn btn-primary btn-sm mt-1">
                    <i class="fas fa-eye me-1"></i>
                </a>  
                
                
                
                @endif
                      </td>    
                    
     

          <td>
          <form action="{{ route('appointment.destroy', $Appointments_all->id) }}" method="POST">
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





@endsection
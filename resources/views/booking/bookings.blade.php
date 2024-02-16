@extends('layouts.app')
          

@section('content')

<div class="container">

    <div class="relative mt-5 md:mt-0">
  
    <h1 class="mt-4">لوحة التحكم</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
        الحجوزات  
        </li>
    </ol>
  

  
  
  
    <div class="card">
      <div class="mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
              طلبات حجز مواعيد
        </div>
  
            
        <div class="card-body">
  
  
            <?php
             $Booking = App\Models\Booking::count();
             $Booking_all = App\Models\Booking::get();
            ?>
            @if ($Booking == 0)
               <span style="text-align:center !important;"> {{ 'لاتوجد أى حجوزات  الوقت الحالى '}} </span>
            @else
  
            <table class="table table-striped" id="ex_datatable">
                <thead>
                    <tr>
                        <th>م</th>
                        <th>التاريخ</th>
                        <th>اليوم</th>
                        <th> من</th>
                        <th> إلى </th>
                        <th>الإسم</th>
                        <th> الموبايل </th>
                        <th>الحالة</th>
                    </tr>
  
                <tbody>
                    @foreach ($Booking_all as $Booking_all)
  
                    <tr>
                
                        <td><a href="{{route('booking.edit',$Booking_all->id)}}">{{$Booking_all->id}}</a></td>
                        <td>{{ $Booking_all->booking_date}}</td>
                        <td>{{ Carbon\Carbon::parse($Booking_all->booking_date)->format('l')}}</td>
                        <td>{{ $Booking_all->booking_from}}</td>
                        <td>{{ $Booking_all->booking_to}}</td>
                        <td><a href="{{route('booking.edit',$Booking_all->id)}}">{{$Booking_all->reserver_name}}</a></td>
                        <td>{{ $Booking_all->phone}}</td>
                        <td>
                          @if($Booking_all->booking_status == 0)
                          <span class="btn btn-sm btn-warning text-white">Pending</span>
                          @elseif($Booking_all->booking_status == 1)
                          <span class="btn btn-sm btn-success text-white">confirmed</span>
                          @else
                          <span class="btn btn-sm btn-danger text-white">Canceld</span>
                          @endif
                        </td>
                        {{-- <td>                       
               <button type="button"  data-toggle="modal" data-comment_id="{{$comment->id}}" data-about_name="{{$comment->about_name}}" data-about_desc="{{$comment_all->about_desc}}" data-target="#editabout" class="btn btn-primary btn-sm mt-1">
                   <i class="fas fa-pen me-1"></i>
                </button>                                          
                        </td> --}}
                        {{-- <td>
                      
         
  
            
            <form action="{{ route('slots.destroy', $Days_Slots_all->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                <i class="fas fa-trash me-1"></i>
              </button>
          </form>
  
  
                        </td> --}}
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

@extends('layouts.app')
          

@section('content')

 
<div class="container mt-5">

  <div class="relative mt-3 md:mt-0">

  <h1 class="mt-4">لوحة التحكم</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"> الرسائل الواردة </li>
  </ol>



  </div>



  <div class="card" wire:ignore>
    <div class="mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          الرسائل الواردة   
              </div>

          
      <div class="card-body">


          <?php
           $Contacts = App\Models\Contact::count();
           $Contacts_all = App\Models\Contact::get();
          ?>
          @if ($Contacts == 0)
              {{ 'No Available abouts' }}
          @else

          <table class="table table-striped" id="ex_datatable">
              <thead>
                  <tr>
                     <th>م</th>
                      <th>الإسم</th>
                      <th>البريد الإلكتروني </th>
                      <th>رقم التليفون</th>
                      <th>الرسالة</th>
                      <th class="text-center">معاينة</th>
                      <th class="text-center">حذف</th>
                  </tr>

              <tbody>


                  @foreach ($Contacts_all as $Contacts_all)

                  <tr>
              
                      <td>{{ $Contacts_all->id}}</td>
                      <td>{{ $Contacts_all->name}}</td>
                      <td>{{ $Contacts_all->mail}}</td>
                      <td>{{ $Contacts_all->phone_no}}</td>
                      <td>{{ $Contacts_all->message}}</td>
         <td>    
             <a href="{{url('mail/contact/'.$Contacts_all->id)}}"  class="btn btn-primary btn-sm">
                 <i class="fas fa-envelope me-1"></i>
             </a> 
                </td>    
     

          <td>
          <form action="{{ route('contact.destroy', $Contacts_all->id) }}" method="POST">
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
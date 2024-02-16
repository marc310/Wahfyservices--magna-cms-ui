<?php
      if(auth()->user()->unreadNotifications->where('type', 'App\Notification\EmailNotification')->count() != 0){
       $markAsRead =  auth()->user()->unreadNotifications->where('id', auth()->user()->unreadNotifications[0]->id)->markAsRead();
      }
?>

@extends('layouts.app')
          

@section('content')

   
<div class="container" dir="rtl" style="margin-top:100px;">
    <div class="row">
   
   <div class="col-md-10">
       <div class="card" dir="rtl" style="">
    <div class="card-header">
        
             
                                
        <h5>رسالة ورادة من   : 
            <a href="http://">{{ $posts->mail }}</a> </h5>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p class="blockquote-footer">عنوان الرسالة: مرحبا أنا ,{{ $posts->name }}</p>

        <p class="blockquote-footer">نص الرسالة  :
            {{ $posts->message }}.</p>


      </blockquote>
    </div>
  </div>

   </div>
                                

  </div>
</div>

@endsection
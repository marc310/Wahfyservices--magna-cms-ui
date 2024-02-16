@extends('layouts.master')

    
@section('content')
<style>
    .label{
      background-color: #00CA4C;
    color: #fff;
    font-weight: bold;
    text-align: center;
    line-height: 2.5;
    margin-top: 3px;
    white-space: nowrap;
    }
    .res::after
    {
      content: '';
      position: absolute;
      width: 600px;
      height: 3px;
      background-color: red;
      top:350px;
      right: 400px;
    }
    @media (max-width: 991px) {
      .res::after {
    content: '';
    position: absolute;
    width: 344px;
    height: 3px;
    background-color: red;
    top: 402px;
    right: 167px;
}
.name{
    
    display: flex;

    }
    }
</style>
    

<section style="background-color: rgb(83, 74, 74);" class="probootstrap-cover overflow-auto relative" data-stellar-background-ratio="0"  id="section-home">
 

      <!--star of div -->
      <div class="row">
<span class="col-md-2"></span>
      <div class="col-md-8 probootstrap-animate" style="background-color: #191818d9;">
        
        <form class="probootstrap-form" method="GET" style="background-color: #191818d9;" action="{{route('service.search')}}" enctype="multipart/form-data">
          @csrf
          
          <div class="row mb-5">
            <span class="btn btn-danger col-md-3">حالة التصريح</span>
            <span class="col-md-5"></span>
            <span class="col-md-4"></span>
            </div>

          <div class="form-group">
            <div class="row mb-3">
              <table class="table table-bordered table-striped">
          
                <tr style="background-color: #191818d9;">         
                    <td style="color:#fff; font-weight:bold;"> الإسم / رقم جواز السفر </td> 
                    <td><input class="form-control" style="background: #0000004a; color:#fff; font-weight:bold;" name="query" value="<?php
                    if(request()->get('request_num')){
                    echo request()->get('request_num');
                    }elseif(request()->get('request_name')){
                    echo request()->get('request_name');
                    }
                    ?>
                    " type="text" required></td>     
                </tr>       
                    <tr style="background-color: #191818d9;">         
                        <td style="color:#fff; font-weight:bold;">حالة التصريح</td> 
                        <td><input style="background: #0000004a; color:#fff; font-weight:bold;" class="form-control" value="<?php
                        if(!empty($search_res->status)){
                        
                        if($search_res->status == 1) {
                        echo 'معلق';
                         }elseif($search_res->status == 2){
                          echo 'مقبول';  
                         }elseif($search_res->status == 3){  
                         echo 'مرفوض '; 
                          } else {
                          echo "لايوجد مستخدم بهذا الإسم";
                          }
                        }else{
                                                      echo "لايوجد مستخدم بهذا الإسم";

                        }
                        ?>" type="text"></td>     
                    </tr>    
              </table>
            </div>

            <div class="row pt-2">
              <span class="col-md-4"></span>
              <span class="col-md-5"></span>
              <button type="submit" class="btn-danger btn-md col-md-3">استعراض </button>
              </div>

            </div>
                  
                     
                      </form>
      
                    </div>
                    <!-- end of div -->

                    <span class="col-md-2"></span>
                  </div>
    
    </section>




    <!-- END section -->
    

    
   
@include('layouts.site_footer')

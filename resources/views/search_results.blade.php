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
      width: 400px;
      height: 3px;
      background-color: red;
      top:250px;
      right: 400px;

    }
    @media (max-width: 991px) {
      .res::after {
    content: '';
    position: absolute;
    width: 344px;
    height: 3px;
    background-color: red;
    top: 302px;
    right: 167px;
}
.name{
    
    display: flex;

    }
    .col-md-7
    {
      text-align: initial !important;

    }
    }


    .probootstrap-cover > .container > .row {
    padding: 2em 0 !important;
}

.barcode_img
{
  background: #fff;
    justify-content: unset;
    position: relative;
    top: -210px;
    right: 0px;
}
.brcode_qr
{
  position: relative;
  top: 35px;
    background: #fff;
}




@page {
    size: auto;   /* auto is the initial value */
    margin: 0 auto !important;  /* this affects the margin in the printer settings */
    padding: 0 !important;
   
}

@media print {

img.rounded-circle
{
    display:block !important;
    position:relative !important;
    right:600px !important;
    top:50px;
}
    
#presult
{
    position:relative;
    top:0px !important;
     padding:0px !important;
    margin:0 auto !important; 
}

  header, footer, tr.print_row,.request_show,.brcode_qr,tr.attachmentments,tr.barcode{ display: none !important; }

  .barcode_img
{
  background: #fff;
    justify-content: unset;
    position: relative;
    top: 30px !important;
    right: 0px;
}

.req_data h4{
    color:#000 !important;
    text-align:right !important;
    display:none !important;

}

.req_data
{
        margin-top:45px !important;

}
.table
{
    margin-top:70px !important;
    font-size:28px;
}
.terms-conditions
{
     font-size:30px;
    font-weight:bold;
    margin-right:100px !important;
     position:relative;
    top:-120px !important;
}
.brcode_qr
{
    background-color: #000 !important;
     width: 200px !important;
     color:#000 !important;
       position: relative;
  top: 25px;
}
.qRCODE
{
    display:block !important;
      position:relative !important;
    right:970px !important;
    top:-130px;
}
.table
{
    margin-right:150px !important;
    text-align:center !important;
    position:relative;
    top:-100px !important;
}
.table td.td-right
{
        width: 245px !important;
        padding-left:30px !important;
        padding-right:30px !important;
        color:#000 !important;

}

.table td.td-left
{
        width: 440px !important;
        color:#000 !important;

}
span.coty
{
    display:block !important;
}
}


</style>
    

<section id="presult" style="background-color: black;" class="probootstrap-cover overflow-auto relative" data-stellar-background-ratio="0"  id="section-home">
  @if(empty($search_res))
  <h3 class="text-white text-center">{{'البيانات المدخلة غير صحيحة أو غير موجودة .. حاول البحث مرة أخرى'}}</h3>
  <div class="row mt-5">
    <span class="col-md-3"></span>
    <a href="{{url('/site')}}" class="btn-success btn-md col-md-6 text-center">الرجوع للصفحة الرئيسية</a>
    <span class="col-md-3"></span> 
  </div>
  
  @else


  <div class="overlay" style="height: 110px;"></div>
      <div class="container">
        <div class="row align-items-center display-flex">
          <div class="res row justify-content-between" style="margin-right:30px;">
            <div class="col-md-2">
              <label class="request_show btn btn-danger text-center">استعراض الطلب</label>
            </div>

            <div class="req_data col-md-2" style="padding-right: 80px; text-align:center; white-space:nowrap;">
              <h4 class="text-center text-white name">الإسم : {{$search_res->name}}</h4>
              <div>
                <h4 class="text-white">حالة التصريح :
                  @if($search_res->status == 1)
                  {{'معلق'}}
                  @elseif($search_res->status == 2)
                  {{'مقبول'}}
                  @else
                  {{'مرفوض'}}
                  @endif
                  </h4>
              </div>
              <div>
                <h4 class="text-white">رقم التصريح : {{$search_res->service_code}}</h4>
              </div>
            </div>

            <div class='col-md-4'>
            @php 
$logo = App\Models\Logo::latest('id')->first(); 
@endphp

          @php 
$post = App\Models\Post::latest('id')->first(); 
@endphp

            <img class="rounded-circle" src="{{asset('uploads/logo/'.$logo->logo_image)}}" width="170" height="140" style="display:none; padding:3px; border:1px solid #000;" />

            </div>

            <div class="qRCODE col-md-4" style="display:none; padding-left:50px;">
            
<img class="barcode_img" src="{{asset('uploads/barcodes/'.$search_res->barcode)}}" width="210" height="210"  />



            </div>

            </div>

          </div>
          
    
          </div>


         <div class="row col-md-12">
          <div class="col-md-2"></div>           
          
          <div class="col-md-8 results">
          
            <br>
            <span class="coty" style="text-align:center; position:relative; right:180px; top:-150px; display:none;">
                <h3>{{$post->title}}</h3>
                <h4>{{$post->content}}</h4>
            </span>
            <table class="table table-bordered table-striped mt-3">
            
       <tr style="background-color: #191818d9;">         
           <td class="td-right">رقم التصريح  
           <br>
          <span style="font-weight:bold;"> Permit Number </span>
           </td> 
           <td td-left colspan="0">{{$search_res->service_code}}</td>
           <td class="td-right" style="
               padding: 0;
    text-align: center;
    margin-top: 8px;
    padding-top: 9px;
           ">عام الحج
           <br>
       <span style="font-weight:bold;">   Hajj Year </span>
           </td>
           @php 
$year = App\Models\Portifolio::latest('id')->first(); 
@endphp

           <td td-left>{{$year->year}}</td>
       </tr>       
           <tr>         
           <td class="td-right">
           الإسم
           <br>
          <span style="font-weight:bold;"> Pilgrim Name </span>
           </td>     
               <td class="td-left" colspan="4">{{$search_res->name}}</td>     
           </tr>    
           <tr style="background-color: #191818d9; display:none;">         
            <td>الجنسية</td> 
            <td class="td-left" colspan="4">{{$search_res->nationality}}</td>     
        </tr>       
            <tr style="display:none;">         
                <td>تاريخ الميلاد</td> 
                <td class="td-left" colspan="4">{{$search_res->birth_date}}</td>     
            </tr>  
                <tr>         
                <td class="td-right">رقم (الهوية / الإقامة / رقم الحدود)
                <br>
              <span style="font-weight:bold; white-space:nowrap;">  ID Number
                <br>
                Pilgrim ID Border/Number
                </span>
                </td> 
                <td class="td-left" colspan="4">{{$search_res->passport}}</td>     
            </tr>  
            <tr style="background-color: #191818d9;">         
              <td class="td-right">اسم حملة الحج
              <br>
            <span style="font-weight:bold;">  Agent Name </span>
              </td> 
              <td class="td-left" colspan="4">
               {{$search_res->service_type}}
             </td>     
          </tr>  
          <tr>         
            <td class="td-right">رقم ترخيص الحملة
            <br>
         <span style="font-weight:bold;">   Agent Number  </span>
            </td> 
            <td class="td-left" colspan="4">{{$search_res->service_license_no}}</td>     
        </tr>                

              <tr>
              <td class="td-right"> الباقات
            <br>
         <span style="font-weight:bold;">Services</span>
            </td> 
            <td class="td-left" colspan="4">{{$search_res->servi_ces}}</td>  
           </tr>


            <tr class="attachmentments">
 <td>المرفقات</td>
                  <td class="td-left" colspan="4">
                                        <span class="row col-md-8">
                                        <span class="col-md-4">
                                          
                                        @if($search_res->service_attachment != 'img.png')
                                            <a class="btn btn-default" href="{{url('pdf/'.$search_res->id)}}">
                                             <img style="margin-top:3px; background:#fff;" src="{{asset('assets/img/attachment-icon.png')}}" width='60' height='50' />
                                               </a>
                                               @else
                                 <span style="white-space:nowrap;"> مرفق 1     {{'(لايوجد مرفقات)'}} </span>
                                              @endif
                                        
                                        </span>
                                       <!--   <img style="margin-top:3px; margin-right:100px;" src="{{asset('uploads/'.$search_res->service_image)}}" width='100' height='80' /> -->                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <span class="col-md-4">
                                         
                                           @if($search_res->service_image != 'img.png')
                                            <a class="btn btn-default" href="{{url('img/'.$search_res->id)}}">
                                             <img style="margin-top:3px; background:#fff;" src="{{asset('assets/img/attachment-icon.png')}}" width='60' height='50' />
                                               </a>
                                               @else
                                 <span style="white-space:nowrap;"> مرفق 2     {{'(لايوجد مرفقات)'}} </span>
                                               @endif
                                            </span>
                                        </span>
                                         </td>

            </tr>

           

                  <tr class="barcode" style="display:none;">
          <td>الباركود</td>
          <td colspan="4">
            <div class="brcode_qr" style="background-color: #fff; width: 200px;">{!! DNS2D::getBarcodeHTML("$search_res->barcode", 'QRCODE') !!}</div>
            <?php   

echo '<img class="barcode_img" src="data:image/png;base64,' . DNS1D::getBarcodePNG('"'.$search_res->barcode.'"', "C39E") . '" alt="barcode"   />';
?>
          </td>

         

        </tr>
        <tr class="print_row">
          <td style="padding-top: 26px;" colspan="6"><button class="btn btn-danger" onClick="window.print();"> <i class="fa fa-print"></i>  طباعة</button></td>
        </tr>
            </table>




            
          <div class="terms-conditions col-md-12 p-3" style="border: 1px solid #fff;">
          @php 
$Landing = App\Models\Landing::latest('id')->first(); 
@endphp
          <ul>
            <li style="white-space:break-spaces; list-style:none;">{!! $Landing->landing_p !!}</li>
          </ul>
          </div>
           <div class="col-md-2"></div>  
         </div>
     
        </div>
        
          </div>


        @endif
 
      </div>
    
    
    </section>




    <!-- END section -->
    

    
   
@include('layouts.site_footer')

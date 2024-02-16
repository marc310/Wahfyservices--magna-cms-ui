@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 114px;">
                <div class="card-header"><span style="color:#4f9d90; padding-left:300px;">{{ __(' مرحبا بك  ' ) .':'. Auth::user()->name  }}</span><img  src="{{asset('assets/img/download.png')}}" width="50" height="45"></h3>
    </div>
 
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               <h1>     {{ __('مرحبا بك فى لوحة التحكم الخاصة بإدارة موقعك الإلكترونى!') }} </h1>
<br>
                  <h4>  {{ __('تم تسجيل دخولك بنجاح!') }} </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

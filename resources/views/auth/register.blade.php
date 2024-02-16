
<style>
    
    @font-face{
      font-family: "ExpoArabic-Bold";
      
        src: url(webfonts/Expo-Arabic-Bold.ttf); /* IE9 Compat Modes */
        src: url(webfonts/Expo-Arabic-Bold.ttf) format('embedded-opentype'), /* IE6-IE8 */
             url(webfonts/Expo-Arabic-Bold.ttf) format('woff'), /* Modern Browsers */
             url(webfonts/Expo-Arabic-Bold.ttf)  format('truetype'), /* Safari, Android, iOS */
             url(webfonts/Expo-Arabic-Bold.ttf) format('svg'); /* Legacy iOS */
             
        
    }
                @font-face{
      font-family: "ExpoArabic-Book";
      
    
             
             src: url(webfonts/Expo-Arabic-Book.ttf); /* IE9 Compat Modes */
        src: url(webfonts/Expo-Arabic-Book.ttf) format('embedded-opentype'), /* IE6-IE8 */
             url(webfonts/Expo-Arabic-Book.ttf) format('woff'), /* Modern Browsers */
             url(webfonts/Expo-Arabic-Book.ttf)  format('truetype'), /* Safari, Android, iOS */
             url(webfonts/Expo-Arabic-Book.ttf) format('svg'); /* Legacy iOS */
    }
    
    h1,h2,p{
                                    font-family: ExpoArabic-Bold !important;
    
    }
    label,span,a,input,button,table{
                                    font-family: ExpoArabic-Book !important;
    
    }
    label
    {
        color:#4f9d90 !important;
    }
</style>    
<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>انشاء حساب  - لوحة التحكم</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    <style>
        input{
            margin:5px;
        }
    </style>
    
        <body class="" style="background-color: #4f9d90;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="text-center font-weight-light my-4" style="color:#4f9d90">لوحة التحكم <img src="{{asset('assets/img/download.png')}}" width="50" height="45"></h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الإسم') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="أدخل الإسم" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكترونى') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="أدخل البريد الإلكترونى" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="أدخل  كلمة المرور" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمة المرور" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل') }}
                                </button>
                                
                                 
                                
                            </div>
                        </div>
                        
                    </form>
                </div>
                 <div class="card-footer text-center px-1">
                                        <div class="small">
                                            <a href="{{route('login')}}">لديك حساب بالفعل ؟ سجل دخول</a></div>
                                    </div>
            </div>
        </div>
    </div>
</div>




 </div>
 
     <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">الحقوق البرمجية محفوظة &copy;  2021</div>
                    <div>
                        <a href="https://mostaql.com/u/mohamed_shafy/portfolio">م / محمد خيرى</a>
                        &middot;
                    </div>
                </div>
            </div>
        </footer>
            </div>
</div>

    

</main>


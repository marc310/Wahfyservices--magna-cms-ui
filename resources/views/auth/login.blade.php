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
</style>    
<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>تسجيل دخول - لوحة التحكم</title>
        <link href="css/custom.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="" style="background-color: #4f9d90;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4" style="color:#4f9d90">لوحة التحكم <img src="{{asset('assets/img/download.png')}}" width="50" height="45"></h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#4f9d90">{{ __('البريد الالكترونى') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" style="color:#4f9d90" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="أدخل البريد الالكترونى">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mt-2">
                                                <label for="password" style="color:#4f9d90;" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="ادخل كلمة المرور">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            {{-- <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> --}}
                    
                                            <div class="row mb-0">
                                                <span class="col-md-4"></span>
                                                <div class="col-md-4 mt-2 offset-md-4">
                                                    <button type="submit" class="btn btn-info" style="color:#fff;">
                                                        {{ __('سجل دخول') }}
                                                    </button>
                                                <span class="col-md-4"></span>

                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('register')}}">ليس لديك حساب ؟ انشىء حساب جديد</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

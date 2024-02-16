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
label,span,a,input[type="text"],button,table{
							    font-family: ExpoArabic-Book !important;

}

.container
{
    margin-right: 220px !important;
}
    .sb-topnav{
  background-color: #10cab7 !important;
}
.sb-nav-link-icon
{
    padding-left: 8px;
    white-space: nowrap;
}
a.nav-link
{
    white-space: nowrap;
}
a.nav-link::before
{
    content: '';
    position: relative;
    width: 10px;
    height: 3px;
    background-color: rgb(60, 198, 233);
    color: black;
    border-bottom: 1px solid #10cab7;
}
a.nav-link
{
   
    border-bottom: 1px solid #10cab7;
}
.card-header
{
    background: #b3e4ff78;

}
.form-control,.form-select
{
    border-color: #b3e4ff;

}
</style>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#">
        <img class="img-rounded" src="{{asset('assets/img/download.png')}}" width="40" height="35" alt="" >
        لوحة تحكم الموقع
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                   <span class="badge badge-pill alert-info"
                   
                   style="
    color: #f6fdfe;
    background-color: #fb0551;
    border-color: #b6effb;
    border-radius: 13px;
    line-height: 14px;

                   
                   "
                   >
              
                   {{ auth()->user()->unreadNotifications->where('type', 'App\Notification\EmailNotification')->count() }} 
                </span>
                                    </a>

                                    @php
   $noti =  auth()->user()->unreadNotifications->where('type', 'App\Notification\EmailNotification')->all();
@endphp



                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                                               @if(auth()->user() && auth()->user()->unreadNotifications->count() != 0)

                        @foreach($noti as $notification)

                        <li><a class="dropdown-item" href="{{url('mail/contact/'.$notification->data['id'])}}" target="_blank">
                            {{
                              'رسالة واردة من   : ('.$notification->data['mail'].')'
                                 }}    
                        </a></li>

                        <li><hr class="dropdown-divider" /></li>
           @endforeach
           
           

                     @else
                                         


                                  <li><a class="dropdown-item" href="#"> {{'لاتوجد رسائل حاليا'}}</a></li>
                    
                                             @endif
                    </ul>


                </li>
                
                
            </ul>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: rgb(3 0 0 / 55%);" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
               @if(Auth::user())
                {{ Auth::user()->name }}
               @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('تسجيل خروج') }}
                 </a>
                
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
            </ul>
        </li>
    </ul>
    
</nav>
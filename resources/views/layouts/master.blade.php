<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Splide deondencies-->
    <link
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
      rel="stylesheet"
    />

    <!--Tailwind dependencies-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Font awsome dependencies-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('css/Responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/anmation.css')}}">
    <!--Export table button CSS-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet">

    <title>@yield('title')| MAGNA</title>
    <!--Fav icon-->
    <link rel="icon" href="{{asset('assets/Favicon.png')}}" type="image/x-icon" />

@livewireStyles

  </head>

  <div id="loading">
    <span class="loading-message">
      Loading...
    </span>
  </div>
	<body class="bg-[#EDF2F7]" id="content">
    <!-- here navbar -->
      @include('layouts.site_navbar')
 





@yield('content')



@livewireScripts

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<!--bx slider dependacies-->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!----------bx trigger--------->
<!--
#1-this execution has to be on body not on index to tigger be as priority for Responsive 
#2-there's a Span trigger container for Gsap (GreenSock) animation incase if there's a loader
-->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/1.0.6/ScrollTrigger.min.js"
integrity="sha512-+LXqbM6YLduaaxq6kNcjMsQgZQUTdZp7FTaArWYFt1nxyFKlQSMdIF/WQ/VgsReERwRD8w/9H9cahFx25UDd+g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>
<!--Gsap dependecies-->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"
integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
></script>


<script src="{{asset('js/index.js')}}"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js
"></script>

<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->

<!--<script src="{{asset('js/popper.min.js')}}"></script>-->
<!--<script src="{{asset('js/bootstrap.min.js')}}"></script>-->
<!--<script src="{{asset('js/owl.carousel.min.js')}}"></script>-->

<!--<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>-->
<!--<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>-->
<!--<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>-->

<!--<script src="{{asset('js/select2.min.js')}}"></script>-->

<!--<script src="{{asset('js/main.js')}}"></script>-->


 <!--Data Table-->
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>



<script>
function printAddOrders(){
  window.print();
}
</script>



<script type="text/javascript">
  $('#requested_name').keyup(function() {
    var $requested_name = $(this);
    var b = $requested_name.val();

     $("input#request_name").val(b);
  
}),
$('#requested_num').keyup(function() {
    var $requested_num = $(this);
    var c = $requested_num.val();

     $("input#request_num").val(c);
  
});
</script>


            <script>
              $(function () {
                $(document).ready(function() {
                $('#services').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
              });
            </script>

            <script>
      $(document).ready(function(){
    $("#successMessage").delay(3000).slideUp(300);
});
            </script>

{{-- <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script> --}}

<script>

$('#pick_date').datepicker({
format: “yyyy-mm-dd”,
autoclose: true,
todayHighlight: true,
});

</script>

      @if(Session::has('msg'))
    <script>
    Swal.fire({
  title: "نحن بانتظارك!",
  text: "سنقوم بإرسال تعليمات المقابلة عبر البريد الإلكتروني ,يرجى مراجعتها",
  icon: "success"
});

</script>
      @endif




<script>
//     window.addEventListener('scroll', function () {
//   var scrollArrow = document.getElementById('scrollArrow');
//   if (window.scrollY > window.innerHeight) {
//     scrollArrow.style.display = 'block';
//   } else {
//     scrollArrow.style.display = 'none';
//   }
// });
</script>

        </body>
        </html>

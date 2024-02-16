<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Dashboard - SB Admin</title>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet"  />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  />
        
            <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">

        
        <title>Laravel</title>
        
        <style>
            .card{

  width: 90% !important;
  margin: 0 auto ;
  overflow-x: auto ;
}


.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
  overflow-x:hidden !important;
  overflow-y:auto !important;
}
        </style>
    
        @livewireStyles
    
      </head>
        <body class="sb-nav-fixed">
      <!-- here navbar -->
      @include('layouts.navbar')
      <div id="layoutSidenav">
                @include('layouts.sidebar')





@yield('content')
      </div>
      @livewireScripts



      

        <script src="{{asset('js/all.min.js')}}" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.tutorialjinni.com/jquery.repeater/1.2.1/jquery.repeater.js"></script> 
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> 

<script src="js/update-delete-service.js"></script>
<script src="js/jquery.modal.min.js"></script>




<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>-->
            <!--<script src="assets/demo/chart-area-demo.js"></script>-->
            <!--<script src="assets/demo/chart-bar-demo.js"></script>-->
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            
            <script type="text/javascript">
              $('#generate_barcode').click(function() {
              var gb = $('#generate_barcode').val();
                 $("input#barcode").val(gb);
              
          });
        </script>





<script>

$('#editservice').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var service_name = button.data('service_name')
    var service_type = button.data('service_type')
    var service_id = button.data('service_id')
    var phone_number = button.data('phone_number')

    var nationality = button.data('nationality')
    var birth_date = button.data('birth_date')
    var service_code = button.data('service_code')
    var service_license_no = button.data('service_license_no')
    var service_no = button.data('service_no')
    var servi_ces = button.data('servi_ces')

    var status = button.data('status')

    var name = button.data('name')
    var passport = button.data('passport')
    var expiry_date = button.data('expiry_date')

     // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.form-group input#service_name').val(service_name);
    modal.find('.form-group input#service_type').val(service_type);
    modal.find('.form-group input#service_license_no').val(service_license_no);
    modal.find('.form-group input#service_id').val(service_id);
  
    modal.find('.form-group input#name').val(name);
    modal.find('.form-group input#passport').val(passport);
    modal.find('.form-group input#expiry_date').val(expiry_date);
    modal.find('.form-group input#phone_number').val(phone_number);

      
    modal.find('.form-group input#nationality').val(nationality);
    modal.find('.form-group input#birth_date').val(birth_date);
    modal.find('.form-group input#service_code').val(service_code);
    modal.find('.form-group input#service_no').val(service_no);
    modal.find('.form-group input#servi_ces').val(servi_ces);

    modal.find('.form-group select#status').val(status);

  })

</script>


<script>
  $('#editfeature').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var feature_h = button.data('feature_h')
  var feature_p = button.data('feature_p')
  var feature_phone = button.data('feature_phone')
  var feature_fax = button.data('feature_fax')
  var feature_address = button.data('feature_address')
  
  var feature_id = button.data('feature_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#feature_h').val(feature_h);
  modal.find('.form-group input#feature_p').val(feature_p);
  modal.find('.form-group input#feature_id').val(feature_id);

  modal.find('.form-group input#feature_phone').val(feature_phone);
  modal.find('.form-group input#feature_fax').val(feature_fax);
  modal.find('.form-group input#feature_address').val(feature_address);
})
</script>


<script>

$('#editlanding').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var landing_h = button.data('landing_h')
  var landing_p = button.data('landing_p')
  var landing_id = button.data('landing_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#landing_h').val(landing_h);
  modal.find('.form-group textarea#landing_p').val(landing_p);
  modal.find('.form-group input#landing_id').val(landing_id);
})
</script>


            <script>
              $(function () {
                $(document).ready(function() {
                $('#ex_datatable').DataTable( {
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




<script>
  Livewire.onPageExpired((response, message) => {})
</script>



        </body>
        </html>

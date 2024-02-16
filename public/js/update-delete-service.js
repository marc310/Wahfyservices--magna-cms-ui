$('#editlogo').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var logo_name = button.data('logo_name')
  var logo_id = button.data('logo_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#logo_name').val(logo_name);
  modal.find('.form-group input#logo_id').val(logo_id);
})

  
$('#deletelogo').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var logo_id = button.data('logo_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#logo_id').val(logo_id);
})


$('#editfeature').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var feature_h = button.data('feature_h')
  var feature_p = button.data('feature_p')
  var feature_id = button.data('feature_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#feature_h').val(feature_h);
  modal.find('.form-group input#feature_p').val(feature_p);
  modal.find('.form-group input#feature_id').val(feature_id);
})

  
$('#deletefeature').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var feature_id = button.data('feature_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#feature_id').val(feature_id);
})




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

  
$('#deletelanding').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var landing_id = button.data('landing_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#landing_id').val(landing_id);
})
  
  $('#deleteservice').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var service_id = button.data('service_id')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.form-group input#service_id').val(service_id);
})

  $('#editservice').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var service_name = button.data('service_name')
    var service_desc = button.data('service_desc')
    var service_id = button.data('service_id')

    var name = button.data('name')
    var passport = button.data('passport')
    var expiry_date = button.data('expiry_date')

     // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.form-group input#service_name').val(service_name);
    modal.find('.form-group input#service_desc').val(service_desc);
    modal.find('.form-group input#service_id').val(service_id);
  
    modal.find('.form-group input#name').val(name);
    modal.find('.form-group input#passport').val(passport);
    modal.find('.form-group input#expiry_date').val(expiry_date);
  
  })


  $('#deleteportifolio').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var portifolio_id = button.data('portifolio_id')
     // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.form-group input#portifolio_id').val(portifolio_id);
  })
  
    $('#editportifolio').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var portifolio_name = button.data('portifolio_name')
      var portifolio_desc = button.data('portifolio_desc')
      var portifolio_id = button.data('portifolio_id')
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.form-group input#portifolio_name').val(portifolio_name);
      modal.find('.form-group input#portifolio_desc').val(portifolio_desc);
      modal.find('.form-group input#portifolio_id').val(portifolio_id);
    })
  

    $('#deleteabout').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var about_id = button.data('about_id')
         // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.form-group input#about_id').val(about_id);
      })
      
        $('#editabout').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var about_name = button.data('about_name')
          var about_desc = button.data('about_desc')
          var about_desc_2 = button.data('about_desc_2')
          var about_id = button.data('about_id')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.form-group input#about_name').val(about_name);
          modal.find('.form-group input#about_desc').val(about_desc);
          modal.find('.form-group input#about_desc_2').val(about_desc_2);
          modal.find('.form-group input#about_id').val(about_id);
        })


        $('#editsociallink').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var youtube = button.data('youtube')
          var twitter = button.data('twitter')
          var facebook = button.data('facebook')
          var sociallink_id = button.data('sociallink_id')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.form-group input#youtube').val(youtube);
          modal.find('.form-group input#twitter').val(twitter);
          modal.find('.form-group input#facebook').val(facebook);
          modal.find('.form-group input#sociallink_id').val(sociallink_id);
        })
        
          
        $('#deletesociallink').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var sociallink_id = button.data('sociallink_id')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.form-group input#sociallink_id').val(sociallink_id);
        })
        
        
        $('#editfooter').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var footer_span = button.data('footer_span')
          var footer_id = button.data('footer_id')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.form-group input#footer_span').val(footer_span);
          modal.find('.form-group input#footer_id').val(footer_id);
        })
        
          
        $('#deletefooter').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var footer_id = button.data('footer_id')
           // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.form-group input#footer_id').val(footer_id);
        })
        
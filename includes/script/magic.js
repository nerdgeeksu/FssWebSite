$(document).ready(function() {


						//  ==================  Connexion Processing   ===================
// process the form
$('#connexionform').submit(function(event) {
	
	$(".ajax_spinner").remove();
    $(".ajax_wait").remove();

   var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement </span>";
   $(".ajax_wait").after(label);
   
  // remove the past errors
  $('#name-group').removeClass('has-error');
  $('#name-group .help-block').empty();
  $('#superhero-group').removeClass('has-error');
  $('#superhero-group .help-block').empty();

  // remove success messages
  $('#messages').removeClass('alert alert-success').empty();

  // get the form data
  var formData = {
      'name'              : $('input[name=name]').val(),
      'superheroAlias'    : $('input[name=superheroAlias]').val()
  };

  // process the form
  $.ajax({
    type        : 'POST',
    url         : 'includes/script/connexionverif.php',
    data        : formData,
    dataType    : 'json',
    success     : function(data) {

	 
	 
      

      // if validation fails
      // add the error class to show a red input
      // add the error message to the help block under the input
      if ( ! data.success) {
		  
		  $(".ajax_spinner").remove();
		  $(".ajax_wait").remove();
		  
        if (data.errors.name) {
          $('#name-group').addClass('has-error');
          $('#name-group .help-block').html(data.errors.name);
        }

        if (data.errors.superheroAlias) {
          $('#superhero-group').addClass('has-error');
          $('#superhero-group .help-block').html(data.errors.superheroAlias);
        }

      } else {
		  
		  var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement</span>";
          $(".ajax_wait").after(label);
        // if validation is good add success message
        $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
		$('#connexion-modal').modal('hide');
		
					setTimeout(function(){
				   window.location='http://fssheav.azurewebsites.net/signedindex.php';
				}, 5000);
	
      }
    }
  });

  // stop the form from submitting and refreshing
  event.preventDefault();
});



            //  ==================  Inscription Processing   ===================

			// process the form
			$('#inscriptionform').submit(function(event) {
				
				$(".ajax_spinner").remove();
				$(".ajax_wait").remove();

			   var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement </span>";
			   $(".ajax_wait").after(label);
			   
			  // remove the past errors
			  $('#name-group').removeClass('has-error');
			  $('#name-group .help-block').empty();
			  $('#superhero-group').removeClass('has-error');
			  $('#superhero-group .help-block').empty();

			  // remove success messages
			  $('#messages').removeClass('alert alert-success').empty();

			  // get the form data
			  var formData = {
				  'name'              : $('input[name=name]').val(),
				  'superheroAlias'    : $('input[name=superheroAlias]').val()
			  };

			  // process the form
			  $.ajax({
				type        : 'POST',
				url         : 'includes/script/inscriptionverif.php',
				data        : formData,
				dataType    : 'json',
				success     : function(data) {

				 
				 
				  

				  // if validation fails
				  // add the error class to show a red input
				  // add the error message to the help block under the input
				  if ( ! data.success) {
					  
					  $(".ajax_spinner").remove();
					  $(".ajax_wait").remove();
					  
					if (data.errors.name) {
					  $('#name-group').addClass('has-error');
					  $('#name-group .help-block').html(data.errors.name);
					}

					if (data.errors.superheroAlias) {
					  $('#superhero-group').addClass('has-error');
					  $('#superhero-group .help-block').html(data.errors.superheroAlias);
					}

				  } else {
					  
					  var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement</span>";
					  $(".ajax_wait").after(label);
					// if validation is good add success message
					$('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
					$('#inscription-modal').modal('hide');
					
						setTimeout(function(){
				   window.location='http://fssheav.azurewebsites.net/signedindex.php';
				}, 5000);
				
					
				  }
				}
			  });

			  // stop the form from submitting and refreshing
			  event.preventDefault();
			});

});

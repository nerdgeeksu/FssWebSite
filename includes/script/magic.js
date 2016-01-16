$(document).ready(function() {

// process the form
$('form').submit(function(event) {

   var label = "<span class='ajax_spinner' align=center><img src='files/ispinner.gif'/> Loading </span>";
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
    type        : 'GET',
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
		  
		  var label = "<span class='ajax_spinner' align=center><img src='files/ispinner.gif'/> Loading </span>";
          $(".ajax_wait").after(label);
        // if validation is good add success message
        $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
      }
    }
  });

  // stop the form from submitting and refreshing
  event.preventDefault();
});

});

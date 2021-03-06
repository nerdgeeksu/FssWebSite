$(document).ready(function() {
	
						//	================== Link Hover Effect ===============================
	var	sfHover = function() {
			var sfEls =
			document.getElementById("menu").getElementsByTagName("LI");
			for (var i=0; i<sfEls.length; i++) 
			{
				sfEls[i].onmouseover = function() {
				this.className+=" sfhover";
				}
				sfEls[i].onmouseout = function() {
				this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
				}
			}
};
	if (window.attachEvent)
	{
		window.attachEvent("onload", sfHover);
	}
						//	================== Back to Top ===============================
		$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
		var amountScrolled = 500;
		$(window).scroll(function() {
			if ( $(window).scrollTop() > amountScrolled ) {
				$('a.back-to-top').fadeIn('slow');
			} else {
				$('a.back-to-top').fadeOut('slow');
			}
		});
		$('a.back-to-top').click(function() {
			$('html, body').animate({ scrollTop: 0}, 700);
			return false;
});

						//  ==================  Connexion Processing   ===================
// process the form
$('#connexionform').submit(function(event) {
	
	 
	 
	$(".ajax_spinner").remove();
    $(".ajax_wait").remove();


   
  // remove the past errors
  $('#email-group').removeClass('has-error');
  $('#email-group .help-block').empty();
  $('#password-group').removeClass('has-error');
  $('#password-group .help-block').empty();

  // remove success messages
  $('#messages').removeClass('alert alert-success').empty();
  $('#messages').removeClass('alert alert-danger alert-dismissable').empty();
  
    var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement </span>";
   $(".ajax_wait").after(label);
  

  // get the form data
  var formData = {
      'email'              : $('input[name=email]').val(),
      'password'    : $('input[name=password]').val(),
	  'tag'	: $('input[name=tag]').val()
  };

  // process the form
  $.ajax({
    type        : 'POST',
    url         : 'includes/script/userhandling.php', 
    data        : formData,
    dataType    : 'json',
    success     : function(data) {

	 
	 
    
      // if validation fails
      // add the error class to show a red input
      // add the error message to the help block under the input
      if ( ! data.success) {
		 
		  $(".ajax_spinner").remove();
		  $(".ajax_wait").remove();
		  
		  
        if (data.errors.email) {
          $('#email-group').addClass('has-error');
          $('#email-group .help-block').html(data.errors.email);
        }

        if (data.errors.password) {
          $('#password-group').addClass('has-error');
          $('#password-group .help-block').html(data.errors.password);
        }
		
		$('#messages').addClass('alert alert-danger alert-dismissable').append('<p>' + data.message + '</p>');
		
		var date = new Date();
        date.setTime(date.getTime ()+(1*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
		
		document.cookie = 'is_successful_login='+false+expires ;

      }
	  else 
	  {
		

        // if validation is good add success message
        $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
		
		$('#connexion-modal').modal('hide');
		var days = 1;
		
		/*
		if(true)
		{
			days = 365 ;
		}
		*/
		
		var date = new Date();
        date.setTime(date.getTime ()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
		
		document.cookie = 'is_successful_login='+true+expires ;
		document.cookie = 'session_id='+data.uid+expires;
		document.cookie = 'session_remember='+false+expires;
		
		
	
    setTimeout(function(){ window.location='http://localhost:90/Sitefaculte/index.php';
				}, 4000);
	
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

   
   
  // remove the past errors
  $('#reg_username-group').removeClass('has-error');
  $('#reg_email-group .help-block').empty();
  $('#reg_username-group').removeClass('has-error');
  $('#reg_email-group .help-block').empty();
  $('#reg_password-group').removeClass('has-error');
  $('#reg_password-group .help-block').empty();

  // remove success messages
  $('#reg_messages').removeClass('alert alert-success').empty();
  $('#reg_messages').removeClass('alert alert-danger alert-dismissable').empty();
  
   
   
  // get the form data
  var formData = {
      'username'              : $('input[name=reg_username]').val(),
	  'email'              : $('input[name=reg_email]').val(),
      'password'    : $('input[name=reg_password]').val(),
	  'tag'	: $('input[name=reg_tag]').val()
  };

  // process the form
  $.ajax({
    type        : 'POST',
    url         : 'includes/script/userhandling.php', 
    data        : formData,
    dataType    : 'json',
    success     : function(data) {

	 
	var label = "<span class='ajax_spinner' align=center><img src='includes/script/files/ispinner.gif'/> Chargement </span>";
   $(".ajax_wait").after(label);
      
   
   
      // if validation fails
      // add the error class to show a red input
      // add the error message to the help block under the input
      if ( ! data.success) {
		  
		  $(".ajax_spinner").remove();
		  $(".ajax_wait").remove();
		 
		if (data.errors.username) {
          $('#reg_username-group').addClass('has-error');
          $('#reg_username-group .help-block').html(data.errors.username);
        }
		
        if (data.errors.email) {
          $('#reg_email-group').addClass('has-error');
          $('#reg_email-group .help-block').html(data.errors.email);
        }

        if (data.errors.password) {
          $('#reg_password-group').addClass('has-error');
          $('#reg_password-group .help-block').html(data.errors.password);
        }
		
		$('#reg_messages').addClass('alert alert-danger alert-dismissable').append('<p>' + data.message + '</p>');
		
		var date = new Date();
        date.setTime(date.getTime ()+(1*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
		
		document.cookie = 'is_successful_login='+false+expires ;

      } else {
		
        // if validation is good add success message
        $('#reg_messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
		
		$('#inscription-modal').modal('hide');
		var days = 1;
		
		/*
		if(true)
		{
			days = 365 ;
		}
		*/
		
		var date = new Date();
        date.setTime(date.getTime ()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
		
		document.cookie = 'is_successful_login='+true+expires ;
		document.cookie = 'session_id='+data.uid+expires;
		document.cookie = 'session_remember='+false+expires;
		
		
	
    setTimeout(function(){ window.location='http://localhost:90/Sitefaculte/index.php';
				}, 4000);
	
      }
    }
  });

  // stop the form from submitting and refreshing
  event.preventDefault();
});

});

 <script>
    var annyangScript = document.createElement('script');
    if (/localhost/.exec(window.location)) {
      annyangScript.src = "//localhost:8443/includes/annyang.js"
    } else {
      annyangScript.src = "//cdnjs.cloudflare.com/ajax/libs/annyang/2.0.0/annyang.min.js"
    }
    document.write(annyangScript.outerHTML)
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
  "use strict";

  // first we make sure annyang started succesfully
  if (annyang) {

    // define the functions our commands will run.
   
   var playmusic = {
		'play music': function() { document.getElementsByTagName('audio')[0].play(); }
	};

    // define our commands.
    // * The key is the phrase you want your users to say.
    // * The value is the action to do.
    //   You can pass a function, a function name (as a string), or write your function as part of the commands object.
    var commands = {
      'play music':        playmusic,
      
    };

    // OPTIONAL: activate debug mode for detailed logging in the console
    annyang.debug();

    // Add voice commands to respond to
    annyang.addCommands(commands);
	annyang.addCommands(playmusic);

    // OPTIONAL: Set a language for speech recognition (defaults to English)
    // For a full list of language codes, see the documentation:
    // https://github.com/TalAter/annyang/blob/master/docs/README.md#languages
    annyang.setLanguage('en');

    // Start listening. You can call this here, or attach this call to an event, button, etc.
    annyang.start();
  } else {
    $(document).ready(function() {
      $('#unsupported').fadeIn('fast');
    });
  }

  var scrollTo = function(identifier, speed) {
    $('html, body').animate({
        scrollTop: $(identifier).offset().top
    }, speed || 1000);
  }
  </script>
  
  <p>Dites \'play music\' pour jouer l\'audio</p>
        				<audio src="example.mp3" autoplay>Your browser doesn\'t support HTML5 Audio.</audio>
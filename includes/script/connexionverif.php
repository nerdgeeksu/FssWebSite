<?php

include('files/config.php');
// connexionverif.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['superheroAlias']))
        $errors['email'] = 'Email is required.';

   

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
		
		$query=$fssdb->prepare(" SELECT * FROM fss_users ");
           $query->execute();
		   $status = 0;	
			$data=$query->fetch();
		if( $data['email'] == $_POST['name'] && $data['password'] == $_POST['superheroAlias'] )
		{
        $status = 1;
		}
        // show a message of success and provide a true success variable
		
		if($status == 1 )
		{
			session_start();
		$_SESSION['is_successful_login'] = true ;
        $data['success'] = true;
        $data['message'] = 'Success!';
		}
		else
		{
			$data['success'] = false;
			$data['errors']  = 'Le nom d\'utilisateur ou le mot de passe n\'est pas correcte !';
           $data['message'] = 'Le nom d\'utilisateur ou le mot de passe n\'est pas correcte !';
			
		}
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>	


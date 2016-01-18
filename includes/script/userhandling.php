<?php
 
/**
 * File to handle all API requests
 * Accepts GET and POST
 * 
 * Each request will be identified by TAG
 * Response will be JSON data
 
  /**
 * check for POST request 
 */
 
    $errors         = array();      // array to hold validation errors
    $data           = array();      // array to pass back data

 
if (isset($_POST['tag']) && $_POST['tag'] != '') 
	{
		// get tag
		$tag = $_POST['tag'];
	 
		// include db handler
		require_once 'files/DB_Functions.php';
		$db = new DB_Functions();
 
   
 
		// check for tag type
		if ($tag == 'login') 
		{
				// Request type is check Login
				
				// validate the variables ======================================================
			// if any of these variables don't exist, add an error to our $errors array

			if (empty($_POST['email']))
			{
				$errors['email'] = 'E-mail requis .';

			}

			if (empty($_POST['password']))
			{
				$errors['password'] = 'Mot de passe requis.';
			}
			
				if ( ! empty($errors)) 
			{

				// if there are items in our errors array, return those errors
				$data['success'] = false;
				$data['message'] = ' Echec de connexion !';
				$data['errors']  = $errors;
				
			}
			else
			{
				$email = $_POST['email'];
				$password = $_POST['password'];
		 
				// check for user
				$user = $db->getUserByEmailAndPassword($email, $password);
				if ($user != false) 
				{
					// user found
					
					$data["uid"] = $user["unique_id"];
					$data["user"]["name"] = $user["name"];
					$data["user"]["email"] = $user["email"];
					$data["user"]["created_at"] = $user["created_at"];
					$data["user"]["updated_at"] = $user["updated_at"];
					$data['success'] = true;
					$data['message'] = ' Connexion Reussie !';
					$data["errors"] = false;
					
				}
				else 
				{
					// user not found
					// echo json with error = 1
					$data['success'] = false;
					$data["message"] = "E-mail ou mot de passe incorrecte veuillez ressayez !" ;
					$errors['tag'] = " E-mail ou mot de passe incorrecte veuillez ressayez ." ;
		            $data['errors']  = $errors;
					
					
				}
				
			}
			
			
				
		}	
		else if ($tag == 'register') 
		{
			
				if (empty($_POST['username']))
			{
				$errors['username'] = "Nom d'utilisateur requis .";
			}
			
			if (empty($_POST['email']))
			{
				$errors['email'] = "E-mail requis .";

			}
			
			if (empty($_POST['password']))
			{
				$errors['password'] = "Password requis .";
			}
			
				if ( ! empty($errors)) 
			{

				// if there are items in our errors array, return those errors
				$data['success'] = false;
				$data['message'] = "Erreur veuillez ressayez  !";
				$errors['tag'] = " Erreur lors de votre inscription veuillez ressayez ultérieurement.";
				$data['errors']  = $errors;
				
				
			}
			else
			{
						
					// Request type is Register new user
					$name = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
		 
					// check if user is already existed
					if ($db->isUserExisted($email)) {
						// user is already existed - error response
						$data['success'] = false;
						$data["message"] = " Ce nom d'utilisateur existe deja ! ";
						$errors['tag'] = " Ce nom d'utilisateur existe deja ! .";
						$data['errors']  = $errors;
						
						
					} 
					else
					{
						// store user
						$user = $db->storeUser($name, $email, $password);
						if ($user) 
						{
							// user stored successfully
							
							$data["uid"] = $user["unique_id"];
							$data["user"]["name"] = $user["name"];
							$data["user"]["email"] = $user["email"];
							$data["user"]["created_at"] = $user["created_at"];
							$data["user"]["updated_at"] = $user["updated_at"];
							$data['success'] = true;
					        $data['message'] = 'Inscription Reussie !';
							$data["error"] = false;
							
						}
						else 
						{
							// user failed to store
							$data['success'] = false ;
							$data["message"] = " Erreur lors de votre inscription veuillez ressayez ultérieurement ";
							$errors['tag'] = " Erreur lors de votre inscription veuillez ressayez ultérieurement.";
							$data['errors']  = $errors;
							
							
						}
					}
			}
			
				
		}
		else 
		{
				// The tag is not login or register ==> failure
				
				$data['success'] = false;
				$data['message'] = "Parametre 'tag' inconnu . Le parametre doit etre  'login' ou 'register' ";
				$errors['tag'] = " Parametre 'tag' inconnu . Le parametre doit etre  'login' ou 'register' .";
		        $data['errors']  = $errors;
				
				
				
				
		   
		}
		
		
	} 
	else 
	{
		
		$data['success'] = false;
		$data['message'] = "Parametre 'tag' requis  !";
		$errors['tag'] = "Parametre 'tag' requis  ! .";
		$data['errors']  = $errors;
		
		
	}
	
	
		echo json_encode($data);
?>
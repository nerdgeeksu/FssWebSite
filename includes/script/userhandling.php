<?php
 
 include('files/config.php');
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
				$email = htmlspecialchars($_POST['email']);
				$password = htmlspecialchars($_POST['password']);
				
				
				$query=$fssdb->prepare(" SELECT * FROM fss_users where email = :email ");
				$query->bindValue(':email', $email, PDO::PARAM_STR);
				$query->execute();	
				$qdata=$query->fetch();
				
				// check for user
				
				// password_verify($password,$qdata['password'])
				if (password_verify($password,$qdata['password'])) 
				{
					// user found
					
					$data["uid"] = $qdata["unique_id"];
					$data["user"]["username"] = $qdata["username"];
					$data["user"]["email"] = $qdata["email"];
					$data["user"]["create_time"] = $qdata["create_time"];
					$data['success'] = true;
					$data['message'] = ' Connexion Reussie !';
					$data["errors"] = false;
					$data['is_successful_login'] = true;
					
				}
				else 
				{
				
					// user not found
					
					$data['success'] = false;
					$data['is_successful_login'] = false;
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
					$username = htmlspecialchars($_POST['username']);
					$email = htmlspecialchars($_POST['email']);
					$password = htmlspecialchars($_POST['password']);
		 
					// check if user is already existed
					
				$query=$fssdb->prepare(" SELECT * FROM fss_users where email = :email ");
				$query->bindValue(':email', $email, PDO::PARAM_STR);
				$query->execute();	
				$qdata=$query->fetch();
					
					if ($qdata['email'] == $email) {
						// user is already existed - error response
						$data['success'] = false;
						$data["message"] = " Cette email d'identification existe deja ! ";
						$errors['tag'] = " Cet email d'identification existe deja ! .";
						$data['errors']  = $errors;
						
						
					} 
					else
					{
						// store user
				
				
                $uuid = uniqid('fss_u', true);
				$encrypted_password = password_hash($password, PASSWORD_DEFAULT); // encrypted password
				$regday = date("Y-m-j");
				$type_user= 'admin';
				
                $query=$fssdb->prepare('INSERT INTO fss_users (unique_id,username,email,password,create_time,type_user) VALUES (:uuid, :username, :email, :encrypted_password, :regday, :type_user) ');
				$query->bindValue(':uuid', $uuid, PDO::PARAM_STR);
				$query->bindValue(':username', $username, PDO::PARAM_STR);
				$query->bindValue(':email', $email, PDO::PARAM_STR);
				$query->bindValue(':encrypted_password', $encrypted_password, PDO::PARAM_STR);
				$query->bindValue(':regday', $regday, PDO::PARAM_STR);
				$query->bindValue(':type_user', $type_user, PDO::PARAM_STR);
				
						if ($query->execute()) 
						{
							$qdata = $query->fetch();
							// user stored successfully
						    	
							$data["uid"] = $qdata["unique_id"];
							$data["user"]["username"] = $qdata["username"];
							$data["user"]["email"] = $qdata["email"];
							$data["user"]["create_time"] = $qdata["create_time"];
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
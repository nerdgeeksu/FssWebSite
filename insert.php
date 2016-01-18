<?php
 

  
 
$name = "bachir";
$email = "eldiopise@gmail.com";
$password = "NabouNanc1";
			
				
				$uuid = uniqid('fss_u', true);
				
				$salt = sha1(rand());
				$salt = substr($salt, 0, 10);
				$encrypted = base64_encode(sha1($password . $salt, true) . $salt);
				
				$hash = array("salt" => $salt, "encrypted" => $encrypted);
				$encrypted_password = $hash["encrypted"]; // encrypted password
				$salt = $hash["salt"]; // salt
				$regday = date("Y-m-j");
				
				 $db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'root', 'nabounanc1');
                $query=$db->prepare("INSERT INTO fss_users (unique_id, username, email, password, salt, create_time, type_user, image_profil, settings, user_dep) VALUES ('fss_u007', '$name', '$email', '$encrypted_password', '$salt', '$regday', 'admin', NULL, NULL, NULL)");
 		
				 $query->execute();
				// check for successful store
				$result = $query->fetch();
				
				if ($result) 
				{
					echo 'im here';
					// get user details 
					$uid = mysql_insert_id(); // last inserted id
					$result = mysql_query("SELECT * FROM fss_users WHERE email = $email");
					// return user details
					echo mysql_fetch_row($result);
				} else 
				{
					echo 'im not here';
					
					return $false;
				}
				
				echo mysql_fetch_array($result);
				
			
				
			
	
?>	
			
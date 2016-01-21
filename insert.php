<?php

error_reporting(E_ALL);

function hashSSHA($password) 
{
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}


function isUserExisted($email) 
			{
				$db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'root', 'nabounanc1');
				$query=$db->prepare("SELECT * FROM fss_users WHERE email = ':email' ");
					$query->bindValue(':email', $email, PDO::PARAM_INT);
					$query->execute();
					
						
				// check for result 
				$no_of_rows = $query->rowCount();
				if ($no_of_rows > 0) 
				{
					// user existed 
					return true;
				} else {
					// user not existed
					return false;
				}
			}

function getUserByEmailAndPassword($email, $password) 
			{
				$db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'root', 'nabounanc1');
				$query=$db->prepare("SELECT * FROM fss_users WHERE email = ':email' ");
					$query->bindValue(':email', $email, PDO::PARAM_INT);
					$query->execute();
					
						
				// check for result 
				$no_of_rows = $query->rowCount();
				if ($no_of_rows > 0) 
				{
					$result = $query->fetchAll();
					
					if (password_verify($password,$result['password'])) {
						/* Valid */
						// user authentication details are corre
						return $result;
					} 
					else
					{
						/* Invalid */
						// user not found
						return false;
					}
					
				}

			}
function storeUser($name, $email, $password) 
{


    $uuid = uniqid('fss_u', true);
    $hash = hashSSHA($password);
    $encrypted_password =  password_hash($password, PASSWORD_DEFAULT); // $hash["encrypted"]; // encrypted password
    $salt = $hash["salt"]; // salt
    $regday = date("Y-m-j");
    $type_user= 'admin';
    $db = new PDO('mysql:host=localhost:3308;dbname=fss-db', 'root', 'nabounanc1');

    echo $encrypted_password ;
	echo  '<br>';
	
    $query=$db->prepare('INSERT INTO fss_users (unique_id,username,email,password,create_time,type_user) VALUES (:uuid, :name, :email, :encrypted_password, :regday, :type_user) ');
    $query->bindValue(':uuid', $uuid, PDO::PARAM_STR);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':encrypted_password', $encrypted_password, PDO::PARAM_STR);
   // $query->bindValue(':salt', $salt, PDO::PARAM_STR);
    $query->bindValue(':regday', $regday, PDO::PARAM_STR);
    $query->bindValue(':type_user', $type_user, PDO::PARAM_STR);


    $query->execute();


        // check for successful store

    if ($query->execute()) 
    {
        echo $query->rowCount();
		echo  '<br>';
       $result = $query->fetchAll();

        print_r($result);

        // get user details 
        $uid = $db->lastInsertId(); // last inserted id
        $query=$db->prepare("SELECT * FROM fss_users WHERE unique_id = :uid");
        $query->bindValue(':uid', $uid, PDO::PARAM_STR);
        $query->execute();




        //Message
        $message = "Bienvenue sur FSS Votre inscription a ete accepte pseudo = $email mot de passe = $password !";
        //Titre
        $titre = "Bienvenue sur FSS !";

        mail($email, $titre, $message);  // Mail to the new user 

        // return user details
        //return $query->fetchAll();
        echo 'it\'s good';
		echo  '<br>';

    } 
    else 
    {
        echo 'error';
		echo  '<br>';
        //return $false;
    }
}
$name = "bachirdiop";
$email = "testing@hotmail.com";
$password = "bachirdiop3";
$email2 = 'diopisemou@gmail';
echo storeUser($name, $email, $password);
echo getUserByEmailAndPassword('diopisemou@gmail.com','bachirdiop3') ;

if(isUserExisted($email2))
	echo 'il existe';
else 
	echo 'il existe pas ';
			/*	
				$uuid = uniqid('fss_u', true);
				
				$salt = sha1(rand());
				$salt = substr($salt, 0, 10);
				$encrypted = base64_encode(sha1($password . $salt, true) . $salt);
				
				$hash = array("salt" => $salt, "encrypted" => $encrypted);
				$encrypted_password = $hash["encrypted"]; // encrypted password
				$salt = $hash["salt"]; // salt
				$regday = date("Y-m-j");
				echo $hash["salt"] ;
				echo '<br>';
				echo $hash["encrypted"] ;
				echo '<br>';
				
				echo "INSERT INTO fss_users (unique_id,username,email,password,salt,create_time,type_user) VALUES('$uuid', '$name', '$email', '$encrypted_password', '$salt', '$regday','admin'); ";
				
				echo '<br>';
				
				$db = new PDO('mysql:host=localhost:3308;dbname=fss-db','diopbach','nabounanc1');
                $query=$db->prepare('INSERT INTO fss_users (unique_id,username,email,password,salt,create_time,type_user) VALUES (:uuid, :name, :email, :encrypted_password, :salt, :regday, :type_user) ');
				$query->bindValue(':uuid', $uuid, PDO::PARAM_STR);
				$query->bindValue(':name', $name, PDO::PARAM_INT);
				$query->bindValue(':email', $email, PDO::PARAM_STR);
				$query->bindValue(':encrypted_password', $encrypted_password, PDO::PARAM_STR);
				$query->bindValue(':salt', $salt, PDO::PARAM_STR);
				$query->bindValue(':regday', $regday, PDO::PARAM_STR);
				$query->bindValue(':type_user', $type_user, PDO::PARAM_STR);
				
					$result = $query->execute();
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
							
		require_once 'includes/script/files/DB_Functions.php';
		$db = new DB_Functions();
		
		echo $db->storeUser($name,$email, $password);
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo $db->getUserByEmailAndPassword($email, $password);
					return $false;
				}
				
				echo mysql_fetch_array($result);
				
			
		*/
			
	
?>	
			
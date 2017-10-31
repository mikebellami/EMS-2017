<?php
	session_start();
	class USER
	{
		private $db;

		function __construct($conn)
		{
			$this->db = $conn;
		}

		public function register($fname,$lname,$email,$password)
	    {
	       try
	       {
	           $new_password = password_hash($password, PASSWORD_BCRYPT);
	   
	           $stmt = $this->db->prepare("INSERT INTO user(firstname,lastname,email,password) 
	                                                       VALUES(:fname, :lname, :umail, :upass)");
	              
	           $stmt->bindparam(":fname", $fname);
	           $stmt->bindparam(":lname", $lname);
	           $stmt->bindparam(":umail", $email);
	           $stmt->bindparam(":upass", $new_password);            
	           $stmt->execute(); 
	   
	           return $stmt; 
	       }
	       catch(PDOException $e)
	       {
	           echo $e->getMessage();
	       }    
	    }

	    public function login($email,$password)
	    {
	       try
	       {
	          $stmt = $this->db->prepare("SELECT * FROM user WHERE email=:email LIMIT 1");
	          $stmt->bindparam(":email" , $email);
	          $stmt->execute();
	          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	          if($stmt->rowCount() > 0)
	          {
	             if(password_verify($password, $userRow['password']))
	             {

	                $_SESSION['user_session'] = $userRow['user_id'];
	                return true;
	             }
	             else
	             {
	             	var_dump($password);
	             	
	             	
	             	return false;
	             }
	          }
	          else
	          {
	          		var_dump("false");
	          		return false;
	          }
	       }
	       catch(PDOException $e)
	       {
	           echo $e->getMessage();
	       }
	   }

	   public function is_loggedin()
	   {
	      if(isset($_SESSION['user_session']))
	      {
	         return true;
	      }
	      else 
	      {
	      	 return false;
	      }
	   }
	 
	   public function redirect($url)
	   {
	       header("Location: $url");
	   }
	 
	   public function logout()
	   {
	        session_destroy();
	        unset($_SESSION['user_session']);
	        return true;
	   }
	}
?>
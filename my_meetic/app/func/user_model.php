<?php
require_once ('C:\xampp\htdocs\my_meetic\app\config\db.php');
session_start();
 	class dbFunction {
		 private $db;
		 private $conn;
		//  update in live ????????????
		function __construct() {
			
			// connecting to database
			$this->db = new Database();
			$this-> conn=$this-> db->connect();
		}
		// destructor
		function __destruct() {
			
		}
		
		public function UserRegister($name,$lastname,$datebirth, $email, $password,$gender,$city,$hobbies,$hobbiessecond,$image,$tipo){
			
			$dob = new DateTime($datebirth);
			$today   = new DateTime('today');
		  
			$age = $dob->diff($today)->y;
		   
				if($age>18)
				{
			 	$password = password_hash($password, PASSWORD_ARGON2I);
				$qr = $this->conn->query("INSERT INTO users(name,lastname,datebirth,email,password,gender,city,hobbies,hobbiessecond,image,type,age) values('".$name."','".$lastname."','".$datebirth."','".$email."','".$password."','".$gender."','".$city."','".$hobbies."','".$hobbiessecond."','".$image."','".$tipo."','".$age."')") or die(mysqli_connect_error());
				return $qr;
				}else
				{
					echo "<script>alert('You have to be over 18 years old')</script>";
				}
		
			 
		}
		public function Login($email, $password){
			$res=$this->conn->query("SELECT * FROM users WHERE email = '".$email."'");
			$user_data = $res->fetch_assoc();
			
			if ($user_data && password_verify($password,$user_data['password'])) 
			{
		 
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_data['id'];
				$_SESSION['gender'] = $user_data['gender'];
				$_SESSION['name'] = $user_data['name'];
				$_SESSION['email'] = $user_data['email'];
				$_SESSION['datebirth'] = $user_data['datebirth'];
				$_SESSION['city'] = $user_data['city'];
				$_SESSION['hobbies'] = $user_data['hobbies'];
				$_SESSION['hobbiessecond'] = $user_data['hobbies'];
				$_SESSION['lastname'] = $user_data['lastname'];
				$_SESSION['password'] = $user_data['password'];
				$_SESSION['image'] = $user_data['image'];
				$_SESSION['type'] = $user_data['type'];
				return TRUE;
			}
			else
			{
				return FALSE;
			}
			 
				 
		}
		public function Veryfypassword($currentpass,$email){
			$ress=$this->conn->query("SELECT * FROM users WHERE email = '".$email."'");
			$userpass=$ress->fetch_assoc();
			if ($userpass && password_verify($currentpass,$userpass['password'])){
				return TRUE;
			}
			else{
				return FALSE;
			}	
		}
		public function Editperfil($name,$lastname,$datebirth, $email, $password,$gender,$city,$hobbies,$hobbiessecond,$id){
			$password = password_hash($password, PASSWORD_ARGON2I);
			$queryy = $this->conn->query("UPDATE users SET name='$name', lastname ='$lastname',datebirth='$datebirth',email='$email',password='$password',gender='$gender',city='$city',hobbiessecond='$hobbiessecond' WHERE id=$id");
			
			$_SESSION['gender'] = $gender;
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['datebirth'] = $datebirth;
			$_SESSION['city'] = $city;
			$_SESSION['hobbies'] = $hobbies;
			$_SESSION['hobbiessecond'] = $hobbiessecond;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['password'] = $password;

			return $queryy;
			
		}
		public function EditPass($password,$id){
			$password = password_hash($password, PASSWORD_ARGON2I);
			$queryy = $this->conn->query("UPDATE users SET password='$password' WHERE id=$id");
			
			

			return $queryy;
			
		}
		public function isUserExist($email){
			$qr = $this->conn->query("SELECT * FROM users WHERE email = '".$email."'");
			 $row = mysqli_num_rows($qr);
			if($row > 0){
				return true;
			} else {
				return false;
			}
		}
	}

	
	
?>
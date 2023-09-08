<?php
include_once('../../app/func/user_model.php');
$funObj = new dbFunction();
$conec= new Database();
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = $funObj->Login($email, $password);
		if ($user) {
			// Registration Success
		   header("location:home.php");
		} else {
			// Registration Failed
			echo "<script>alert('Email / Password Not Match')</script>";
		}
	}
	if(isset($_POST['register'])){
		$conection=$conec->connect();
		$name = $_POST['name'];
        $lastname = $_POST['lastname'];
		$email = $_POST['email'];
        $datebirth=$_POST['date'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['comf_password'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $hobbies=$_POST['hobbies']; 
		$hobbiessecond=$_POST['hobbiessecond'];
		$tipo = $_FILES['foto']['type'];
		$sizeimage = $_FILES['foto']['size'];
		$updateiamge = fopen($_FILES['foto']['tmp_name'], 'r');
        $image = fread($updateiamge, $sizeimage);
		$image = mysqli_escape_string($conection, $image);
       
		

		if($password == $confirmPassword){
			$emails = $funObj->isUserExist($email);
			if(!$emails){
				$register = $funObj->UserRegister($name,$lastname,$datebirth,$email,$password,$gender,$city,$hobbies,$hobbiessecond,$image,$tipo);
				if($register){
					 echo "<script>alert('Registration Successful')</script>";
				}else{
					echo "<script>alert('Registration Not Successful')</script>";
				}
			} else {
				echo "<script>alert('Email Already Exist')</script>";
			}
		} else {
			echo "<script>alert('Password Not Match')</script>";
		
		}
	}


?> 

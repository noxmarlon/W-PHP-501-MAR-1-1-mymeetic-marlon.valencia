<?php
include_once('../../app/controller/register_login_controller.php');
?>

 
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>My meetic gaming edition </title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/style.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><link rel="stylesheet" href="../css/formulario.css"><link rel="stylesheet" href="../css/registerform.css">
    

</head>
<body>
<!-- partial:index.partial.html -->

<div class="wrapper">
    
  <div id="expand" class="login-text">
    <button class="cta"><i class="fas fa-chevron-down fa-1x"></i></button>
    <div id="texto" class="text">
     
        <!-- partial:index.partial.html -->
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form  method="post" action="" class="form" id="register" enctype="multipart/form-data">
                <h2 class="form__title">Sign Up</h2>
                <input   required name="name"type="text" placeholder="Name" class="input" />
                <input required name="lastname" type="text" placeholder="Lastname" class="input" />
                <input required name="email" type="email" placeholder="Email" class="input" />
                <input required id="date" name="date" type="date" class="input">
                <input  required name="password" type="password" placeholder="Password" class="input" />
                <input  name="comf_password" type="password" placeholder=" Repeat Password" class="input" />
                <input type="file" class="input" name="foto">
                <select required  class="input" name="gender" id="gender_select">
                    <option value="">Please Choose Your Gender</option>
                    <option value="Autre">Autre</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
                <select required class="input" name="hobbies" id="hobbies_select">
                        <option value="">Please Choose Your Hobbies</option>
                        <option value="Games">Games</option>
                        <option value="Read">Read</option>
                        <option value="Sport">Sport</option>
                </select>
                <select required class="input" name="hobbiessecond" id="hobbies_select">
                        <option value="">Please Choose Your Hobbies</option>
                        <option value="Dance">Dance</option>
                        <option value="Music">Music</option>
                        <option value="Photographie">Photographie</option>
                        
                </select>
                <select required  class="input" name="city" id="citys_select">
                    <option value="">Please Choose Your Gender</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Paris">Paris</option>
                </select>
                
                <button   name="register" value="register" class="btn">Sign Up</button>
               
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form  method="post" action="" class="form" id="login">
                <h2 class="form__title">Sign In</h2>
                <input name="email" type="email" placeholder="Email" class="input" />
                <input name="password" type="password" placeholder="Password" class="input" />
                <a href="#" class="link">Forgot your password?</a>
                <button  name="login" value="login" class="btn">Sign In</button>
            </form>

        <!-- PHP REQUEST SINGN UP -->

           




        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
                
            </div>
        </div>
    </div>
    <!-- partial -->
        </div>
    </div>
    <div class="call-text">
        <h1>My <span>Meetic</span></h1>
        <button id="join">Join the Community</button>
    </div>
    

    </div>
    <footer>
	<p>
		 By
		<a target="_blank" href="Marlon.valencia">Marlon valencia</a>
		
	</p>
</footer>
<!-- partial -->
  <script  src="..\js\scripregister.js"></script>
  <script  src="..\js\script.js"></script>

</body>
</html>




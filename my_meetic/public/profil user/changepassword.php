<?php 
	include_once('../../app/controller/sessions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home My Meetic</title>
        <link rel="stylesheet" href="../css/css perfil/formedit.css" > /// Form csss edit perfil
        <link rel="stylesheet" href="../css/css perfil/perfil.css" >
        <link rel="stylesheet" href="../css/css perfil/modelperfill.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title">My <span>Meetic</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    
                    <ul>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="../../app/controller/logout.php"><i class="fas fa-power-off"></i></a></li> 
                        
                    </ul>
            
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                    <img src="data:<?php echo $_SESSION['type']; ?>;base64,<?php echo base64_encode($_SESSION['image']); ?>"> 
                        <p><?=$_SESSION['name']." ". $_SESSION['lastname'] ?> </p> 
                    </center>
                    <li class="item">
                        <a href="../model/home.php" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Find Users</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <!-- <a href="#"><i class="fas fa-image"></i><span>Picture</span></a> -->
                            <a href="userperfil.php"><i class="fas fa-address-card"></i><span>Info</span></a>
                        </div>
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                            <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                        </div>
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="changepassword.php"><i class="fas fa-lock"></i><span>Password</span></a>
                            <!-- <a href="#"><i class="fas fa-language"></i><span>HOOBIES TAL VEZ ??</span></a> -->
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div>
                <figure class="snip1336">
                    <img src="../images/autumportada.jpg" alt="sample87" />
                    <figcaption>
                    <img src="data:<?php echo $_SESSION['type']; ?>;base64,<?php echo base64_encode($_SESSION['image']); ?>" alt="profile-sample4" class="profile" > 
                        
                    <form  method="post" action="" class="form" id="changepass" enctype="multipart/form-data">
                             <h2 class="form__title">Change PassWord</h2>
                             <label for="Email">Email</label>
                             <input required name="email" type="email" placeholder="Email" class="input" value="<?php echo $_SESSION['email'] ?>"/>
                             <label for="Current">Current Password</label>
                            <input  required name="currentpass" type="password" placeholder=" Current Password" class="input" />
                            <label for="password">Password</label>
                            <input  required name="password" type="password" placeholder="Password" class="input" />
                            <label for="password">Comfirm Password</label>
                            <input  name="comf_password" type="password" placeholder=" Repeat Password" class="input" /> 
                            
                <br>
                <button class="follow"  name="changepass" value="changepass" class="btn">Save Changes</button>
               
            </form>


                        <!--  -->
                        <!-- <a href="#" class="info">Ch</a> -->
                    </figcaption>
                    </figure>

                </div>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>
          <footer>
	<p>
		 By
		<a target="_blank" href="Marlon.valencia">Marlon valencia</a>
		
	</p>
</footer>

    </body>
</html>
<?php 
    include_once('../../app/controller/editprofil.php');
?>
      
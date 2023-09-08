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
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
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
                     <div class="formularioedit">  
                    <form  method="post" action="" class="form" id="editprofil" enctype="multipart/form-data">
                             <h2 class="form__title">Edit Profil</h2>
                             <label for="name">Name</label>
                            <input   required name="name"type="text" placeholder="Name" class="input"  value="<?php echo $_SESSION['name'] ?>"/>
                            <label for="lastname">Lastname</label>
                            <input required name="lastname" type="text" placeholder="Lastname" class="input" value="<?php echo $_SESSION['lastname'] ?>"/>
                            <label for="email">Email</label>
                            <input required name="email" type="email" placeholder="Email" class="input" value="<?php echo $_SESSION['email'] ?>"/>
                            <label for="date">Date</label>
                            <input required id="date" name="date" type="date" class="input" value="<?php echo $_SESSION['datebirth'] ?>">
                            <label for="currentpass">Current Password</label>
                            <input  required name="currentpass" type="password" placeholder=" Current Password" class="input" />
                            <label for="Gender">Gender</label>
                            <select required  class="input" name="gender" id="gender_select">
                                <option value="<?=$_SESSION['gender']?>"><?=$_SESSION['gender']?></option>
                                <option value="Autre">Autre</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                            <label for="hobbies">hobbies</label>
                            <select required class="input" name="hobbies" id="hobbies_select">
                                <option value="<?=$_SESSION['hobbies']?>"><?=$_SESSION['hobbies']?></option>
                                <option value="Games">Games</option>
                                <option value="Read">Read</option>
                                <option value="Sport">sport</option>
                            </select>
                            <label for="hobbiessecond">Hobbies</label>
                            <select required class="input" name="hobbiessecond" id="hobbies_selecttsd">
                                <option value="<?=$_SESSION['hobbiessecond']?>"><?=$_SESSION['hobbiessecond']?></option>
                                <option value="Dance">Dance</option>
                                <option value="Music">Music</option>
                                <option value="Photographie">Photographie</option>
                            </select>
                            <label for="city">City</label>
                            <select required  class="input" name="city" id="citys_select">
                                <option value="<?=$_SESSION['city']?>"><?=$_SESSION['city']?></option>
                                <option value="Marseille">Marseille</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Paris">Paris</option>
                            </select>
                <br>
                <button  class="follow"  name="editprofil" value="editprofil" class="btn">Save Changes</button>
               
            </form>
            </div> 


                        <!-- <a href="#" class="follow">Save Changes</a> -->
                        <!-- <a href="#" class="info">Ch</a> -->
                    </figcaption>
                    </figure>

                </div>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->
        <footer>
	<p>
		 By
		<a target="_blank" href="Marlon.valencia">Marlon valencia</a>
		
	</p>
</footer>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>

    </body>
</html>
<?php 
    include_once('../../app/controller/editprofil.php');
?>
      
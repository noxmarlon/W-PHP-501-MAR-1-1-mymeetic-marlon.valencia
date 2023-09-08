<?php 
	include_once('../../app/controller/sessions.php');
    include_once('../../app/controller/search.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        
        <meta charset="utf-8">
        <title>Home My Meetic</title>
        <link rel="stylesheet" href="slider.css">
        <link rel="stylesheet" href="../css/css perfil/modelperfill.css">
        <link rel="stylesheet" href="../css/css perfil/perfil.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script  src="porfavor.js"></script>
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
                            <a href="../profil user/userperfil.php"><i class="fas fa-address-card"></i><span>Info</span></a>
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
                            <a href="../profil user/changepassword.php"><i class="fas fa-lock"></i><span>Change Password</span></a>
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
              <div class="formfilter">
                    <form method="POST">
                
                        <select class="input" name="gender" id="gender">
                            <option value="">Please choose a Gender</option>
                            <option value="Autre">Autre</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    
                
                        <select class="input" name="city" id="city">
                            <option value="">Please choose a City</option>
                            <option value="Marseille">Marseille</option>
                            <option value="Lyon">Lyon</option>
                            <option value="Paris">paris</option>
                        </select>
                    
                        <select class="input" name="hobbies" id="hobbies">
                            <option value="">Please choose a Hobbie</option>
                            <option value="Games">Games</option>
                            <option value="Read">Read</option>
                            <option value="Sport">Sport</option>
                            
                        </select>
                    
                        <select class="input" name="hobbiessecond" id="hobbiessecond">
                            <option value="">Please choose a second  Hobbie</option>
                            <option value="Dance">Dance</option>
                            <option value="Music">Music</option>
                            <option value="Photographie">Photographie</option>
                            
                            
                        </select>
                    
                        <select class="input" name="age" id="age">
                            <option value="">Please choose a Age</option>
                            <option value="18">18/25</option>
                            <option value="25">25/35</option>
                            <option value="35">35/45</option>
                            <option value="45">45+</option>
                            
                        </select>
                        <button class="boton"  name="search" value="search" class="btn">search</button>
                 </form>
                 <br>
                 <div id="flexcaja" >
                 <?php While($rowSql = $sqli->fetch_assoc()) {   ?>

                                <section>
                                <div>
                                <div class="card-container">
                                            <span class="pro"><?php echo $rowSql["hobbies"]; ?></span>
                                            <img class="round" src="data:<?php echo $rowSql["type"] ?>;base64,<?php echo base64_encode($rowSql["image"]); ?>" alt="user" width="200px" height="200px"/>
                                            <h3><?php echo $rowSql["name"].""; ?> <?php echo $rowSql["lastname"]; ?></h3>
                                            <h6> CITY : <?php echo $rowSql["city"]; ?></h6>
                                            <p>Age : <?php echo $rowSql["age"]; ?></p>
                                            <p>Date: <?php echo $rowSql["datebirth"]; ?></p>
                                            
                                            <div class="buttons">
                                                <button class="primary">
                                                    Message
                                                </button>
                                                <button class="primary ghost">
                                                    Following
                                                </button>
                                            </div>
                                            <div class="skills">
                                                <h6>hobbies</h6>
                                                <ul>
                                                    <li><?php echo $rowSql["hobbies"]; ?></li>
                                                    <li><?php echo $rowSql["hobbiessecond"]; ?></li>
                                                    <li>In progress</li>
                                                    <li>In progress</li>
                                                    <li>In progress</li>
                                                    <li>In progress</li>
                                                    <li>In progress</li>
                                                </ul>
	                            </div>
</div>


                                    

                                </div>
                                </section>
                                   
                        

        <?php } ?>

                 </div>
            <!--main container end-->
        </div>
        <footer>
	<p>
		 By
		<a target="_blank" href="Marlon.valencia">Marlon valencia</a>
		
	</p>
</footer>
        <!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>
        <!-- Swiper JS -->
        
 

    </body>
</html>
      


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<title>Title</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php 
 
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "mymeetic";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}


if (!isset($_POST['chercher'])){$_POST['chercher'] = '';}
if (!isset($_POST['findgenre'])){$_POST['findgenre'] = '';}
if (!isset($_POST["orden"])){$_POST["orden"] = '';}


?>




<div class="container mt-5">
    <div class="col-12">
 


    <div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

        <h4 class="card-title">finder</h4>


<form id="form2" name="form2" method="POST" >
        <div class="col-12 row">

            <div class="mb-3">
                    <label  class="form-label">Title to find</label>
                    
                    <select onchange="this.form.submit()" id="assigned-tutor-filter" id="findgenre" name="cherhcer" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["chercher"] != ''){ ?>
                                                                <option  value="<?php echo $_POST["findgenre"]; ?>"><?php echo $_POST["chercher"]; ?></option>
                                                                <?php } ?>
                                                                <option value="Games">Todos</option>
                                                                <option value="Games">Autre</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Male">Male</option>
                                                        </select>
            </div>

            <h4 class="card-title">Filtre find</h4>  
            
            <div class="col-11">

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                        Genre
                                                        <select onchange="this.form.submit()" id="assigned-tutor-filter" id="findgenre" name="findgenre" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["findgenre"] != ''){ ?>
                                                                <option  value="<?php echo $_POST["findgenre"]; ?>"><?php echo $_POST["findgenre"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <option value="Autre">Autre</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Male">Male</option>
                                                        </select>
                                                </th>
                                                
                                                </th>
                                        </tr>
                                </thead>
                        </table>

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                        number per page
                                                        <select  onchange="this.form.submit()" id="assigned-tutor-filter" id="numperpage" name="numperpage" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["numperpage"] != ''){ ?>
                                                                <option  value="<?php echo $_POST["numperpage"]; ?>"><?php echo $_POST["numperpage"]; ?></option>
                                                                <?php } ?>
                                                                <option value="200" selected>200</option>
                                                                <option value="100">100</option>
                                                                <option value="150">150</option>
                                                                <option value="300">300</option>
                                                                <option value="400">400</option>
                                                              
                                                        </select>
                                                </th>
                                                
                                                </th>
                                        </tr>
                                </thead>
                        </table>
                </div>

            
            

                
        </div>


        <?php 
        /*FILTRO de busqueda////////////////////////////////////////////*/
        if (!isset($_GET['page'])) {
                $page = 1;
        } else {
                $page = $_GET['page'];
        } 
          // define how many results you want per page
          
         
         if(isset($_POST['numperpage']))
         {
                $results_per_page = $_POST['numperpage'];
         }
         else
         {
                $results_per_page = 200;
         }
          
          
         // determine which page number visitor is currently on

         
         // determine the sql LIMIT starting number for the results on the displaying page
        $this_page_first_result = ($page-1)*$results_per_page;

         

                                                                  

        if ($_POST['chercher'] == ''){ $_POST['chercher'] = ' ';}
        $aKeyword = explode(" ", $_POST['chercher']);
       
        if ($_POST["chercher"] == '' AND $_POST['findgenre'] == ''){ 
                // i try here but dont work to just display 200 per page
                $query ="SELECT * FROM users "; 
        }else{

                //  if i put here the limit i have a problem nothing works 
                $query ="SELECT * FROM users ";

                if ($_POST["chercher"] != '' ){ 
                        $query .= " WHERE (hobbies LIKE LOWER('%".$aKeyword[0]."%')) ";
                
                        for($i = 1; $i < count($aKeyword); $i++) {
                                if(!empty($aKeyword[$i])) {
                                        $query .= " OR genre LIKE '%" . $aKeyword[$i] . "%' OR title LIKE '%" . $aKeyword[$i] . "%'  ";
                                        echo $query;
                                }
                        }
                }

         if ($_POST["findgenre"] != '' ){
                $query .= " AND genre = '".$_POST['findgenre']."'";
                echo $query;
         }
               
        }
       
        global $numeroSql;
        $sqli = $conexion->query($query);
         $sql = $conexion->query($query.=" LIMIT  $this_page_first_result,$results_per_page");
         echo $query;
         $numeroSqli = mysqli_num_rows($sqli);
         $numeroSql = mysqli_num_rows($sql);
         // determine number of total pages available ?
         $number_of_pages = ceil($numeroSqli/$results_per_page);
         
         
        

        ?>
        <p style="font-weight: bold; color:purple;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
</form>


<div class="table-responsive">
        <table class="table">
                <thead>
                        <tr style="background-color:purple; color:#FFFFFF;">
                                <th style=" text-align: center;"> Genre </th>
                                <th style=" text-align: center;"> Title</th>
                                <th style=" text-align: center;"> ?</th>
                                <th style=" text-align: center;"> ? </th>
                                <th style=" text-align: center;"> ?</th>
                        </tr>
                </thead>
                <tbody>
                <?php While($rowSql = $sql->fetch_assoc()) {   ?>
               
                        <tr>
                        <td style="text-align: center;"><?php echo $rowSql["name"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["lastname"]; ?></td>
                        
                        </tr>
               
               <?php } ?>
               <?php
                // display the links to the pages
        for ($page=1;$page<=$number_of_pages;$page++) {
                echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
        }?>
                </tbody>
        </table>
</div>


</div>
</div>
</div>
</div>


    </div>
</div>







</body>
</html>
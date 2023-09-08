<?php
include_once('../../app/func/user_model.php');
$conec= new Database();
$conection=$conec->connect();

$query = "SELECT *, TIMESTAMPDIFF(YEAR, `datebirth`, CURDATE()) AS `age` FROM `users` WHERE ";
// $query = "SELECT * FROM users WHERE ";
$params = [];
if (isset($_POST['gender']) && in_array($_POST['gender'], ['Autre','Female','Male'])) {
  $params[] = "`gender` = '".$_POST['gender']."'";
}
if (isset($_POST['city']) && in_array($_POST['city'], ['Marseille','Lyon','Paris'])) {
        $params[] = "`city` = '".$_POST['city']."'";
      }
if (isset($_POST['hobbies']) && in_array($_POST['hobbies'], ['Games','Read','Sport'])) {
        $params[] = "`hobbies` = '".$_POST['hobbies']."'";
      }
 if (isset($_POST['hobbiessecond']) && in_array($_POST['hobbiessecond'], ['Dance','Music','Photographie'])) {
        $params[] = "`hobbiessecond` = '".$_POST['hobbiessecond']."'";
      }
      if (isset($_POST['age'])) {
        switch ($_POST['age']) {
          case '18': // 18-25
            $params[] = "`age` >= 18 AND `age` <= 25";
            break;
          case '25': // 25-35
            $params[] = "`age` >= 25 AND `age` <= 35";
            break;
          case '35': // 35-45
            $params[] = "`age` >= 35 AND `age` <= 45";
            break;
          case '45': // 45+
            $params[] = "`age` >= 45";
            break;
          }
      }
      
$query .= (!empty($params) ? implode(' AND ', $params) : 1);

$sqli = $conection->query($query);


?>


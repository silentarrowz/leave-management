<html>
<body>



<?php
include 'config.php';
$db = new Config();
$con = $db->db_connect();


$username = $_POST['name'];
$password = $_POST['password'];
$sql = "select * from employee where name ='{$username}' and password ='{$password}'";
$result = mysqli_query($con, $sql);
if(!$result){
     die('Error '. mysqli_error($con));
}else{
   if(mysqli_num_rows($result)){
        echo 'you have successfully logged in '.$username  ;
    
                       
   }
}
//echo $username;

?>


</body>
</html>
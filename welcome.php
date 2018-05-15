<html>
<body>



<?php
include 'config.php';
$db = new Config();
$con = $db->db_connect();


$username = $_POST['name'];
$password = $_POST['password'];
$sql = "select * from admin where username ='{$username}' and password ='{$password}'";
$result = mysqli_query($con, $sql);
if(!$result){
     die('Error '. mysqli_error($con));
}else{
   if(mysqli_num_rows($result)){
      //  echo mysqli_num_rows($result);
      $insert_employee = "INSERT INTO employee (name,email,password)
                          VALUES ('faraz','faraz.ahmed@teks.co.in',1234)";
      $insert_result = mysqli_query($con,$insert_employee);
      if(!$insert_result){
          die('Error '. mysqli_error($con));
      }else{
          echo 'employee created';
          $msg = "Your username is faraz and your password is 1234 ";
          mail("faraz.ahmed@teks.co.in","My subject",$msg);
      }                    
   }
}
echo $username;
echo $password;
?>


</body>
</html>
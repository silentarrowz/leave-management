<?php



class Config {
      
     function db_connect() {
       $servername = "localhost";
       $databasename = "demo";
       $username = "root";
       $password = "";

        $con = mysqli_connect($servername,$username,$password);
        if(!$con){
          die('Error: '. mysqli_error($con));
        }else{
          mysqli_select_db($con,$databasename);
        }

       return $con;

     }
      
   }

   ?>
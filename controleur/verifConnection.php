<?php
session_start();
        if(isset($_POST['name']) AND isset($_POST['password'])){
            $name =htmlspecialchars($_POST['name']);
            $password =sha1($_POST['password']);



            include '../modele/connection_sql.php';
            include '../modele/verifConnection.php';


          $req =  verifConnection(  $name,$password);

          if(!$req -> fetch()) {



            header('Location:../index.php');
          }
         else  {

         		# code...
         $_SESSION['name'] =$name;
         $_SESSION['password']= $password;


        header('Location:../index.php');

        }

//         return $req;
}
 ?>

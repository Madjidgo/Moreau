
<?php
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=Moreau;charset=utf8', 'phpmyadmin', 'maD24101975');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}
function paswword(){
if(isset($_POST['submit']))
{


if(!empty($_POST['name']) AND !empty($_POST['lastname']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND (!empty($_POST['email'])
))
{
  $name =htmlspecialchars($_POST['name']);
  $lastname=htmlspecialchars($_POST['lastname']);
  $password = sha1($_POST['password']);
  $password2 = sha1($_POST['password2']);
  $email =htmlspecialchars($_POST['email']);
}
// return password;

// verification password

  include 'vue/login.php' ;
if($password == $password2)
 {

  $req = $bdd->prepare("INSERT INTO admin (name, lastname, password, email) VALUES (:name,:lastname,:password,:email)");
  $req->execute(array(
    'name' => $name,
    'lastname' => $lastname,
    'password' => $password,
    'email' => $email
  ));

  $_SESSION ['name'] = $name;
header('Location: index.php');


}
else {
$erreur = 'Verifier vos infos';
  if(isset($erreur))
  {

      echo $erreur;
  }

}

}
}

 ?>



        <!-- end footer -->

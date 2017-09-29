<?php

function verifConnection($name,$password){
  $bdd = connectSql();
$req = $bdd->prepare('SELECT * FROM admin WHERE name = :name AND password = :password' );

  $req->execute(array(
                      'name' => $name,
                      'password' => $password

  ));
  return $req;
}
?>

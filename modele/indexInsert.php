<?php

  function projet($name,$password){
    $bdd = connectSql();
  $req = $bdd->prepare('SELECT * FROM Priority_tasks WHERE projet = :projet AND password = :password' );

    $req->execute(array(
                        'name' => $name,
                        'password' => $password

    ));
    return $req;
  }



 ?>

<?php
function connectSql(){
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=Moreau;charset=utf8', 'phpmyadmin', 'maD24101975' ,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}
return $bdd;
}
?>

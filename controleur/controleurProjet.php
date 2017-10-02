<?php
require_once 'modele/connection_sql.php';
require_once 'modele/modeleProjet.php';
$admin_id= $_POST['admin_id'];
$projet = $_POST['projet'];


// verif
if(isset($_POST['admin_id'], $_POST['projet']) AND
 !empty($_POST['admin_id']) AND !empty($_POST['projet']))
{


insertProjet($admin_id,$projet);


}

// afficheProjet.php
	$req2 = getProjet();
require_once('vue/afficheProjet.php');

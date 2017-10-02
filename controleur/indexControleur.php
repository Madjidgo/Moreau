<?php
if(isset($_GET['section']) && $_GET['section'] == "connexions"){
  include 'vue/login.php';
} else if(isset($_POST['projet'])){ 

include 'controleur/controleurProjet.php';
} else {

if(!isset($_SESSION['name'])){
include 'vue/vueIndex.php';
}
else {
include'vue/vueProjet.php';
}

}



 ?>

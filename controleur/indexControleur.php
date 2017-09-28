<?php
if(isset($_GET['section']) && $_GET['section'] == "connexions"){
  include 'connection.php';
} else {

if(!isset($_SESSION['name'])){
include 'vue/vueIndex.php';
}
else {
echo "connecté";
}

}



 ?>

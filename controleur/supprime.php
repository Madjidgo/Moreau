 <?php  
if(isset($_POST['id'])){
	echo $_POST['id'];
}
header('Location: indexControleur.php');
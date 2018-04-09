<?php
	session_start();
?>


<?php
require ('model.php');
$login=$_POST['username'];
$mdp=$_POST['pass'];  
$connection = getConnection();
$getadmin = get_Admin( $connection, ' where nom='.$login.' and mdp='.$mdp.'');
if(sizeof($getadmin)==1){
	header ("Location: index.php?erreur=1");
	echo $login;
	echo $mdp;
}
else{
	header ("Location: tables.php");
}
?>
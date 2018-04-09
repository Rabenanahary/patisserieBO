<?php
require ('model.php');
$id=$_GET['id']; 
$re=$_POST['recette'];
update_gateauByid('Recette' , $re, $id);
	header ("Location: tables.php");
?>
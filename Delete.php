<?php
require ('model.php');
$id=$_GET['id']; 
delete_gateauByid($id);
	header ("Location: tables.php");
?>
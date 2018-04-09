<?php
    require('model.php');

    $file_path = "images/";
    $file_path0 = $file_path . basename($_FILES['fileToUpload']['name']);

    $img = $file_path.$_FILES['fileToUpload']['name'];
	$nom=$_POST["noms"];
	$recette=$_POST["recette"];
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$file_path0))
    {
			insert(getConnection(),$nom,$img,$recette);
            echo("uploaded successfull");
            header ("Location: tables.php");
    }
?>
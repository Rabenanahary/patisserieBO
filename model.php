<?php

header('Content-Type: text/html; charset=utf-8');
    function getConnection() {
        $connection;
        $PARAM_hote='mysql-patisseriegateau.alwaysdata.net';
        $PARAM_port='3306';
        $bdd='patisseriegateau_bdd';
        $PARAM_utilisateur='157052';
        $PARAM_mot_passe='aikokaloina';

        try {
            
            $connection = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$bdd, $PARAM_utilisateur, $PARAM_mot_passe);
            
        } catch(Exception $e) {

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'Numéro : '.$e->getCode();

        }
        return $connection;
    }

    function getGateau($connection, $critere) {
        $req = "SELECT * FROM Gateau";
        if($critere != null) {
            $req = $req . " WHERE " . $critere;
        }
        $prep = $connection->prepare($req);
		$prep->execute();
        $resultat = $prep->fetchAll();
		return $resultat;
    }  



 function insert($connection,$nom,$image,$recette)
    {

	$url ="insert into  gateau (nom,image,recette) values ('".$nom."','".$image."','".$recette."')";
        $requete_prepare_1=$connection->prepare($url); 
		echo $url;// on prépare notre requête
        $requete_prepare_1->execute();

    }
	
function delete_gateauByid($id)
	{
		$connexion = getConnection();
		$url ="DELETE from gateau WHERE idGat=".$id;
		$requete_prepare_1=$connexion->prepare($url); // on prépare notre requête
		echo $url;
		$requete_prepare_1->execute();
	}
	
function update_gateauByid($colonne,$valeur, $id)
	{
		$connexion = getConnection();
		$url = "UPDATE gateau SET ".$colonne." = '".$valeur."'  WHERE idGat=".$id;
		$requete_prepare_1=$connexion->prepare($url); // on prépare notre requête
		echo $url;
		$requete_prepare_1->execute();
	}
	
	/*function splitter($description){
	
		
		$newphrase =  str_replace(array(" ", "'", '"'), "-", $description);
		return $newphrase;
	}*/

	function get_Admin($connection, $critere) {
        $req = "SELECT * FROM Admin";
        if($critere != null) {
            $req = $req." WHERE ".$critere;
        }
        $prep = $connection->prepare($req);
		$prep->execute();
        $resultat = $prep->fetchAll();
		return $resultat;
    }  


?>
<?php 
    session_start();
    require_once("../bd/connexion.php"); // Connexion à la BD

    $jour = date("d");
	$m = date("m");
	$y = date("Y");
	$h = date("H");

	$heures = $h + 1;
	$min = date("i");

    $statut = $_SESSION['newEtat'];
    echo $statut;

    if ($statut){
       $requete = "insert into newDate(jourD, moisD, anneeD, heureD, minuteD) values(?,?,?,?,?)";
       $param = array($jour, $m, $y, $heures, $min);
       $result = $pdo->prepare($requete);
       $result->execute($param);

       header("Location: ../views/stagiairesRecommandes.php");
    }
?>
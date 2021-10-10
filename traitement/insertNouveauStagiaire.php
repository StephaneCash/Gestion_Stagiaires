

<?php 
    //  require_once("../views/identifier.php");
    require_once("../bd/connexion.php"); // Connexion à la BD
    
    // Verification des données 

    $jour = date("d");
	$m = date("m");
	$y = date("Y");
	$h = date("H");

	$heures = $h + 1;
	$min = date("i");

    $nomS = isset($_POST['nomS'])?$_POST['nomS']:"";
    $postnomS = isset($_POST['postnomS'])?$_POST['postnomS']:"";
    $prenomS = isset($_POST['prenomS'])?$_POST['prenomS']:"";
    $sexe = isset($_POST['sexeS'])?$_POST['sexeS']:"";
    $niveau = isset($_POST['niveau'])?$_POST['niveau']:"";
    $filiere = isset($_POST['idF'])?$_POST['idF']:"";
    $entreprise = isset($_POST['idE'])?$_POST['idE']:"";
    $section = isset($_POST['section'])?$_POST['section']:"";

    $fiche = isset($_FILES['fiche']['name'])?$_FILES['fiche']['name']:"";
    $imageTem = $_FILES['fiche']['tmp_name'];
    move_uploaded_file($imageTem,"../Images/".$fiche); 

    //echo $nomS ."<br>" .$postnomS . "<br>" .$prenomS ."<br>" .$sexe ."<br>" .$niveau ."<br>" .$filiere ."<br>" .$entreprise ."<br>" .$section . "<br>" .$fiche;

    $requeteS = "insert into stagiaire(nomS, postnomS,prenomS, sexeS,idF, idE, fiche, jour, mois, annee, heure, minute) values(?,?,?,?,?,?,?,?,?,?,?,?)";
    $reqfil = "insert into filiere(section, niveau) values(?,?)";

    $param = array($nomS, $postnomS, $prenomS,$sexe, $filiere, $entreprise, $fiche, $jour, $m, $y, $heures, $min);
    $resultat = $pdo->prepare($requeteS);
    $resultat->execute($param);


    header('location: ../views/stage.php');

?>
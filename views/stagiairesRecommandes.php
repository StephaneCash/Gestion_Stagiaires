<?php
require_once "identifier.php";
require_once "../bd/connexion.php"; // Connexion à la BD

$nomS = isset($_GET['nomS']) ? $_GET['nomS'] : "";

$size = isset($_GET['size']) ? $_GET['size'] : 8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $size;

$recupereeDataStagTraites = "SELECT count(*) countData FROM resultat"; // Recuperation data traites
//echo $recupereeDataStagTraites;

$requeDataTraites = $pdo->query($recupereeDataStagTraites);
$dataTraites = $requeDataTraites->fetch();
$nbrDataTraites = $dataTraites['countData'];

// Vérification sur le choix de niveau de filière
if ($nomS == $nomS) {
    // Exécution de la requete
    $requete = "select idS, nomS, postnomS, prenomS, nomF, sexeS, section, niveau, nomE,fiche,status
                  from filiere as f, stagiaire as s, entreprise as e
                  where f.idF = s.idF and e.idE = s.idE
                  and (nomS like '%$nomS%'  or postnomS like '%$nomS%' )
                  order by idS
                  limit $size
                  offset $offset";
    
}
$requeteCount = "select count(*) countS from stagiaire where nomS like '%$nomS%'";

//Requete de count pour les stagiaires rejetés
$requeteCountRejete = "select count(*) countR from stagiaire where status=1";

$requeRejet = $pdo->query($requeteCountRejete);
$tabCountRej = $requeRejet->fetch();
$nbrRej = $tabCountRej['countR'];

$requeteCountEnAttente = "select count(*) countR from stagiaire where status=0";

$requeEnAttente = $pdo->query($requeteCountEnAttente);
$tabCountAttente = $requeEnAttente->fetch();
$nbrAttente = $tabCountAttente['countR'];

$requeteCountA = "select count(*) countA from stagiaire where status=2";

$requeAp = $pdo->query($requeteCountA);
$tabCountA = $requeAp->fetch();
$nbrApp = $tabCountA['countA'];


$resultatF = $pdo->query($requete); // Exécution de la requete

$resultatCount = $pdo->query($requeteCount);
$tabCount = $resultatCount->fetch();
$nbrFiliere = $tabCount['countS'];
$reste = $nbrFiliere % $size;

if ($reste == 0) {
    $nbrPage = $nbrFiliere / $size;
} else {
    $nbrPage = floor($nbrFiliere / $size) + 1;
}

?>

<! DOCTYPE HTML>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Gestion Stagiaires(Entreprise)</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/Filiere.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    </head>

    <style>
    .divGeneral {
        width: 100%;
        display: block;
    }

    .div1,
    .div2,
    .div3,
    .div4 {
        height: 55px;
        width: auto;
        border-radius: 5px;
        display: inline-block;
        vertical-align: top;
        margin-bottom: 20px;
        color: white;
        padding: 9px;
        font-size: 20px;
    }

    .div1 {
        background-color: #2b77ba;
    }

    .div2 {
        border: 1px solid red;
        background-color: red;
        margin-left: 10px;
    }

    .div3 {
        border: 1px solid green;
        margin-left: 10px;
        background-color: green;
    }

    .div4 {
        border: 1px solid #de8811;
        margin-left: 10px;
        background-color: #de8811;
    }

    table thead {
        background-color: #32475c;
        color: white;
    }

    table {
        font-family: Segoe UI;
        font-size: 17px;
    }
    </style>

    <body>

        <!-- Insertion de la page menu -->
        <?php include "menu.php"?>

        <div class="container-fluid">
            <div class="row">

                <!-- Premier block composé d'entête et du corps (Côté recherche) -->

                <div class="panel panel" style="margin-top: 60px; border:1px solid silver">
                    <div class="panel-heading" style="background-color:#32475c; color:aliceblue; font-family: Segoe UI; font-size:17px">Recherche des
                        stagiaires... </div>
                    <div class="panel-body">
                        <!-- partie corps coté champ text (Taper le nom de la filière) -->
                        <form method="get" action="stagiairesRecommandes.php" class="form-inline">
                            <div class="form-group">
                                <input type="search" name="nomS" placeholder="Taper le nom du stagiaire" style="padding: 17px;"
                                    class="form-control" value="<?php echo $nomS; ?>">
                            </div>

                            <!-- Bouton de recherche -->
                            &nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn"
                                style="background: #32475c; color:white; width: 13% !important; font-family: Segoe UI; font-size:17px">
                                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-search"> </span>&nbsp;&nbsp;
                                Rechercher...
                            </button>

                            <a href="ResultatStagiaire.php"
                                style='float : right; border : 1px solid silver; height : 40px;  width:33% !important; text-decoration: none;
                                padding: 10px;color:white; text-align:center; border-radius : 4px; background: #32475c; font-family: Segoe UI; font-size:17px;line-height: 20px;'>
                                <span class="fa fa-plus-square"> </span> Insérer les résultats du nouveau Stagiaire
                            </a>
                        </form>
                    </div>
                </div>

                <!-- Deuxième block composé d'entête et du corps (Côté affichage filière) -->
                <div class="panel panel" style="border:1px solid silver; margin-top:0px">
                    <p></p>
                    <div class="panel-heading" </div>
                        <div class="panel-body">

                            <!-- Début du tableau -->
                            <h3 style="margin-top: -12px"> <i class="fa fa-dashboard"></i> Dashboard </h3>
                            
                            <div class="div1">
                                <table>
                                    <tr>
                                        <td style="color: white; font-size: 25px;" class="td1">
                                            <?php if($nbrFiliere > 1){ echo $nbrFiliere . " reçus ";}else{ echo $nbrFiliere . ' reçu'; } ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="div2">
                                <table>
                                    <tr>
                                        <td style="color: white; font-size: 25px;" class="td1">
                                            <?php if($nbrRej > 1){ echo $nbrRej . " rejetés ";}else{ echo $nbrRej . ' rejeté'; } ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="div3">
                                <table>
                                    <tr>
                                        <td style="color: white; font-size: 25px;" class="td1">
                                            <?php if($nbrApp > 1){ echo $nbrApp . " approuvés ";}else{ echo $nbrApp . ' approuvé'; } ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="div4">
                                <?php 
                                    $enAttente ="<i class='fa fa-spinner fa-spin fa-3x fa-fw '  title='En attente' style='color:orange;'></i>"
                                ?>
                                <table>
                                    <tr>
                                        <td style="color: white; font-size: 25px;" class="td1">
                                            <?php if($nbrApp > 1){ echo $nbrAttente . " En attente... ";}else{ echo $nbrAttente . ' En attente...'; } ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <table class="table table-striped table-bordered">
                                <!-- Partie entête du tableau -->
                                <thead>
                                    <tr>
                                        <th style="width:auto;">Id Stagiaire</th>
                                        <th>Nom et Postnom</th>
                                        <th>Faculté</th>
                                        <th>Niveau et Section</th>
                                        <th>Fiche</th>
                                        <th style="width:260px">Décision</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Instruction pour afficher le résultat ds le tableau (Partie body) -->
                                    <?php while ($filiere = $resultatF->fetch()) {?>
                                    <tr>
                                        <td><?php echo $filiere['idS'] ?></td>
                                        <td><?php echo $filiere['nomS'] . ' ' . $filiere['postnomS'] ?></td>
                                        <td><?php echo $filiere['nomF'] ?></td>
                                        <td><?php echo $filiere['niveau'] . ', ' . $filiere['section'] ?></td>
                                        <td>
                                            <div class="form">
                                                <a href="<?php echo "../Images/" . $filiere['fiche'] ?>" download>
                                                    <input class="btn btn" type="button" name="fiche"
                                                        value="Télécharger"
                                                        style="background:#32475c; color:white; height:33px"></a> &nbsp;
                                                <?php echo $filiere['fiche'] ?>
                                            </div>
                                        </td>

                                        <?php if ($filiere["status"] == 0) {?>
                                        <td>
                                            <a onclick="return confirm('Etes-vous sûr de vouloir accepter ce stagiaire ?')"
                                                href="../traitement/activerStagiaire.php?idS=<?php echo $filiere['idS'] ?>&status=<?php echo 2  ?>">
                                                <button
                                                    style="width:100px; background-color: #2b77ba; color:aliceblue;">Accepter</button>
                                            </a>
                                            <a onclick="return confirm('Etes-vous sûr de vouloir rejeter ce stagiaire ?')"
                                                href="../traitement/activerStagiaire.php?idS=<?php echo $filiere['idS']?>&status=<?php echo 1  ?>">
                                                <button
                                                    style="width:100px; background-color: #b30b00; color:aliceblue">Rejeter</button>
                                            </a>
                                        </td>

                                        <?php }?>

                                        <?php if($filiere['status'] ==2){?>
                                        <td style="color:green"> <i class="fa fa-check"></i>Approuvé</td>
                                        <?php } ?>

                                        <?php if($filiere['status'] ==1){?>
                                        <td style="color:red"><i class="fa fa-close"></i> Rejeté</td>
                                        <?php } ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>

                            <div>
                                <!-- Partie pagination -->
                                <ul class="pagination pagination-md">
                                    <?php for ($i = 1; $i <= $nbrPage; $i++) {?>
                                    <li class="<?php if ($i == $page) {
                                 echo 'active';
                                    }
                                    ?>">
                                        <a
                                            href="stagiairesRecommandes.php?page=<?php echo $i; ?>&nomS=<?php echo $nomS ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>
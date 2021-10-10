<?php 
    require_once('identifier.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Home.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Entreprise</title>
</head>

<style>
.img {
    background-image: url("../photos/bur.jpg");
    border: 1px solid silver;
    height: 60vh;
}

.img h1 {
    color: black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
}

.bloc {
    border: 1px solid silver;
    height: 30vh;
    overflow: scroll;
    background-color: #222222;
    color: silver;
    padding: 5px;
}
</style>

<body>
    <?php include('menu.php') ?>

    <div class="img" style="margin-top:72px;">
        <h1 style="margin-left:26%">BIENVENU(E)S DANS NOTRE ENTREPRISE</h1>
        <div class="container col-md-12" style="margin-top:234px">
            <div class="row">
                <div class="col-md-3" style="background-color:black; height:40px; line-height: 40px; text-align:center; color:aliceblue; cursor:pointer">QUI SOMMES-NOUS</div>
                <div class="col-md-3"> <button class="btn btn-primary" style="width:100%; height:40px">NOS PRODUITS</button></div>
                <div class="col-md-3"> <button class="btn btn-primary" style="width:100%; height:40px">More information</button></div>
                <div class="col-md-3"> <button class="btn btn-primary" style="width:100%; height:40px">More information</button></div>
            </div>
        </div>
    </div>
    <div class=" col-md-12">
        <div class="row">
            <div class="col-md-4 bloc">
                <i class="fa fa-users fa-5x " style="margin-left:47%"></i>
                <div>
                    Lorem loremUne importante distinction entre le système d’exploitation et un quelconque logiciel est
                    que, par exemple, si un utilisateur n’aime pas un certain gestionnaire de courrier électronique, il
                    peut librement en choisir un autre, voire en écrire un lui-même ; en revanche, il ne peut pas écrire
                    son propre gestionnaire d’interruption d’horloge qui est partie prenante du SE et qui est protégé
                    par le matériel contre toute tentative de modification externe.
                    Cette distinction est assez vague dans des systèmes embarqués ou enfouis (qui souvent ne disposent
                    pas d’un mode noyau) ou interprétées (comme les SE basés sur JAVA, qui fondent la séparation des
                    composants sur l’interprétation et non sur du matériel).
                </div>
            </div>
            <div class="col-md-4 bloc">
            <i class="fa fa-book fa-5x " style="margin-left:47%"></i>
                <div>
                    Lorem loremUne importante distinction entre le système d’exploitation et un quelconque logiciel est
                    que, par exemple, si un utilisateur n’aime pas un certain gestionnaire de courrier électronique, il
                    peut librement en choisir un autre, voire en écrire un lui-même ; en revanche, il ne peut pas écrire
                    son propre gestionnaire d’interruption d’horloge qui est partie prenante du SE et qui est protégé
                    par le matériel contre toute tentative de modification externe.
                    Cette distinction est assez vague dans des systèmes embarqués ou enfouis (qui souvent ne disposent
                    pas d’un mode noyau) ou interprétées (comme les SE basés sur JAVA, qui fondent la séparation des
                    composants sur l’interprétation et non sur du matériel).
                </div>
            </div>
            <div class="col-md-4 bloc">
            <i class="fa fa-car fa-5x " style="margin-left:47%"></i>
                <div>
                    Lorem loremUne importante distinction entre le système d’exploitation et un quelconque logiciel est
                    que, par exemple, si un utilisateur n’aime pas un certain gestionnaire de courrier électronique, il
                    peut librement en choisir un autre, voire en écrire un lui-même ; en revanche, il ne peut pas écrire
                    son propre gestionnaire d’interruption d’horloge qui est partie prenante du SE et qui est protégé
                    par le matériel contre toute tentative de modification externe.
                    Cette distinction est assez vague dans des systèmes embarqués ou enfouis (qui souvent ne disposent
                    pas d’un mode noyau) ou interprétées (comme les SE basés sur JAVA, qui fondent la séparation des
                    composants sur l’interprétation et non sur du matériel).
                </div>
            </div>
        </div>
    </div>
</body>

</html>
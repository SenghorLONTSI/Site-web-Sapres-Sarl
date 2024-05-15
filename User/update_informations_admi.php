<?php
    //on démarre la session php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profil.css">
    <?php
    require_once("header.php");
    ?>
</head>
<body>
    <div   >
        <a href="user_admi.php"> Accueil</a>
    </div>
    <div  class="deco" >
        <a href="déconnexion"> Se déconnecter</a>
    </div>

    <div class="pp">
    <h1> Profil de <i><?=$_SESSION["user"]["prenom"]?></i> </h1>
    <p>Email : <i><?=$_SESSION["user"]["mail"]?></i></p>
    <p>Nom : <i><?=$_SESSION["user"]["nom"]?> </i><a href="modif_nom.php">modifier</a></p>
    <p>prénom : <i><?=$_SESSION["user"]["prenom"]?> <a href="modif_prenom.php">modifier</a></i></p>
    <p>Rôle : <i><?=$_SESSION["user"]["role"]?></i></p> 
    <p>Mot de passe : <i>xxxx...</i><a href="modif_password.php">Modifier</a></p>
    </div>
    
    
</body>
</html>
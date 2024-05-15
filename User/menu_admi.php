<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/menu.css">
    <?php
        //include_once("time-out.php");
    ?>
    <title>Document</title>
</head>
<body>
    <div class="hearder">
        <nav class="nava">
            <ul class="menu">
                <li> <a href="profil_admi.php" rel="history" >Mes informations</a></li>
                <li> <a href="update_informations_admi.php">Modifier mes Informations</a></li>
                <li> <a href="../Admi/ajouter_user.php">Ajouter un employé </a></li>
                <li><a href="../Admi/delete_user.php ">Supprimer un utilisateur</a></li>
                <li><a href="../Admi/afficher_user.php">Liste des employés</a></li>
                <li> <a href="../Admi/modif_role.php">Modifier le rôle d'un employé</a></li>
            </ul>
            <form action="">
                <!-- <input type="search" name="recherche" placeholder="recherche"> -->
            </form>
        </nav>
    </div>
</body>
</html>
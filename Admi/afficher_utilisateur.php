<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="../CSS/affiche_tab_user.css">
    <link rel="stylesheet" href="../CSS/affiche_tab.css">
    <?php
    require_once("../User/header.php");
    ?>
    <style>
        .tab tr:hover{
		background: rgb(228, 17, 6);
	   
	}
    </style>
</head>
<body>
    <div>
        <a href="../User/user_admi.php">Accueil</a>
    </div>
    <div class="deco" >
        <a href="../User/déconnexion.php"> Se déconnecter</a>
    </div>
    
    <?php
        // on se connecte à la base
        require_once "../User/connexion_bd.php";
        



        $rol="utilisateur";

        //on écrit la requete
        $sql="SELECT * FROM  users WHERE role='$rol' ";

        //on prépare la requête 
        $result=$db->query($sql);
        if(!$result){
            echo "La récupération des données a rencontré un problème";
        }
        else{
            $nb_emp=$result->rowCount();
    ?>
            <?php
                include_once("../User/menu_admi_user.php");
            ?>
            <h1> Tous nos employés utilisateurs</h1>
            <h3>Il y'a <?=$nb_emp?> employés avec pour rôle simple utilisateur</h3>
            <div class="tab">
            <table border="2" role="table">
            <thead role="rowgroup">
                <tr role="row">
                    <th> Email</th>
                    <th> Nom</th>
                    <th> Prenom</th>
                    <th> Password</th>
                    <th> Rôle</th>
                    <th> Date d'arrivée</th>
                </tr>

                </thead>
                <?php
                while($ligne=$result->fetch(PDO::FETCH_NUM)){
                    echo"<tr role='row'>";
                    foreach($ligne as $valeur){
                        echo"<td>$valeur</td>";

                    }
                    echo "</tr>";
                }
                ?>

            </table>
            </div>
            
            <?php
            $result->closeCursor();
        }
?>
</body>
</html>
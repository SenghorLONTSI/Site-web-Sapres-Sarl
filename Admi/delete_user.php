<?php
            if(!empty($_POST)){
                // on vérifie que toutes les données sont présentes
               if( isset($_POST["mail"])&& !empty($_POST["mail"]))
                {
                //le formulaire est complet
                //on récupère les données en les protégeant
                //$mail=$_POST["mail"];
                
                if(!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)){
                    die("L'adresse email est incorrecte");
                }else{
                    $mail=$_POST["mail"];
                }

                // on peut les enregistrer
                // on se connecte à la base
                require_once "../User/connexion_bd.php";

                //on écrit la requete
                $sql="DELETE FROM  users WHERE mail='$mail'";

                //on prépare la requête 
                $query=$db->prepare($sql);
                

                //on injecte les valeurs
                //$query->bindValue(":mail",$mail,PDO::PARAM_STR);
                //$query->bindValue(":nom",$nom,PDO::PARAM_STR);
                //$query->bindValue(":prenom",$prenom,PDO::PARAM_STR);
                //$query->bindValue(":rol",$rol,PDO::PARAM_STR);
                //$query->bindValue(":pass",$pas,PDO::PARAM_STR);
                // on exécute la requête
                $query->execute();
                //die("une erreur est survenu");
                if($query){
                    die("L'utilisateur a bien été supprimé");
                }
                
    
                }
                else{
                die("le formulaire n'est pas complet !");
                }
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta type="description"content="Zorkzen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <link rel="stylesheet" href="../CSS/delete_user.css">
    <?php
    require_once("../User/header.php");
    ?>
</head>
<body class="bod">
    <div>
        <a href="../User/user_admi.php">Accueil</a>
    </div>
    <div class="deco" >
        <a href="../User/déconnexion.php"> Se déconnecter</a>
    </div>
    
    <div class="contener">
        
      
        
        <div class="acc">
        
            <div class="iden">
                <h4>Supprimer l'utilisateur</h4>
            </div>
            <div class="info_acc">
                <form method="post">
                    <h3>Mail de l'utilisateur à Supprimer <input type="email" placeholder="senghorguieto@gmail.com" name="mail" id="mail"></h3>
                    
                    <button type="submit">Supprimer</button>
                   
                </form>
                
            </div>
            <br>
            
            <?php
                //var_dump($_POST);
            ?>
        </div>
    </div>
    
    
</body>
</html>
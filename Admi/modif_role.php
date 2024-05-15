<?php
    //on démarre la session php
    session_start();
?>
<?php
            if(!empty($_POST)){
                // on vérifie que toutes les données sont présentes
               if( isset($_POST["rol"])  && !empty($_POST["rol"])&& isset($_POST["mail"])  && !empty($_POST["mail"]))
                {
                //le formulaire est complet
                //on récupère les données en les protégeant
                //$mail=$_POST["mail"];
                $role=strip_tags($_POST["rol"]);
                $mail=strip_tags($_POST["mail"]);

                // on peut les enregistrer
                // on se connecte à la base
                require_once "../User/connexion_bd.php";

                //on écrit la requete
                $sql="UPDATE   users
                SET role='$role'
                WHERE mail='$mail' ";

                //on prépare la requête 
                $query=$db->prepare($sql);
                
                // on exécute la requête
                $query->execute();
                //die("une erreur est survenu");
                if($query){
                    session_start();
                    header("Location: ../User/user_admi.php");
                }
    
                }else{
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

    <link rel="stylesheet" href="../CSS/modif.css">
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
                <h4>Modifier le rôle de l'employé</h4>
            </div>
            <div class="info_acc">
                <form method="post">
                
                <h3>Mail <input type="email" placeholder="senghorguieto@gmail.com" name="mail" id="mail"></h3>
                <h3>Rôle du User <select name="rol" id="rol">

                        <option value="administrateur"> Administrateur</option>
                        <option value="utilisateur"> Simple utilisteur</option>
                
                    </select></h3>
                    <button type="submit">Modifier</button>
                   
                </form>
                
            </div>
            <br>
            
           
        </div>
    </div>
    
    
</body>
</html>
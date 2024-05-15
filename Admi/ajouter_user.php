<?php
            if(!empty($_POST)){
                // on vérifie que toutes les données sont présentes
               if( isset($_POST["mail"],$_POST["nom"],$_POST["prenom"],$_POST["rol"],$_POST["password"])
               && !empty($_POST["mail"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["rol"]) && !empty($_POST["password"] ))
                {
                //le formulaire est complet
                //on récupère les données en les protégeant
                //$mail=$_POST["mail"];
                $nom=strip_tags($_POST["nom"]);
                $prenom=strip_tags($_POST["prenom"]);
                $rol=strip_tags($_POST["rol"]);
                $pas=password_hash($_POST['password'],PASSWORD_DEFAULT);
                if(!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)){
                    die("L'adresse email est incorrecte");
                }else{
                    $mail=$_POST["mail"];
                }

                // on peut les enregistrer
                // on se connecte à la base
                require_once "../User/connexion_bd.php";

                //on écrit la requete
                $sql="INSERT INTO  users(mail,nom,prenom,role,pass) 
                VALUES(:mail, :nom, :prenom, :rol, :pass)";

                //on prépare la requête 
                $query=$db->prepare($sql);
                

                //on injecte les valeurs
                $query->bindValue(":mail",$mail,PDO::PARAM_STR);
                $query->bindValue(":nom",$nom,PDO::PARAM_STR);
                $query->bindValue(":prenom",$prenom,PDO::PARAM_STR);
                $query->bindValue(":rol",$rol,PDO::PARAM_STR);
                $query->bindValue(":pass",$pas,PDO::PARAM_STR);
                // on exécute la requête
                $query->execute();
                //die("une erreur est survenu");
                if($query){
                    header("Location: afficher_user.php");
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

    <!-- <link rel="stylesheet" href="../CSS/ajouter_user.css"> -->
    <link rel="stylesheet" href="../CSS/new_user.css">
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
    <div class="container ">
        
        <!-- <div>
            <h2> Ajouter un employé</h2>
            
        </div> -->
        
        <div class="acc glass">
            <div class="iden">
                <h4>Information de l'utilisateur</h4>
            </div>
            <div class="info_acc">
                <form method="post">
                    <h3>Mail <input type="email" placeholder="senghorguieto@gmail.com" name="mail" id="mail"></h3>
                    <h3>Nom <input type="text" placeholder="Lontsi" name="nom" id="nom"></h3>
                    <h3>Prenom <input type="text" placeholder="senghor" name="prenom" id="prenom"></h3>
                    <h3>Rôle du User
                    <select name="rol" id="rol">
                        <option value="utilisateur"> Simple utilisteur</option>
                        <option value="administrateur"> Administrateur</option>
                    </select></h3>
                    <h3>Password    <input type="password" name="password" id="password"></h3>
                    <button type="submit">CREER L'UTILISATEUR</button>
                   
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
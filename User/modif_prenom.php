<?php
    //on démarre la session php
    session_start();
?>
<?php
if(!empty($_POST)){
    // on vérifie que toutes les données sont présentes
    if( isset($_POST["prenom"])  && !empty($_POST["prenom"]) )
    {
    //le formulaire est complet
    //on récupère les données en les protégeant
    //$mail=$_POST["mail"];
    $prenom=strip_tags($_POST["prenom"]);
    $mail=$_SESSION["user"]["mail"];

    // on peut les enregistrer
    // on se connecte à la base
    require_once "../User/connexion_bd.php";

    //on écrit la requete
    $sql="UPDATE   users
    SET prenom='$prenom'
    WHERE mail='$mail' ";

    //on prépare la requête 
    $query=$db->prepare($sql);
    
    // on exécute la requête
    $query->execute();
    //die("une erreur est survenu");
    if($query){
        session_start();
        header("Location: user.php");
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
    require_once("header.php");
    ?>
</head>
<body class="bod">
    <div class="deco" >
        <a href="../User/déconnexion.php"> Se déconnecter</a>
    </div>
    <div class="contener">
        
       
        <div class="acc">
            <div class="iden">
                <h4>Modifier mon Nom</h4>
            </div>
            <div class="info_acc">
                <form method="post">
                    <h3>mon nouveau prénom <input type="text" placeholder="Lontsi" name="prenom" id="prenom"></h3>
                    <button type="submit">Modifier</button>
                   
                </form>
                
            </div>
            <br>
            
           
        </div>
    </div>
    
    
</body>
</html>
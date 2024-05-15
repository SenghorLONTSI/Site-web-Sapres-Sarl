<?php
//on démarre la session php
    session_start();
if(!empty($_POST)){
    // on vérifie que toutes les données sont présentes
    if( isset($_POST["mail"],$_POST["password"])
    && !empty($_POST["mail"])  && !empty($_POST["password"] ))
    {
    //le formulaire est complet

    //$pass=password_hash($_POST["password"],PASSWORD_ARGON2ID);
    if(!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)){
        die("L'adresse email est incorrecte");
    }else{
        $mail=$_POST["mail"];
    }

    // on peut les enregistrer
    // on se connecte à la base
    require_once "../User/connexion_bd.php";

    //on écrit la requete
    $sql="SELECT * FROM  users WHERE mail=:mail"; 

    //on prépare la requête 
    $query=$db->prepare($sql);
    

    //on injecte les valeurs
    $query->bindValue(":mail",$mail,PDO::PARAM_STR);
    
    //$query->bindValue(":pass",$pass,PDO::PARAM_STR);
    // on exécute la requête
    $query->execute();
    //die("une erreur est survenu");
    $user=$query->fetch(PDO::FETCH_ASSOC);
    //var_dump($user);
    if(!$user){
        // die("L'utilisateur  n'existe pas !");
        include_once("mauvais_user.html");
    } 
    // ici on peut vérifier son mot de pass 
    //$a=1;
    $passHash=$user["pass"];
   // var_dump(password_verify($_POST["password"],$passHash));
    //var_dump($a,$b);
   if(password_verify($_POST["password"],$passHash)){
        //die("Connexion bonne");
        
        //var_dump($_SESSION);
        $_SESSION["user"]=[
            "mail"=>$user["mail"],
            "nom"=>$user["nom"],
            "prenom"=>$user["prenom"],
            "role"=>$user["role"]
        ];
        if($user["role"]==='administrateur'){
            header("Location: user_admi.php");
        }else{
            header("Location: user.php");
        }
    }else{
        //die("L'utilisateur et/ou le mot de passe n'existe pas !");
        include_once("mauvais_user.html");
       
    }
    // Ici l'utilisateur et mot de passe sont corrects
    //  On peut alors connecter l'utilisateur
    }else{
      
    die("le formulaire n'est pas complet !");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/index_acc.css" />
    <?php
    require_once("header.php");
    ?>
    
  </head>
  <body>
    
    <div class="container  glass">
        <form method="post">
      <!-- content-left -->
      <div class="content-left">
        <h2 class="title">S'identifier</h2>
        <div class="box">
          <input type="text" placeholder="Email" name="mail" id="mail" />
        </div>
        <div class="box">
          <input type="password" placeholder="Mot de passe" name="password" id="password" />
        </div>
        <div class="box">
         <input type="submit" value="Se Connecter" />
          <!-- <button type="submit">SE CONNECTER</button>-->
        </div>
        
      </div>
      <!-- content-right -->
      <div class="content-rignt ">
      
        <h1>Bienvenue !</h1>
        
        <div class="iden">
                <a href="Visiteur.php" target="_blank">JE SUIS UN VISITEUR</a>
      </div>
      </div>
      
      </form>
    </div>
   
  </body>
</html>
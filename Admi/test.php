<?php
    require_once "../HTML/connexion_bd.php";
    
    $sql="SELECT * FROM users ";
   //on exécute la requête
    $requete=$db->query($sql);
    //on récupère les données
    $user=$requete->fetchAll();

   /* echo"<pre>";
    var_dump($user);
    echo "</pre>";*/
    
    ?>
    <?php foreach($users as $user):?>
    <article>
        <h2><?=$user["mail"]?></h2>
    </article>
    <?php endforeach;?>   
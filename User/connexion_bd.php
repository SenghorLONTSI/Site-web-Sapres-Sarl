<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // constantes d'environnement
        define("DBHOST","localhost");
        define("DBUSER","root");
        define("DBPASS","");
        define("DBNAME","projet_web");

        //DSN de connexion
        $dsn="mysql:dbname=".DBNAME.";host=".DBHOST;
    
        //on se connecte à la base 
        try{
            $db = new PDO($dsn, DBUSER, DBPASS);
            //echo"on est connecté";
            // on s'assure d'envoyer les données en UTF8 
            $db->exec("SET NAMES utf8");

            //on définit la méthode de récuperation (fetch) des données
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die("Erreur: ". $e->getMessage());
        }
        // on est connecté à la base 
    ?>
</body>
</html>

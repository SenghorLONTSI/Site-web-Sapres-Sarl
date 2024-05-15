<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sapres_sarl_1.css">
    <?php
    require_once("header.php");
    ?>
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Sapres</span>Sarl</p>
        </div>
        <ul class="menu">
            <li><a href="#caroussel">Acceuil</a></li>
            <li><a href="#cars">Produits</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="login_btn"> <a href="index_acc.php">LOGIN</a></button>
       
    </header>
    <!-- section Acceuil -->
    <div class="publi">
    <?php
            // require_once("image_pub.php");
     ?>
    </div>
    
    <section id="home">
        <div class="left">
            <h1>Votre materiels <span>Solaires</span> chez Sapres Sarl</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque earum, totam laudantium dolor voluptatum fugiat. Odio doloribus nostrum harum corporis. Natus omnis deleniti reiciendis illum maxime necessitatibus accusantium esse.</p>
            <?php 
            // require_once("image_pub.php");
            ?>
        </div>
        <div class="right">
           
            <img src="../Sapres_image/5.jpg">
            
        </div>
    </section>




    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">Nos Produits</h1>
        <div class="images">
            <ul>
                <li class="car">
                    <div>
                        <img src="../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
                <li class="car">
                    <div>
                        <img src="../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
                 <li class="car">
                    <div>
                        <img src="../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
                 <li class="car">
                    <div>
                        <img src= "../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
                 <li class="car">
                    <div>
                        <img src= "../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
                 <li class="car">
                    <div>
                        <img src= "../Sapres_image/2.jpg" alt="">
                    </div>
                    <span>Lampe</span>
                 </li>
            </ul>
        </div>
    </section>

    <!-- section services -->

    <section id="services">
        <h1 class="section_title">Nos Services</h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Installation du materiel solaire</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Vente du materiel solaire</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Dépannage</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis illum natus iste, dicta maiores ipsam.</p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>
    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Nous Contacter</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15922.878221687399!2d11.525277128974931!3d3.870212942006622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf4fb5e5bc9d%3A0xfe7118b613f26645!2sSAPRES%20SARL!5e0!3m2!1sfr!2sfr!4v1714772948009!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p>Senghor LONTSI Copyright 2024 </p>
    </footer>

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>
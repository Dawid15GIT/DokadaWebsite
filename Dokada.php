<?php include "db_connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Jost&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOKADA</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <section id="home">
        <header>
            <a href="#home"><img class="logo" src="Source/Logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times"  onclick="hideMenu()"></i>
                <ul id="menu">
                    <!-- <li class="popout"><a href="#about"><img class="home-button" src="Source/O NAS- przycisk.png"></a></li> -->
                    <li class="popout"><a href="#services"><img class="home-button" src="Source/USŁUGI- przycisk.png"></a></li>
                    <li class="popout"><a href="#photos"><img class="home-button" src="Source/GALERIA- przycisk.png"></a></li>
                    <li class="popout"><a href="#knowledge"><img class="home-button" src="Source/WIEDZA- przycisk.png"></a></li>
                    <li class="popout"><a href="#contact"><img class = "icon-small" src="Source/Słuchawka_IKONA.png"></a></li>
                </ul>
            </div>
            <i class="fa fa-bars"  onclick="showMenu()"></i>
        </header>   

        <img class="background">
        <div class="bcg-logo">
        <img class="logo-1" src="Source/KNX img.png"> 
            <div class="small-logos">
                <img class="logo-2" src="Source/Martex.png"> 
                <img class="logo-3" src="Source/Hilti.png">
                <img class="logo-4" src="Source/Bosh.png"> 
            </div>
        </div>
        <h1 class="text-1">W ELEKTRYCE <br> OD PONAD 20 LAT</h1>   
    </section>
\-
    <section id="services">
    <div class="xyz">
        <div class="services-text">
            <h1>USŁUGI</h1>
            <p>czyli jak możemy wam </br>pomóc</p>
        </div>
        <div class="Services-TOPROW">
            <ul>
                <li class="element-color-grey">
                    <img src="Source/Light-icon.png">
                    <p>Oświetlenie</p>
                </li>
                <li class="element-color-blue">
                    <img src="Source/Camera-icon.png">
                    <p>Monitoring</p>
                </li>
            </ul>
        </div>
        <div class="Services-BOTROW">
            <ul>
                <li class="element-color-blue">
                    <img src="Source/Intelligent-icon.png">
                    <p>Automatyzacja</p>
                </li>
                <li class="element-color-grey">
                    <img src="Source/Solar-icon.png">
                    <p>Fotowoltaika</p>
                </li>
                <li class="element-color-grey">
                    <img src="Source/AC-icon.png">
                    <p>Klimatyzacja</p>
                </li>
            </ul>
        </div>
    </div>
    </section>

    <section id="photos">
        <div class="photos-background">
            <h1 class="photos-top-text">NASZE </br> PRACE</h1>
            <h3 class="photos-bot-text">DOŚWIADCZENIE</h3>
        </div>

        <div class="row">
            <div>
                <?php 
                $x = rand(1, 3);
                    $sql = "SELECT * FROM image_1x1 WHERE id = $x";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column photo1x1">
                            <img src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
                <?php 
                $y = rand(1, 3);
                    $sql = "SELECT * FROM image_1x2 WHERE id = $y";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column">
                            <img src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
            </div>
            <div>
            <?php 
            $z = rand(1, 3);
                    $sql = "SELECT * FROM image_1x3 WHERE id = $z";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column">
                            <img src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
                <?php 
                    $w = rand(1, 3);
                    $sql = "SELECT * FROM image_1x4 WHERE id = $w";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column">
                            <img src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
            </div>
                <?php 
                    $q = rand(1, 3);
                    $sql = "SELECT * FROM image_1x5 WHERE id = $q";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column">
                            <img class="media" src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
        </div>
        <div class="row">
                <?php 
                    $v = rand(1, 3);
                    $sql = "SELECT * FROM image_2x1 WHERE id = $v";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column-2">
                            <img class="media" src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
                <?php 
                    $u = rand(1, 3);
                    $sql = "SELECT * FROM image_2x2 WHERE id = $u";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column-2">
                            <img class="media" src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
                <?php 
                    $l = rand(1, 3);
                    $sql = "SELECT * FROM image_2x3 WHERE id = $l";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                        
                        <div class="column-2">
                            <img class="media" src="uploads/<?=$images['image_url']?>">
                        </div>
                            
                <?php } }?>
</div>
    </section>

    <section id="knowledge">
        <h1>CERTYFIKATY - SZKOLENIA</h1>
        <div class="knowledge-box">
            <div class="column-3">
                <div class="box-certificate">
                    <h3>Automatyka</h3>
                    <img src="Source/KNX img.png">
                    <h5>Certyfikat</br>KNX</h5>
                </div>
            </div>
            <div class="column-3">
                <div class="box-certificate">
                    <h3>Elektryka</h3>
                    <img src="Source/SEP.png">
                    <h5>Uprawnienia</br>SEP</h5>
                </div>
            </div>
            <div class="column-3 media">
                <div class="box-certificate">
                    <h3>Fotowoltaika</h3>
                    <img clsrc="Source/L=icence-1.png">
                    <h5>Uprawnienia</br>Fotovol</h5>
                </div>
            </div>
            <div class="column-3 media">
                <div class="box-certificate">
                    <h3>Klimatyzacja</h3>
                    <img src="Source/F_Gazy.png">
                    <h5>Uprawnienia</br>AC</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="cta-bgn">
            <div class="column-4">
                <h1 class="media">Skontaktuj się z nami!</h1>
                <h6 class="media">Zawsze możesz na nas liczyć</h6>
                <div class="image-parent media">
                    <img src="Source/localisation-icon.png">
                    <p>Adres: Plebiscytowa 33 </br> 44-266 Świerklany</p>
                </div>
                <div class="image-parent media">
                    <img class="icon-resize-small" src="Source/Słuchawka_IKONA.png">
                    <p>Telefon: +48 501 041 527</p>
                </div>
                <div class="image-parent media">
                    <img class="icon-resize-small" src="Source/icons8-email-50.png">
                    <p>dokada.website@gmail.com</p>
                </div>
            </div>
<<<<<<< HEAD:Dokada.php
            <form class="column-4" action="send-email.php" method="post">
=======
            <form class="column-4" action="send-email.php" method="post" data-netlify="true" data-netlify-honeypot="bot-field">
                <input class="d-none" name="bot-field">
>>>>>>> 2408a808c82f24fd05a12796f3227db9244a519e:index.html
                <input type="text" name="name" id="name" placeholder="Imię" class="med-cta" required>
                <input type="email" name="email" id="email" placeholder="email" class="med-cta" required>
                <input  type="text" name="message" id="message" placeholder="treść" class="big-cta" required>
                <button class="small-cta">Wyślij</button>
            </form>
            <div method="post" class="not_media">
                <img class="icon-resize-small" src="Source/Słuchawka_IKONA.png">
                <img class="socials" src="Source/localisation-icon.png">
                <img class="socials" src="Source/facebook-icon.png">
                <img class="socials" src="Source/twitter-icon.png">
                <img class="socials" src="Source/instagram-icon.png">
            </div>
        </div>
    </section>
    
    <script src="main.js"></script>
</body>
</html>

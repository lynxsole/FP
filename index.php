<?php 
    require('assets/php/newElt.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/img/errorPicture/cassandre.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href=" https://fonts.cdnfonts.com/css/zt-grafton " rel="feuille de style">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>LS - Hub</title>
</head>
<body>
<?php
    include('nav.php');
?>
<section id="page1">
        <div style="margin-top: 2rem;" class="welcome">
            <h2 id="tw">IMAGINE UN<br> ENDROIT...<br></h2>
        </div>

        <div class="welcomeText" id="">
            <p style=" margin: 0;" class="wt">
                …où tu pourra faire partie d'un Groupe d'editeur,<br>
                experimenter ou non ou personne ne jugera tes création.<br> 
                Un endroit où toi et ta bande d'amis pouvez simplement passer du temps ensemble.<br> 
                Un endroit qui permettrait plus facilement d'apprendre et découvire de nouvelle chose.
            </p>
        </div>

        <div class="btn">
            <div class="downloadBtn">
                <input onclick="showContrat()" id="downloadBtn" type="button" value="Télécharge nos pack">
            </div>
            <div class="Webaccess">
                <input onclick="count()" id="Webaccess" type="button" value="Nous Rejoindre">
            </div>
        </div>
        <div style="display: none; margin: 0 auto;" id="contrat" class="B_contrat">
                <p style=" position: relative; text-align: center; font-size: 0.9rem; padding: 1.5rem;">
                    Avant de télécharger ce pack je tiens à vous avertir.
                    que le contenu de ce pack contient des logiciels cracker trouver sur le net je me dédoine de tout dommage.
                    matériel et logiciel en cas de problème lors de son installation si vous cochez la case, cela signifie que vous avez lu et approuvé l'accord.
                </p>
                <input id="bc" style="width: 100px; height: auto; margin-left: 30%;" id="dlBtn" type="button" value="Telecharger" onclick="checkBox()">
                <input style="width: 100px; height: auto; margin-left 5px; " type="checkbox" id="check" onclick="checkBox()">
                <p style="display: none; margin-left:1rem; text-align: center; font-size: 1rem; color: red; position: absolute;" id="error">
                    Vous devez cocher la case si vous souhaitez consulter le contenu.
                </p>
            </div>

            <?php
                include('music.php');
            ?>
    </section>

    
    <?php
        include('footer.php');
    ?>
        <script src="assets/js/main.js"></script>
</body>
</html>

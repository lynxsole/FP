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
    <link rel="stylesheet" href="assets/css/ressource.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>LS - Ressource</title>
</head>
<body>
<?php
    include('nav.php');
?>
<section>
        <div style="margin-top: 5rem;" class="welcome">
            <h2 id="tw">Les ressources des membres du serveur...</h2>
            <h2 id="msg" style="display: none;" id="tw">Sa va etre compliquer la...</h2>
            <img id="erreurIcon cassandre" style="display: none;" src="assets/img/errorPicture/cassandre.png" alt="" srcset="">
        </div>

        <div class="container">
            <div class="checkBoxContent">
                <div class="eltCheck">
                    <p>AE</p>
                    <input onclick="selectRessourceBtn()" checked id="AE" type="checkbox" name="After-Effect">
                </div>
                <div class="eltCheck">
                    <p>SVP</p>
                    <input onclick="selectRessourceBtn()" checked id="SVP" type="checkbox" name="Sony-Vegas-Pro">
                </div>
                <div class="eltCheck">
                    <p>Telephone</p>
                    <input onclick="selectRessourceBtn()" checked id="Phone" type="checkbox" name="Telephone">
                </div>
            </div>

            <div class="SelecRessource">
                <div id="AE-Box" class="card">
                    <p>
                        AE
                    </p>
                </div>

                <div id="SVP-Box" class="card">
                    <p>
                       SVP
                    </p>
                </div>

                <div id="Phone-Box" class="card">
                    <p>
                        Phone
                    </p>
                </div>

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
    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php 
    header("Cache-Control:no-cache");
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
        <div style="margin-top: 5rem" class="welcome">
            <h2 id="tw">Les ressources des membres du serveur...</h2>
            <div id="erreurIcon cassandre">
                <h2 id="msg" style="display: none;" id="tw">Sa va etre compliquer la...</h2>
                <img id="msg" style="display: none;" src="assets/img/errorPicture/cassandre.png" alt="">
            </div>
            
           
        </div>

        <div class="container">
            <div style="position: absolute;" class="checkBoxContent">
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


        <?php
            include('music.php');
        ?>
        
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/playList.js"></script>
</body>
</html>

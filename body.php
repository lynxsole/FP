<body>
    <section id="page1">
        <div class="welcome">
            <h2 id="tw">IMAGINE UN<br> ENDROIT...<br></h2>
        </div>

        <div class="welcomeText" id="">
            <p class="wt">
                …où tu pourrais faire partie d'un club scolaire,<br>
                d'un groupe de gamers ou d'une communauté d'art internationale.<br> 
                Un endroit où toi et ta bande d'amis pouvez simplement passer du temps ensemble.<br> 
                Un endroit qui permettrait plus facilement de discuter tous les jours et de se retrouver plus souvent.
            </p>
        </div>

        <div class="btn">
            <div class="downloadBtn">
                <a href="assets/dowload/text.txt" download="test.txt"><input id="downloadBtn" type="button" value="Télécharger pour Windows"></a>
            </div>
            <div class="Webaccess">
                <a href=""><input id="Webaccess" type="button" value="Ouvrir Discord dans ton navigateur"></a>
            </div>
        </div>
    </section>

    <section id="page2">
        <div class="textAc">
            <h2 id="tc">Voici mes comptes<br> ou je suis le plus actif...</h2>
        </div>
        
        <div class="account">
            <div class="card">
                <div class="imgContent">
                    <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/11db243f4de2c6b27bfbb14eb727d97f~c5_100x100.jpeg?x-expires=1680444000&x-signature=cMgoizhcEkjRIdWitVf7WrSkzjI%3D" alt="" class="imgContent">
                </div>
                <div class="textContent">
                        <p class="textcard">
                        <?php
                        if(array_key_exists('title'.'reseau', $accountElt2) && $accountElt2['enabled'] == false);
                        {
                            echo $accountElt2['reseau'];
                            echo $accountElt2['title'];
                        }
                        ?>
                        </p>
                </div>
            </div>

            <div class="card">
                <div class="imgContent">
                <img src="https://yt3.googleusercontent.com/Lt_kl_vXUdvCmiMxuzHUDfxfy_XCtIuQAj6VilHZbCyJD9xqFXQ5WWfoEYPC00wMPf-9_Ki3Zw=s176-c-k-c0x00ffffff-no-rj" alt="" class="imgContent">
                </div>
                <div class="textContent">
                    <p class="textcard">
                        <?php
                        if(array_key_exists('title'.'reseau', $accountElt) && $accountElt['enabled'] == false);
                        {
                            echo $accountElt['reseau'];
                            echo $accountElt['title'];
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        

        


    </section>

    <section id="page3">


        <div class="textc">
            <h2 id="tc2">Mes Creations<br>...</h2>

            <div id="errorBox">
            <div class="CassadreIcon">
                <img src="assets/img/errorPicture/cassandre.png" alt="" id="cassandre">
            </div>
            <div id="eT">
                <p id="errorText">
                    <?php
                        echo $errorText;
                    ?>
                </p>
            </div>
        </div>
        </div>

    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>
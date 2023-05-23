
<nav>
<div class="navbtn">
    <input id="openBtn" style="width: 50px;  border-style: none; background-color: #1C2942; font-family: 'Ubuntu', sans-serif; color: white;" type="button" onclick="showPhoneBtn()" value="Menu">
    <input id="closeBtn" style="width: 50px; display: none;  border-style: none; background-color: #1C2942; font-family: 'Ubuntu', sans-serif; color: white;" type="button" onclick="hidePhoneBtn()" value="Fermer">
    <div id="phoneNav" class="content">
        <ul class="navText">
            <li class="navBtn"><a href="index.php"><P>Home</P></a></li>
            <li class="navBtn"><a href="https://youtube.com/@Editor_world2"><P>Creation</p></a></li>
            <!-- <li class="navBtn"><a href="#"><P>Autre</p></a></li> -->
            <li class="navBtn"><a href="Ressource.php"><P>Ressource</p></a></li>
            <li class="navBtn" id="screenCount"><P style="display: inline-flex">membre[ <span id="discordCount">0</span>] <img style="height: 40px; width: 40px; margin-left: 15px; margin-top: -10px;" src="assets/img/icon/people.svg" alt=""> </p></li>
            <li class="navBtn"><P></p></li> 
        </ul>
    </div>
</div>
    <script src="assets/js/discordMember.js"></script>
</nav>
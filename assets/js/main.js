function showContrat()
{
    document.getElementById('contrat').style.display = "block";
}

function showPhoneBtn()
{
    document.getElementById('phoneNav').style.display = "block";
    document.getElementById('closeBtn').style.display = "block";
    document.getElementById('openBtn').style.display = "none";
}

function hidePhoneBtn()
{
    document.getElementById('phoneNav').style.display = "none";
    document.getElementById('closeBtn').style.display = "none";
    document.getElementById('openBtn').style.display = "block";
    
}

function checkBox() {
    if(document.getElementById('check').checked == true)
    {
       console.log("bip bop");
       document.getElementById('error').style.display = "none";
       window.location.href="https://mega.nz/folder/fk5SwawR#NhLhbHJBSj17qSKJsm6-kg";
    }else{
        console.log("bop bop bop");
        document.getElementById('error').style.display = "block";
    }
}


let countUser = 0;
function count(int) {
    document.getElementById('userCounter').innerHTML = ++countUser;
    console.log(countUser);
    window.location.href="https://discord.gg/M8ExTugKzS";

}

function selectRessourceBtn()
{
    if(document.getElementById('AE').checked == true)
    {
        console.log('chek !!!')
        document.getElementById('AE-Box').style.display = "block";
    }else{
        document.getElementById('AE-Box').style.display = "none";
    }

    if(document.getElementById('SVP').checked == true)
    {
        document.getElementById('SVP-Box').style.display = "block";
    }else{
        document.getElementById('SVP-Box').style.display = "none";
    }

    if(document.getElementById('Phone').checked == true)
    {
        document.getElementById('Phone-Box').style.display = "block";
    }else{
        document.getElementById('Phone-Box').style.display = "none";
    }

    if(document.getElementById('AE').checked == false && document.getElementById('SVP').checked == false && document.getElementById('Phone').checked == false)
    {
        document.getElementById('msg').style.display = "block";
        document.getElementById('erreurIcon').style.display = "block";
        
    }else{
        document.getElementById('msg').style.display = "none";
        document.getElementById('erreurIcon').style.display = "none";
    }
}

function showContrat()
{
    document.getElementById('contrat').style.display = "block";
}

function checkBox() {
    if(document.getElementById('check').checked == true)
    {
       console.log("bip bop");
       document.getElementById('error').style.display = "none";
    }else{
        console.log("bop bop bop");
        document.getElementById('error').style.display = "block";
    }
}
let countUser = 0;
function count(int) {
    document.getElementById('userCounter').innerHTML = ++countUser;
    console.log(countUser);
}
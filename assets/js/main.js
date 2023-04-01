function showContrat()
{
    document.getElementById('contrat').style.display = "block";
}

function checkBox() {
    if(document.getElementById('check').checked == true)
    {
       console.log("bip bop");
    }else{
        console.log("bop bop bop");
        document.getElementById('error').style.display = "block";
    }
}
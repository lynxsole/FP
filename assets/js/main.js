let download;

function showContrat()
{
    document.getElementById('contrat').style.display = "block";
}

function dl()
{
    download = browser.downloads.fileName('../download/text.txt');
}

function checkBox(bool) {
    if(document.getElementById('check').checked == false)
    {
        document.getElementById('error').style.display = "block";
    }else{
        dl();
    }
}
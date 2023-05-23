var discord_key = "831488933425840128";
var xmlHttpRequest = new XMLHttpRequest();
    xmlHttpRequest.open("GET", "https://discord.com/api/guilds/" + discord_key + "/embed.json", true);
    xmlHttpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var d = JSON.parse(this.responseText);
            document.getElementById("discordCount").innerHTML = d.presence_count;
        }  
    };  
xmlHttpRequest.send();  

function playMusic()
{
    var music = new Audio('assets/song/song.mp3');

    
    if(music.pause){
        music.play();
        document.getElementById('playView').style.display = "block";
        console.log('play time !!!');
    }else{
        music.pause();
        document.getElementById('playView').style.display = "none";
        console.log('pause time');
    }
}  
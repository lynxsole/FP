function playMusic()
{
    let music = new Audio('assets/song/song.mp3');
    document.getElementById('playView').style.display = "block";
    if(music.paused){
        music.play();
        console.log('play time !!!');
    }else{
        music.pause();
        document.getElementById('playView').style.display = "none";
        console.log('pause time');
    }
}  
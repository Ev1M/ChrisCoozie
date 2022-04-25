var i = 31;
var cookie = 0;
document.getElementById('cookie').style.display='none'
document.getElementById('input').style.display='none'


function startTimer() {

    document.getElementById('start').style.display='none'
    document.getElementById('main').style.display='none'
    document.getElementById('body').style.backgroundImage='url(http://localhost/Cookie/Hnet-image.gif)'

    var countdownTimer = setInterval(function() {

        document.getElementById('displayTimer').innerHTML = "Timer:" + i;
        i = i - 1;

        if (i <= 29) {
            document.getElementById('cookie').style.display=''
            document.getElementById('main').style.display=''
            document.getElementById('main').style.alignContent='left'
        }

        if (i <= -1) {
            document.getElementById('cookie').style.display='none'
            document.getElementById('input').style.display=''
            document.getElementById('main').style.display=''
            document.getElementById('main').style.backgroundColor='grey'
            document.getElementById('displayTimer').style.display='none'
            document.getElementById('displayClicks').innerHTML = "Clicks:" + cookie + " på 3 sekunder";
            clearInterval(countdownTimer);
        }

    }, 1000);

}

function startCookie() {
    document.getElementById('body').style.backgroundImage='url(http://localhost/Cookie/slap.gif)'
    cookie++;
    document.getElementById('displayClicks').innerHTML = "Clicks:" + cookie;
}
let timerState = Rectangle.getAttribute('data-timer')

if(timerState > 0) {
    timerLight(timerState);
}

function timerLight(time) {

    console.log(time)
    setTimeout(function (){
        document.getElementById('NextState').click();
    }, time)

}





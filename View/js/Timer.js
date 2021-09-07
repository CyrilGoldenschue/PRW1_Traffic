let timerState = TrafficLight.dataset.timer

if(timerState > 0) {
    timerLight(timerState);
}

function timerLight(time) {

    console.log(time)
    setTimeout(function (){
        sendPost();
    }, time)

}

function sendPost(){
    //const url = 'http://localhost:8080/'
    //fetch(url, {method: "POST", body: "next"});

    document.getElementById('NextState').click();
    /*fetch('index.php', {
        method: 'POST',
        body: 'next' //"body" instead of "data"
    })*/
      

}

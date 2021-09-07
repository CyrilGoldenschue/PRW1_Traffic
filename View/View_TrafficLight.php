<!DOCTYPE html>
<html lang="fr" style="background-color: black">
    <head>
        <meta charset="UTF-8">
        <title>PRW1_TrafficLight</title>
        <link rel="stylesheet" href="../Public/css/style.css">
    </head>
<body>
<div>
    <div id="Rectangle" data-timer="<?= $trafficLight->GetLights($_SESSION['state'])[3] ?> ">
        <div class="Circle <?= ($trafficLight->GetLights($_SESSION['state'])[0]->GetColor() )?>"></div>
        <div class="Circle <?= ($trafficLight->GetLights($_SESSION['state'])[1]->GetColor() )?>"></div>
        <div class="Circle <?= ($trafficLight->GetLights($_SESSION['state'])[2]->GetColor() )?>"></div>
    </div>
</div>
<div>
    <form method="post" >
        <input type="hidden" name="action" value="Next">
        <input type="hidden" name="state" value="<?= $_SESSION['state'] ?>">
        <input type="submit" id="NextState" class="button" value="=>">
    </form>
    <form method="post">
        <input type="hidden" name="action" value="HS">
        <input type="hidden" name="state" value="<?= $_SESSION['state'] ?>">
        <input type="submit" id="Stop" class="button" value="<?= $_SESSION['state']==4? "START" : "HS" ?>">
    </form>
</div>
<script src="../Public/js/Timer.js" ></script>


</body>






</html>
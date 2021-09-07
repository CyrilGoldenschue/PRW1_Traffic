<!DOCTYPE html>
<html lang="fr" style="background-color: black">
    <head>
        <meta charset="UTF-8">
        <title>PRW1_TrafficLight</title>
        <link rel="stylesheet" href="/View/css/style.css">
    </head>
<body>
<div>
    <div id="TrafficLight" data-timer="<?= $light->stateDuration() ?> ">
        <div class="Circle <?= $light->red == LampState::ON ? 'Red' : 'Off'?>"></div>
        <div class="Circle <?= $light->yellow == LampState::ON ? 'Orange' : ($light->yellow == LampState::BLINK ? 'Blink' : 'Off') ?>"></div>
        <div class="Circle <?= $light->green == LampState::ON ? 'Green' : 'Off' ?>"></div>
    </div>
</div>
<div>
    <form method="post" id="hidden" >
        <input type="hidden" name="action" value="next">
        <input type="hidden" name="state" value="<?= $light->state ?>">
        <input type="submit" id="NextState" class="button" value="=>">
    </form>
    <?php if($light->canStop()) : ?>
    <form method="post">
        <input type="hidden" name="action" value="hs">
        <input type="hidden" name="state" value="<?= $light->state ?>">
        <input type="submit" id="Stop" class="button" value=HS">
    </form>
    <?php endif; ?>

    <?php if(!$light->canStop()) : ?>
    <form method="post">
        <input type="hidden" name="action" value="hs">
        <input type="hidden" name="state" value="<?= $light->state ?>">
        <input type="submit" id="Stop" class="button" value=START" >
    </form>
    <?php endif; ?>
</div>
<script src="/View/js/Timer.js" ></script>


</body>






</html>
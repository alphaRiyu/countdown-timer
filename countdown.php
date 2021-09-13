<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/countdown.css">
    <script src="assets/js/master.js" defer></script>
    <title>Countdown Event Timer</title>
</head>

<body>

    <input type="hidden" id="date" name="date" value="<?= $_POST['date']; ?>">

    <div class="countdown-timer-container">
        <div class="days-count digit-container">
            <h1 class="digit" id="day">0</h1>
            <span>day(s)</span>
        </div>
        <div class="hours-count digit-container">
            <h1 class="digit" id="hour">0</h1>
            <span>hour(s)</span>
        </div>
        <div class="minutes-count digit-container">
            <h1 class="digit" id="minute">0</h1>
            <span>minute(s)</span>
        </div>
        <div class="seconds-count digit-container">
            <h1 class="digit" id="second">0</h1>
            <span>second(s)</span>
        </div>
    </div>

    <div class="countdown-timer-event-container">
        <h1 class="event-name">
            <?php if ($_POST['event'] == '') {
                echo 'Event Name!';
            } else {
                echo $_POST['event'];
            } ?>
        </h1>
    </div>

</body>

</html>
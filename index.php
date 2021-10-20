<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/master.css">
    <title>Countdown Timer</title>
</head>

<!-- comment is applied for pull request testing -->

<body>
    <h1>Countdown Event Timer</h1>
    <div class="initial-input-container">
        <form action="countdown.php" method="post">
            <input type="text" name="event" class="event-input" id="event" placeholder="Enter event">
            <input type="date" name="date" id="date" class="date-input" min="<?php echo date("Y-m-d"); ?>">
            <input type="submit" name="startButton" id="startButton" value="START" class="start-button op-btn">
            <input type="button" name="resetButton" id="resetButton" value="RESET" class="reset-button op-btn">
        </form>
    </div>
    <script>
        document.getElementById('resetButton').addEventListener('click', function() {
            document.getElementById('event').value = '';
            document.getElementById('date').value = '';
        });
    </script>
</body>

</html>
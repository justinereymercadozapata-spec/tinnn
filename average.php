
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1 - Chorp</title>
</head>
<body>
    <form method="Post">
        <label>Subject 1:</label>
        <input type="Number" name="Sub1" required>
        <br>
        <label>Subject 2:</label>
        <input type="Number" name="Sub2" required>
        <br>
        <label>Subject 3:</label>
        <input type="Number" name="Sub3" required>
        <br>
        <label>Subject 4:</label>
        <input type="Number" name="Sub4" required>
        <br>
        <label>Subject 5:</label>
        <input type="Number" name="Sub5" required>
        <br>
        <button type="Submit" name="Average">Compute</button>
    </form>
    <?php
    if (isset($_POST['Average'])) {
        $Sub1 = (float)$_POST['Sub1'];
        $Sub2 = (float)$_POST['Sub2'];
        $Sub3 = (float)$_POST['Sub3'];
        $Sub4 = (float)$_POST['Sub4'];
        $Sub5 = (float)$_POST['Sub5'];
        $Average = ($Sub1 + $Sub2 + $Sub3 + $Sub4 + $Sub5) / 5;
        echo "<h2>The Total Grade Average is: $Average</h2>";
    }
    ?>

</body>
</html>

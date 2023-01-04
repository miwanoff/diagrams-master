<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="diagram.php" method="POST">
        <input type="submit" name="submit" value="Показать диаграмму">
    </form>
    <?php
if (isset($_GET['picture'])) {
    echo "<img src = '{$_GET['picture']}'>";
}
?>
</body>

</html>
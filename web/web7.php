<?php
echo '<pre>';

$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
    header('Location: http://localhost/php-nd/web/web7.php?color=violet', true, 303);
    exit;
}

print_r($_SERVER);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mygtukai</title>
</head>

<body style="background-color: <?= $color ?>;">

    <form action="http://localhost/php-nd/web/web7.php" method="get">
        <button type="submit">GET</button>
    </form>


    <form action="http://localhost/php-nd/web/web7.php" method="post">
        <button type="submit">POST</button>
    </form>

</body>

</html>























<!-- <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // header("Location: ".$_SERVER['PHP_SELF']);
       header("lacation:http://localhost/php-nd/web7.php");
       //http://localhost/php-nd/web7.php? atsidaro puslapyje
      }
    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Mygtukai</title>
    <style>
        body {
            background-color: <?php echo ($_SERVER['REQUEST_METHOD'] == 'POST') ? 'yellow' : 'green'; ?>;
        }
    </style>
</head>
<body>
    <form method="GET">
        <button type="submit">GET</button>
    </form>

    <form method="POST">
        <button type="submit">POST</button>
    </form>

  
</body>
</html> -->
<?php
$error = $_GET['error'] ?? 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Page</title>
</head>

<body style="background-color: pink;">

    <form action="http://localhost/php-nd/web/rose.php" method="post">
        <button type="submit">GO TO ROSE</button>
    </form>

    <?php if ($error == 1) : ?>
        <h1>Ką čia veiki a?</h1>
    <?php endif ?>

</body>

</html>
























<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location:http://localhost/php-nd/web/rose.php');
 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pink Page</title>
    <style>
        body {
            background-color:pink;
        }
    </style>
</head>
<body>
    <form method="POST" action="rose.php">
        <input type="submit" value="GO TO ROSE">
    </form>
</body>
</html> -->
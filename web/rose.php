<?php
echo '<pre>';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: http://localhost/php-nd/web/pink.php?error=1', true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose Page</title>
</head>

<body style="background-color: #FF007F">



</body>

</html>



















<!-- <?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: http://localhost/php-nd/web/pink.php');

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rose Page</title>
    <style>
        body {
            background-color:#FF007F;
        }
    </style>
</head>
<body>
    <h1>Rose</h1>
    <p></p>
</body>
</html> -->
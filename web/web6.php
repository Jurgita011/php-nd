<?php
echo '<pre>';

$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mygtukai spalvu</title>
</head>

<body style="background-color: <?= $color ?>;">

    <form action="http://localhost/php-nd/web/web6.php" method="get">
        <button type="submit">GET</button>
    </form>


    <form action="http://localhost/php-nd/web/web6.php" method="post">
        <button type="submit">POST</button>
    </form>

</body>

</html>


























<!-- <?php
$backgroundClass = '';
// Paspaudus GET mygtuką, puslapio fonas nuspalvinsis žaliai,
//o paspaudus POST mygtuką - geltonai.

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['get_button'])) {
        $backgroundClass = 'green-background';
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['post_button'])) {
        $backgroundClass = 'yellow-background';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mygtukų puslapis</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;

        }

        .get-form {
            margin-bottom: 20px;
        }

        .post-form {
            margin-bottom: 20px;
        }

        .green-background {
            background-color: green;
        }

        .yellow-background {
            background-color: yellow;
        }
    </style>
</head>

<body>

    <form class="get-form" method="GET">
        <input type="submit" name="get_button" value="GET Mygtukas">
    </form>

    <form class="post-form" method="POST">
        <input type="submit" name="post_button" value="POST Mygtukas">
    </form>

    <script>
        document.body.className += '<?php echo $backgroundClass; ?>';
    </script>
</body>

</html> -->
<?php
$color = isset($_GET['color']) ? $_GET['color'] : 0;

if ($color == 1) {
    $background = 'red';
} else {
    $background = 'black';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>spalvos</title>
</head>

<body style="background-color: <?php echo $background; ?>;">
    <a href="puslapis.php">sveiki, visi!</a><br>
    <a href="puslapis.php?color=1">Pamoku siandien nebus...</a>
</body>

</html>
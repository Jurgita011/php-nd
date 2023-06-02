<?php


$checkboxNo = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$checkboxNoLength = rand(3, 10);

$color = $_GET['color'] ?? 'black';
$formShow = $_GET['formShow'] ?? 1;
$counter = $_GET['counter'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $counter = count($_POST['masyvas']);

    header('Location: http://localhost/php-nd/web/web9.php?counter=' . $counter . '&color=white&formShow=0', true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juodulys</title>
</head>

<body style="background-color: <?= $color ?>">

    <?php if (!$formShow) : ?>
        <h1> <?= $counter ?> </h1>
    <?php endif ?>

    <?php if ($formShow) : ?>
        <form action="http://localhost/php-nd/web/web9.php" method="post">
            <?php for ($i = 0; $i < $checkboxNoLength; $i++) {
                echo '<label style="color:pink;" for="' . $i . '">' . $checkboxNo[$i] . '</label>';
                echo '<input type="checkbox" id="' . $i . '" name="masyvas[]" />';
            }
            ?>
            <button type="submit">Change the color</button>
        </form>
    <?php endif ?>
</body>

</html>


























<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $checkedCount = count($_POST['checkboxes']); // Skaičiuojamas pažymėtų checkboksų kiekis
  echo "<h1>Pažymėta: " . $checkedCount . "</h1>";
  exit; // Užbaigiame skriptą, kad nebūtų rodomas HTML kodas
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Juodas puslapis</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <form method="POST">
    <?php
    $checkboxCount = mt_rand(3, 10); // Sugeneruojamas atsitiktinis skaičius (3-10)
    for ($i = 0; $i < $checkboxCount; $i++) {
      $letter = chr(65 + $i); // Generuojama raidė A, B, C, ...
      echo "<input type='checkbox' name='checkboxes[]' value='$letter'> $letter <br>";
    }
    ?>
    <button type="submit" style="background-color: white; color: black;">Pateikti</button>
  </form>
</body>
</html> -->
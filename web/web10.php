<?php


$checkboxNo = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$checkboxNoLength = rand(3, 10);

$color = $_GET['color'] ?? 'black';
$formShow = $_GET['formShow'] ?? 1;
$counter = $_GET['counter'] ?? 0;
$rand = $_GET['rand'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $counters = $_POST['masyvas'] ?? [];
    $counter = count($counters);
    
    $rand = $_POST['rand'] ?? 0;

    header('Location: http://localhost/php-nd/web/web10.php?counter=' . $counter . '&color=white&formShow=0&rand=' . $rand, true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 uždavinys</title>
</head>

<body style="background-color: <?= $color ?>">

    <?php if (!$formShow) : ?>
        <h1> <?= $counter ?> </h1>
        <h2> <?= $rand ?> </h2>
    <?php endif ?>

    <?php if ($formShow) : ?>
        <form action="http://localhost/php-nd/web/web10.php" method="post">
            <?php for ($i = 0; $i < $checkboxNoLength; $i++) {
                echo '<label style="color:pink;" for="' . $i . '">' . $checkboxNo[$i] . '</label>';
                echo '<input type="checkbox" id="' . $i . '" name="masyvas[]" />';
            }
            echo '<input type="hidden" name="rand" value="' . $checkboxNoLength . '"/>'
            ?>
            <button type="submit">Change the color</button>
        </form>
    <?php endif ?>
</body>

</html>















<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $generatedCount = mt_rand(3, 10); // Sugeneruojamas atsitiktinis skaičius (3-10)
  $checkedCount = count($_POST['checkboxes']); // Skaičiuojamas pažymėtų checkboksų kiekis
  echo "Sugeneruota: " . $generatedCount . "<br>";
  echo "Pažymėta: " . $checkedCount;
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


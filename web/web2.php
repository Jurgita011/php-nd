<?php
        $defaultColor = "#FFFFFF"; // Numatytoji spalva (jei nėra GET parametro)
        if (isset($_GET['color'])) {
          $color = $_GET['color'];
          //preg_match('/^[a-fA-F0-9]{6}$/', $color) patikrins, ar $color yra šeši simboliai (raidės ir/arba skaitmenys) ir ar jie yra visą eilutės ilgį. Tai padės užtikrinti, kad perduodamas RGB spalvos kodas būtų tinkamas ir saugus naudojimui.
          if (preg_match('/^[a-fA-F0-9]{6}$/', $color)) {
            echo "background-color: #" . $color . ";";
          }
        } else {
          echo "background-color: " . $defaultColor . ";";
        }
      ?>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>spalva</title>
</head>
<body style="background-color: <?php echo isset($_GET['color']) ? '#' . $_GET['color'] : '#ffffff'; ?>">
    <h1>Spalva</h1>
    <p>Ivesti spalva:</p>
    <form method="get">
        <input type="text" name="color" placeholder="Spalvos kodas" value="<?php echo isset($_GET['color']) ? $_GET['color'] : ''; ?>">
        <input type="submit" value="Nustatyti spalvą">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spalvos</title>
</head>
<body>
<h1>Puslapio fonas</h1>
  <p> spalvos kodas:</p>
  <form method="get" action="">
    <input id="colorInput" type="text" name="color" placeholder="">
    <button type="submit">Keisti spalva</button>
</body>
</html>
<?php
if (isset($_GET['spalva'])) {
    $spalva = $_GET['spalva'];
    echo "<div style='color: $spalva;'>Spalva: $spalva</div>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spalvos</title>
</head>
<body>
<form method="GET" action="rezultatas.php">
        <label for="spalva"> Spalvos kodas:</label>
        <input type="text" id="spalva" name="spalva">
        <input type="submit" value="Siųsti">
</body>
</html>



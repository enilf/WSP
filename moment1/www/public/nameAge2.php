<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Namn och Ålder</title>
</head>
<body>
<h1>Namn och ålder</h1>
<?php
    $name2 = $_GET['name2'];
    $age1 = $_GET['age1'];
    
    echo "<p>Ditt namn är $name2 och du har $age1 år kvar till pension</p>";
?>
</body>
</html>

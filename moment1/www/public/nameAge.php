<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Namn och Ålder</title>
</head>
<body>
<h1>Namn och ålder</h1>
<?php
    $name1 = $_POST['name1'];
    $age = $_POST['age'];
    $age = 65 - $age;
    
    echo "<p>Ditt namn är $name1 och du har $age år kvar till pension</p>";
?>
</body>
</html>

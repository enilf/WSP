<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Calculate</title>
</head>
<body>
<h1>Calculate</h1>
<?php
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $ans = $num1 + $num2;
    
    echo "<p>$num1 + $num2 = $ans</p>";
?>
</body>
</html>

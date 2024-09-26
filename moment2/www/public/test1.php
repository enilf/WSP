<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $test = $_POST['test'];
        echo strip_tags("<h1>$test</h1> " , " <h1>");
        echo ("<h1>$test</h1>");
    ?>
</body>
</html>
<?php
if(!isset($_GET['name'])){
    header("location: login.html");
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_GET['name'] ?></title>
</head>
<body>
    <h1>
        <?php
            echo "Hej " . $_GET['name'];
        ?>
    </h1>
</body>
</html>
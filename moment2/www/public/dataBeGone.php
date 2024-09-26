<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        function cleanData($data){
            foreach($data as $i){
                $i = strip_tags($i);
                $i = stripslashes($i);
                $i = htmlspecialchars($i);
        
                echo $i . "<br>";
            }
        }
    ?>
</body>
</html>
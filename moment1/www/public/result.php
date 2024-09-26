<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Resultat</h1>
<?php 
    $points = 0;
    $ansOne = $_POST['qOne'];
    $ansTwo = $_POST['qTwo'];
    $ansThree = $_POST['qThree'];
    $ansFour = $_POST['qFour'];
    


    if($ansOne == 'asp')
        $points++;
    if($ansThree == 'basic')
        $points++;
    if($ansFour == 'js')
        $points++;
    if($ansTwo == 'js')
        $points++;
        
    if($points < 2)
        echo '<strong>Du fick '.$points.' av 4 möjliga, INTE GODKÄND</strong>';
    elseif($points > 3)
        echo "<strong> Du fick $points av 4 möjliga, ALLA RÄTT </strong>";
    else
        echo "<strong> Du fick $points av 4 möjliga, GODKÄND </strong>";<
?>
</body>
</html>
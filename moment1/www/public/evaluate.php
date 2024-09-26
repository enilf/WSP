<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematiktest</h1>
<h2>Resultat</h2>
<?php
     	$name1 = $_POST['name1'];
        $ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
        $ans3 = $_POST['q3'];
        $ans4 = $_POST['q4'];
        $points = 0;
     	
     	if($ans1 == 1789)
           $points++;
     	if($ans2 == 17)
           $points++;
        if($ans3 == "nej")
           $points++;
        if($ans4 == 3)
           $points++;
     	echo("<p>Ditt namn: $name1</p>");
        echo("<p>Du fick " . $points . " av 4 möjliga</p>");
?>
</body>
</html>
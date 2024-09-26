<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<!-- Moment 0 -->
<?php include('header.html'); ?>
<h1>Matematik-testet har ett fel svar hitta det</h1>
<h2>Emil Flodmark</h2>
<form action="evaluate.php" method="post">
   <fieldset>
       <legend>Frågor, gud</legend>
       <label>Ditt Namn: </label>
       <input type="text" name="name1">
       <br>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 6 = </label>
       <input type="text" name="q2">
       <br>
       <label>7 * 7 = </label>
       <input type="text" name="q3">
       <br>
       <label>12 - 9 = </label>
       <input type="text" name="q4">
       <br>
       <label>14 * 6 = </label>
       <input type="text" name="q5">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>

<!-- Moment 1: -->
<?php include('footer.html'); ?>
   <form action="convert.php" method="post">
      <fieldset>
         <Legend>Konvertera</Legend>
         <label>Ange ett belopp i dollar </label>
         <input type="text" name="currency">
         <input type="submit" name="konvertera till sek">
      </fieldset>
   </form>
   <form action="nameAge.php" method="post"> 
      <fieldset>
         <legend>Namn och ålder</legend>
         <label>Ange ditt namn </label>
         <input type="text" name="name1">
         <br>
         <label>Ange din ålder </label>
         <input type="text" name="age">
         <br>
         <input type="submit" name="Done">
      </fieldset>
   </form>
   <h1>Matematik-test</h1>

   <form action="calculate.php" method="post">
      <fieldset>
         <legend>Kalkylator</legend>
         <input type="number" name="n1"> +
         <input type="number" name="n2">
         <br>
         <input type="submit" value="Beräkna">
      </fieldset>
   </form>

   <a href="nameAge2.php?name2=Emil&age1=18">Nästa</a>
     
   <h1>Quiz</h1>
<form action="result.php" method="post">
    <label>Vilket är ett primtal?<br>    
        <input type="radio" name="qOne" value="php">12<br>
        <input type="radio" name="qOne" value="asp">13<br>
        <input type="radio" name="qOne" value="jsp">14<br><br>
    </label>
    <label>Vilket år började franska revolutionen?<br>  
        <input type="radio" name="qTwo" value="jsp">1689<br>
        <input type="radio" name="qTwo" value="js">1789<br>
        <input type="radio" name="qTwo" value="basic">1889<br><br>
    </label>
    <label>Kan fåglar flyga?<br>  
        <input type="radio" name="qThree" value="jsp">Ja, alla<br>
        <input type="radio" name="qThree" value="js">Nej, inga<br>
        <input type="radio" name="qThree" value="basic">Ja, vissa<br><br>
    </label>
    <label>Var ligger Oman?<br>  
        <input type="radio" name="qFour" value="jsp">Asien<br>
        <input type="radio" name="qFour" value="js">Afrika<br>
        <input type="radio" name="qFour" value="basic">Danmark<br><br>
    </label>
    <input type="submit" value="Skicka" />
</form>

</body>
</html>
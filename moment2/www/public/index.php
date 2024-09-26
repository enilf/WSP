<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="test1.php" method="post">
      <fieldset>
         <legend>Test</legend>
         <input type="text" name="test">
         <input type="submit" name="send">
      </fieldset>
   </form>
   <?php
      for($i = 1.0; $i < 5.0; $i += 0.1){
         echo ("$i ");
      }
      echo "<br>";
      $i = 1;
      while($i < 5){
         echo ("$i ");
         $i += 0.1;
      } 

      //Uppgift 3
      $page["head"] = "<h1>Välkommen, Må gud vara på min sida, Inshallah</h1>";
      $page["main"] = "<p>Detta är innehållet på min sida</p>";
      $page["footer"] = "<hr><p>Min sidfoot</p>";

      foreach($page as $i){
         echo $i . "<br>";
      }
      
      //Uppgift 4
      include('inc/matte.php');
      $summa = sum(7, 11);
      $produkt = multiply(6, 8);
      $differens = sub(9, 5);
      $kvot = div(9, 3);

      echo ("7 + 11 = $summa <br>");
      echo ("6 * 8 = $produkt <br>");
      echo ("9 - 5 = $differens <br>");
      echo ("9 / 3 = $kvot <br>");

   ?>
   <!--Uppgift 5-->
      <form action="checkUser.php"  method="post">
         <fieldset>
            <legend>Personuppgifter</legend>
            <label>Förnamn: </label>
            <input type="text" name="name"><br>
            <label>Efternamn: </label>
            <input type="text" name="surname"><br>
            <label>Användarnamn: </label>
            <input type="text" name="username"><br>
            <label>Lösenord: </label>
            <input type="password" name="password"><br>
            <input type="submit" ><br>
         </fieldset>
      </form>

      <?php
         
      ?>
</body>
</html>
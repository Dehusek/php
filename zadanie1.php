<!DOCTYPE html>
<html>
<head>
 <title>Tomasz Dechnik</title>
 <meta charset="UTF-8">
</head>
<body>

 <form action="imie.php" method="get">
   Imię: <input type="text" name="imie">
  <input type="submit">
 </form>
Witaj: <?php
 echo $_GET["imie"];
?>
</body>
</html>

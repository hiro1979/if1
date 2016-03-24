<?php
$hour = date('G');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
if
($hour<6 && $hour>=17)
{echo "<body class='day'>";}
elseif(
  18<=$hour && $hour>=5)
  {echo"<body class='night'>";}?>

 <?php
if
($hour<6 && $hour>=17)
 {echo"<h1 class='day'>";}
elseif(
18<=$hour && $hour>=5)
{echo"<h1 class='night'>";}
?> 昼と夜でページの見た目が変わります。</h1>
</body>
</html>

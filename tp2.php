<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo"<b>exercice 1:</b>";
$salaire1="1000$";
$salaire2="1200$";
$salaire3="1400$";

echo"<table border=2>";
echo"<tr><td style='color:blue'>le salaire de M.A est </td><td>$salaire1</td></tr>";
echo"<tr><td style='color:blue'>le salaire de M.B est </td><td>$salaire2</td></tr>";
echo"<tr><td style='color:blue'>le salaire de M.C est </td><td>$salaire3</td></tr>";
echo"</table>";
echo"<b>exercice 2:</b>";
$date=date("d-m-y");
echo"<br>Hello PHP, nous sommes le $date";
$heure=date("H");
if($heure>12 && $heure<18){
    echo"<br>Hello PHP, nous sommes le $date Bonne apres midi";
}else if($heure<=12){
    echo"<br>Hello PHP, nous sommes le $date Bon matin";
}
echo"<br><b>exercice3:</b>";
echo"<ul>";
echo'<li><br> 1=1</li>';
for($i=2;$i<=20;$i++){
    $res=$i*$i;
    echo'<li><br>'.$i.'<sub>2</sub>='.$res.'</li>';
}
echo"</ul>";
echo"<br><b>exercice 4:</b>";

for($i=1;$i<10;$i++){
        echo"$i-";    }
echo"10";
echo"<br><b>exercice 5:</b>";
echo"<table border='1', cellpading='3px',cellspacing='0px'>";
for($i=1;$i<=6;$i++){
    echo"<tr>";
    for($j=1;$j<=5;$j++){
        $res=$i*$j;
        echo"<td>$i*$j=$res</td>";
    }
    echo"</tr>";
}
echo"</table>";
?>
</body>
</html>
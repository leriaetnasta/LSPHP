<?php declare(script_type=1);?>
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
echo"<b>rappel :</b><br>";
$mat=[[3,3,3,3],[4,4,4,4],[5,5,5,5],[6,6,6,6],[7,7,7,7]];
foreach ($mat as $tab){
    foreach($tab as $var){
        echo $var.' ';
    } echo'<br>';
}
$mat=[array("doha"=>12,"rajaa"=>55,"loubna"=>10),array('ahmad'=>88,"leila"=>77),array('lamiaa'=>99,"roumaissa"=>14,"kawtar"=>66)];
foreach ($mat as $tab){
    foreach ($tab as $cle=>$var){
        echo $cle.':'.$var.' ';
    } echo'<br>';
}
function afficher($msg){
    echo $msg;
}
afficher("loubna");
function addition(int $a, int $b):int{
    return $a+$b;
}
echo addition(12,2);
?>
</body>
</html>

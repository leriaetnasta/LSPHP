<!doctype html>
<html lang="en">
<style>table
{
border-collapse: collapse;
}
td, th
{
border: 1px solid black;
}</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo"<b>les tableaux numerique:</b>";
$note= array(0,2,"emsi",5,2.6,0.4,0,1,777);
$note1=[0,4,5,8,7,9.5];
echo"<br>3rd element in note array is $note[2]";
echo"<br>5th element in note1 array is $note1[4]";
echo"<br><b>boucle for pour afficher tout les elements du tableau:</b>";
for($i=0;$i<count($note);$i++){
    echo"<br>l'element numero <b>[$i]</b> est : $note[$i]";
}
echo"<pre>";
var_dump($note);
echo"</pre>";
foreach($note as $cle=>$var){
    echo"la valeur $cle:$var <br>";
}
echo"<ol>";
for($i=1;$i<=30;$i++) {
    echo"<il> étape $i.<br></il>";
}
echo"</ol>";
echo"les tableaux associatifs<br>";
$note2=array("ahmad"=>12,"said"=>15,"aida"=>18,"youssra"=>20);
$note3=["loubna"=>20,"doha"=>20,"rajaa"=>20];
$note4["ahmad"]=18;
foreach ($note2 as $cle=> $var){
    echo"la note de $cle est $var <br>";
}
echo"excercice tableau";
echo"<table>";
echo"<tr><th>prenom</th> <th>note</th></tr>";
foreach ($note2+$note3 as $cle =>$var){
    echo"<tr><td>$cle</td> <td>$var</td></tr>";
}
echo"</table>";
$etudiant=array("loubna","foha","doha","rajaa","youssra","yamina","ikram");
echo"<table>";
echo"<tr><th>Indice</th><th>prenom</th></tr>";
foreach ($etudiant as $cle=>$var){
    echo"<tr><td>$cle</td><td>$var</td></tr>";
}
echo"</table>";
echo"matrice";
$mat=[[3,3,3,3],
    [4,4,4,4],
    [5,5,5,5]];
foreach ($mat as $tab){
    foreach($tab as $cle=>$var){
        echo "indice:$cle=valeur:$var  ";
    } echo"<br>";
}echo"<table>";

foreach($mat as $tab){
echo"<tr>";
foreach ($tab as $cle=>$val){
    echo"<td>$cle</td><td>$val</td>";
}
echo"</tr>";
}
echo"</table>";
?>

</body>
</html>

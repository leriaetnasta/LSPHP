<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="contact_post.php" method="post">
     <fieldset>
     <legend> Formulaire d'inscription </legend>
     <table>
     <tr> 
     <td> Nom : </td> 
     <td> <input type="text" name="nom" required > </td> 
     </tr>
     <tr> 
     <td> preom : </td> 
     <td> <input type="text" name="prenom" required > </td> 
     </tr>
     <tr> 
     <td> Email : </td> 
     <td> <input type="email" name="email" required > </td> 
     </tr>
     <tr>
     <td> Sexe: </td>
     <td><input type="radio" name="sexe"  value="Homme" required> Homme
     <input type="radio" name="sexe"  value="Femme" required> Femme </td>
     </tr>
     <tr>
     <td>Pays : </td>
     <td>
     <select name="pays[]">
     <option value="Maroc" > Maroc </option>
     <option value="France" selected> France </option>
     <option value ="Amerique"> Amerique </option>
     </select>
     </td> </tr>
     <tr> 
     <td>Les languages préférés</td>
     <td>
     <select name="langages[]" multiple>
     <option value="Java"> Java </option>
     <option value="C"> C </option>
     <option value="C++"> C++ </option>
     <option value="PHP"> PHP </option>
     </select>
     </td>
     </tr>
     <tr>
     <td>Domaines d'activités</td>
     <td> <input type="checkbox" name="domaine[]" value="Informatique">Informatique 
     <input type="checkbox" name="domaine[]" value="Gestion">Gestion
     <input type="checkbox" name="domaine[]" value="Pédagogie">Pédagogie
     </td>
     </tr>
     <tr>
     <td> <input type="submit" name="Envoyer"> </td>
     <td> <input type="reset" name="Annuler" value="Annuler"></td>
     </tr>
     </table>
     </fieldset>
</body>
</html>
<?php
require_once(__DIR__."/config/db.php");
require_once(__DIR__."/config/autoload.php");



session_start();

require_once("combat.php");


?>
<!DOCTYPE html>
<html>
  <head>
    <title>TP : Mini jeu de combat - Version 2</title>
    
    <meta charset="utf-8" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet"   href="./css/main.css" > 
  </head>
  <body>
<form action="" method="post">
<p>
  Nom : <input type="text" name="nom" maxlength="50" /> <input type="submit" value="Utiliser ce personnage" name="utiliser" /><br />
  Type :
  <select name="type">
    <option value="magicien">Magicien</option>
    <option value="guerrier">Guerrier</option>
    <option value="archer">Archer</option>
  </select>
  <input type="submit" value="Créer ce personnage" name="creer" />
</p>
</form>


</body>
</html>
<?php
if (isset($perso)) // Si on a créé un personnage, on le stocke dans une variable session afin d'économiser une requête SQL.
{
$_SESSION['perso'] = $perso;
}?>
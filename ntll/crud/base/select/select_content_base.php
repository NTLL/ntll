<?php
  $reponse = $bdd->prepare("SELECT * FROM config_main");
  $reponse->execute();

  while($row = $reponse->fetch(PDO::FETCH_ASSOC))
{
  $id = $row['id'];
  $color = $row['main_color'];
  $name = $row['name_app'];
  $dk = $row['nav_dk'];
}
?>

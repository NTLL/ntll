<?php
  $reponse = $bdd->prepare("SELECT * FROM config_page2");
  $reponse->execute();

  while($row = $reponse->fetch(PDO::FETCH_ASSOC))
{
  $id = $row['id_cat'];
  $name = $row['cat_name'];
  $photo = $row['photo_cat'];
  $tf = $row['tf_cat'];
}
?>

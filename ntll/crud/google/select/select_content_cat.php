<?php
  $reponse = $bdd->prepare("SELECT * FROM google_page");
  $reponse->execute();

  while($row = $reponse->fetch(PDO::FETCH_ASSOC))
{
  $id = $row['id_google'];
  $photo = $row['google_photo'];
  $tf = $row['tf_google'];
}
?>

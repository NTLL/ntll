<?php
require "../../../connect_bdd.php";
$id = $_POST['id_google'];
  $req = $bdd->prepare('UPDATE google_page
  SET google_photo = :google_photo, tf_google = :tf_google
  WHERE id_google = :id');

  $req->execute(array(
    'google_photo' => ($_POST['google_photo']),
    'tf_google' => ($_POST['tf_google']),
    'id' => $id
  ));
  //une redirection vers la page de configuration
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
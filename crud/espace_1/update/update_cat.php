<?php
require "../../../connect_bdd.php";
$id = $_POST['id_cat'];
  $req = $bdd->prepare('UPDATE config_page
  SET cat_name = :cat_name, photo_cat = :photo_cat, tf_cat = :tf_cat
  WHERE id_cat = :id');

  $req->execute(array(
    'cat_name' => ($_POST['cat_name']),
    'photo_cat' => ($_POST['photo_cat']),
    'tf_cat' => ($_POST['tf_cat']),
    'id' => $id
  ));
  //une redirection vers la page de configuration
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
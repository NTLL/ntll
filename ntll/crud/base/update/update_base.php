<?php
require "../../../connect_bdd.php";
$id = $_POST['id'];
  $req = $bdd->prepare('UPDATE config_main
  SET main_color = :main_color, name_app = :name_app, nav_dk = :nav_dk
  WHERE id = :id');

  $req->execute(array(
    'main_color' => ($_POST['main_color']),
    'name_app' => ($_POST['name_app']),
    'nav_dk' => ($_POST['nav_dk']),
    'id' => $id
  ));
  //une redirection vers la page de configuration
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
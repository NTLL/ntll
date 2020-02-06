<?php
  require "../../../connect_bdd.php";
  $button_name = isset($_POST['button_name']) ? $_POST['button_name'] : NULL;
  $button_link = isset($_POST['button_link']) ? $_POST['button_link'] : NULL;
  $button_hidden = isset($_POST['button_hidden']) ? $_POST['button_hidden'] : NULL;
  $id_button = isset($_POST['id_button']) ? $_POST['id_button'] : NULL;

  $req = $bdd->prepare('INSERT INTO config_button2(button_name, button_link, button_hidden, id_button)
    VALUES(:button_name, :button_link, :button_hidden, :id_button)');
  $req->execute(array(
    'button_name' => $button_name,
    'button_link' => $button_link,
    'button_hidden' => $button_hidden,
    'id_button' => $id_button,
  ));
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
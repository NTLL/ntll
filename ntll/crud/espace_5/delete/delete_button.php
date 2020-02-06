<?php
require "../../../connect_bdd.php";
  $id = $_GET['del'];
  $sup = $bdd->prepare('DELETE FROM config_button5 WHERE id_button = :id');
  $sup->execute(array('id' => $id));
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
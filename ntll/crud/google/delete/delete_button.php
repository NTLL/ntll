<?php
require "../../../connect_bdd.php";
  $id = $_GET['del'];
  $sup = $bdd->prepare('DELETE FROM google_button WHERE id_button = :id');
  $sup->execute(array('id' => $id));
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
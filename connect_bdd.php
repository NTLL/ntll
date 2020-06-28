<?php
try
{
    // On se connecte à MySQL
$bdd = new PDO('mysql:host=127.0.0.1;dbname=ntll;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOexception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        print 'Erreur : '.$e->getMessage(). '<br />';
        die();
}
?>
<?php
try {
  $bdd = new PDO ( 'mysql:host=db650135960.db.1and1.com;dbname=db650135960','dbo650135960','Putaingdemerde33');
}
catch (PDOException $e)
{
  die ( ' Erreur : ' . $e->getMessage() );
}
?>

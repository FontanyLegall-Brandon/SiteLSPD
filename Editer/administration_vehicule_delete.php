<?php
include( "config.php" );
session_start();
if (isset($_SESSION['id'])) {
if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem'])) {

  $id = $_POST['deleteItem'];
  $count=$bdd->prepare("DELETE FROM vehicule WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
  header('Location: administration_vehicule.php?statut=2');

};
};

?>

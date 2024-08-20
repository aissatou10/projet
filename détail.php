<?php
include'header.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once'conn.php';
    $id = strip_tags($_GET['id']);
    $sql= 'select * from apprenants where id=:id';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $personne=$query->fetch();





}

?>


<div class="row">
<div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h5 class="card-title"><p>id:<?= $personne['id']?></p></h5>
    <p class="card-text"><p>nom:<?= $personne['nom']?></p></h5>
    <p class="card-text"><p>prenom:<?= $personne['prenom']?></p></p>
    <p class="card-text"><p>adresse:<?= $personne['adresse']?></p></p>
    <p class="card-text"><p>telephone:<?= $personne['tel']?></p></p>
    <a href="index.php" class="btn btn-primary">retour</a>
  </div>
</div>
</div>
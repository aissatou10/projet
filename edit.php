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
<a href="index.php" class="btn btn-info">retour</a>
    <div class="col-6">
    <div class="card bg-info m-3">
<form method="post" action="update.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="<?= $personne['nom']?>"required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" value="<?= $personne['prenom']?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" value="<?= $personne['adresse']?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tel" value="<?= $personne['tel']?>"required>
  </div>
  <button type="submit" class="btn btn-primary">modifier</button>
</form>
</div>
    
    </div>
</div>
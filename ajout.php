
<?php
include'header.php';

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['tel'])){

    require_once'conn.php';
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $adresse = strip_tags($_POST['adresse']);	
    $tel =strip_tags($_POST['tel']);
    
    $sql = 'INSERT INTO apprenants(nom, prenom, adresse, tel) VALUES(:nom, :prenom, :adresse, :tel)';
    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $query->bindValue(':tel', $tel, PDO::PARAM_STR);
    $query->execute();
    echo 'Apprenant ajouté avec succès';
    header('location:index.php');

}else{
    echo 'Veuillez remplir tous les champs';
 
}
?>

<div class="row">
<a href="index.php" class="btn btn-info">retour</a>
    <div class="col-6">
    <div class="card bg-info m-3">
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tel" required>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
    
    </div>
</div>
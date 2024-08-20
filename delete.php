<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once'conn.php';
    $id = strip_tags($_GET['id']);
    $sql= 'delete from apprenants where id=:id';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('location:index.php');




}

?>
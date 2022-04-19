<?php 
   
include('Connexion_PDO.php');
   


if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $image=$_POST['image'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $category = $_POST['category'];
  $sql = "UPDATE product SET id='$id', image='$image' , title='$title' , price='$price' ,category='$category' WHERE id=$id";
    $sth = $cnx->query($sql);
    header('location: Administrateur.php');
}


?>


  <?php if(isset($_POST['submit']) AND !empty($_POST['id']) AND !empty($_POST['image']) AND !empty($_POST['title']) AND !empty($_POST['price']) AND !empty($_POST['category'])) : ?>
      
    <?php
            $sql="INSERT INTO `product` (`id` , `image`,`title`,`price`,`category`) 
 Values ('$_POST[id]','$_POST[image]','$_POST[title]','$_POST[price]','$_POST[category]')";

      $sth=$cnx->query($sql);
      header('location: Administrateur.php');
  
 
  ?>
 
 <?php endif; ?> 




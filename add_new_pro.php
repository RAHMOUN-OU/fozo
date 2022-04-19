<?php 
$_SERVER = "localhost";
$usernam = "root";
$password = "";
$dbname = "fozo_shopping";

$conx = mysqli_connect($_SERVER , $usernam , $password ,$dbname);
// if(isset($_POST["submit1"])){
    if(!empty($_POST["id"]) && !empty($_POST["image1"]) && !empty($_POST["image2"]) && !empty($_POST["image3"]) && !empty($_POST["image4"]) && !empty($_POST["image5"]) &&   !empty($_POST["type"] ) && !empty($_POST["prix"]) && !empty($_POST["sexe"]) ){
        $id = $_POST["id"];
        $img1 =  $_POST["image1"];
        $img2 =  $_POST["image2"]; 
        $img3 =  $_POST["image3"]; 
        $img4 =  $_POST["image4"]; 
        $img5 =  $_POST["image5"]; 
        $type =  $_POST["type"];
        $prix = $_POST["prix"];
        $sexe = $_POST["sexe"];
        $query = "insert into produits (id,type,sexe,prix,pic1,pic2,pic3,pic4,pic5) values 
        ( '$id','$type','$sexe','$prix', '$img1','$img2','$img3','$img4','$img5')";

        $run = mysqli_query($conx,$query) or die(mysqli_error());
        
        if($run){
            echo "oparition add new pr is succeful";
            header('location:shop.html');
        }
        else{
            echo "oparition add new pro  isn t succeful";
        }
    }
// }











?>
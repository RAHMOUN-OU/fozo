<?php

// echo "ur first name is </br>" .$_POST["first_name"]. "</br>";
// echo "ur last name is</br>" .$_POST["last_name"]. "</br>";
// echo "ur favorite style </br>";
// if(empty($_POST["fashion_style"]))
// {echo "didn t choose ur favorite style";}
// else
// {$allele = implode("-",$_POST["fashion_style"]);
//     echo $allele .'</br>';}
$_SERVER = "localhost";
$usernam = "root";
$password = "";
$dbname = "fozo_shopping";
$conn = mysqli_connect($_SERVER , $usernam , $password ,$dbname); 

if(isset($_POST['submit'])){
    if(!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["mail"] ) && !empty($_POST["age"]) && !empty($_POST["fashion_style"]) && !empty($_POST["text"]) && !empty($_POST["passw"]) && !empty($_POST["passw1"])){
        $allele = implode("-",$_POST["fashion_style"]);
        $first = $_POST["first_name"];
        $last = $_POST["last_name"];   
        $mail = $_POST["mail"];
        $age = $_POST["age"];
        $text = $_POST["text"];
        $pass = mysqli_real_escape_string($conn, ($_POST['passw']));
        $pass1 =  mysqli_real_escape_string($conn, ($_POST['passw1']));

        $select = mysqli_query($conn, "SELECT * FROM `fozo_form` WHERE mail = '$mail' AND pass1 = '$pass'") or die('query failed');
        
        if(mysqli_num_rows($select) > 0){
        echo "user already exist!";
         }
         else{
            $query = "insert into fozo_form (first_name,last_name,mail,age,favorite_style,pass1,pass2,some_oubout_client) values 
            ( '$first','$last','$mail','$age', '$allele','$pass','$pass1','$text')";
            mysqli_query($conn,$query ) or die('query failed');
             header('location:shop.php');
         }

    }
}



?>
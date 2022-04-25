<?php
session_start();
include('Connexion_PDO.php');
$_GLOBALS['globale1']=0;

$_GLOBALS['globale2']=0;



   $pass="";
 $last_name ="";


if(isset($_POST['submit_account'])){


  global  $pass;
  $pass=$_POST["password"];
   global  $last_name;
   $last_name=$_POST["last_name"];

      $select = "select * from `fozo_form`";



       $qr = $cnx->query($select);

 $result = $qr->fetchAll(PDO::FETCH_ASSOC);

$bool="false";
       foreach($result as $row)
       {
           if($row['pass1']==($pass) and $row['last_name']==$last_name){

            if(isset($_SESSION["shopping_cart"]))  {
                
                $count = count($_SESSION["shopping_cart"]);  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  {
                  
                    $_GLOBALS['globale1']=$_GLOBALS['globale1']+1;

                 $insertc = "insert into  `commandes`  values ( '$_GLOBALS[globale1]','$row[last_name]')";
 
                $qr = $cnx->query($insertc);
                $idcommande="select idcommande from `commandes` where idclient='$row[last_name]'";
                $qr1 = $cnx->query($idcommande);
                $reslt_commande =  $qr1->fetchAll(PDO::FETCH_ASSOC);
                $_GLOBALS['globale2']=$_GLOBALS['globale2']+1;
                $insertl =  "insert into `lignecommandes`  values ('$_GLOBALS[globale2]','$values[item_id]',' $_GLOBALS[globale1]')";
                $qr2 = $cnx->query($insertl);
  
              echo "<script>alert('command added');</script>";
                }


            }


         echo "goood";

            $bool="true";
            break;
           }
       }

       if($bool=="false"){
         header("location:inscription.html");
       
       }



}


















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"> 
</head>
<body>
    

<header>
<div class="nav-r"> <img src="ZAKA12.png" alt="">
    <!-- <div>ZOZO</div> -->
</div>

<div>
    <ul class="nav-bar-left">
        <li><ion-icon name="home"></ion-icon> <a class="active" href="index.php"> home  </a></li>
        <li><ion-icon name="card"></ion-icon> <a href="shop.php">shop</a></li>
        <li> <ion-icon name="contacts"></ion-icon> <a href="inscription.html">join us</a></li>
        <li> <ion-icon name="person"></ion-icon> <a href="Sign-In.php">admin</a></li>
        <li><ion-icon name="chatboxes"></ion-icon> <a href="contact.html">contact us </a></li>
        <li>
            <a href="panier.php">
                
                <ion-icon name="cart"></ion-icon>
         </a>
        </li>


    </ul>
</div>
</header>




<section>


<center>
          <div style=" border: 0px solid black; width: 10cm; height: 15cm; margin-top: 9%;">
              <center><img  src="ZAKA12.png" alt="" style="width: 6cm;">  <br> <br>
                <H2>Please Sign in</H2>
                <div id="er" style="width : 4cm; height: 1cm;"></div>
               </center> <p></p>
           <form action="#" method="post">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="your name.." name="last_name">
              </div> 
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" placeholder="your password.." name="password">
              </div> <br>
              <input type="submit" class="btn btn-primary" value="Sign in" name="submit_account" style="width: 7cm;">

<br><p></p>

           </form>
           <a href="inscription.html"  style=' text-decoration: none; '>    <input type="submit" class="btn btn-primary" value="create account" style="width: 7cm;"> </a>
           <br><p></p>
           <span style="color: rgb(101, 105, 109);"> ©FOZO 2022–2023 </span>
          </div>
      </center>
</section>





<footer>
        <div class="footer-l">
            <div class="col">
                <img style="height: 70px; width: 90px;" src="ZAKA12.png" alt="">
                <h4>contact</h4>
                <p> <strong>adresse:</strong> guzalzozlo-rub istabmbul turkey</p>
                <p> <strong>phone:</strong> 06******</p>
                <p>
                    <strong>mail:</strong> its.o-z-o-u@gmail.COM
                </p>
            </div>

            <div class="follow">
                <h1>follow us</h1>
                <ul>
                    <li>
                        <a href="https://www.instagram.com/its_rahmoun/">  <img style="width: 40px;height: 40px;padding-left: 6px;" src="instagram.png" alt="">   </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/@rahmoun_osm"></a><img style="width: 40px;height: 40px;padding-left: 6px;" src="tiktok.png" alt=""></li>

                    <li>
                        <a href="https://www.facebook.com/rahmoun.oussama.1"></a><img style="width: 40px;height: 40px; padding-left: 5px;" src="facebook.png" alt=""></li>
                    <li>
                        <a href="https://github.com/"></a><img style="width: 40px;height: 40px; padding-left: 5px;" src="github-logo-silhouette-in-a-square.png" alt=""></li>
                </ul>

            </div>

        </div>
        <div class="footer-r">
            <div class="about">
                <h1>about</h1>
                <p>about us</p>
                <p>tems condition</p>
                <p>contact us</p>
                <p>privacy policy</p>
            </div>
            <div class="app">
                <h1>install app</h1>
                <div class="play-iso">
                    <img style="width: 50px; height: 50px;" src="google-play.png" alt="">
                    <img style="width: 50px; height: 50px;" src="app-store.png" alt="">
                </div>
                <div class="money">

                    <h1>secured paymen tgatways</h1>
                    <div class="money-c">
                        <img style="width: 50px; height: 50px;" src="paypal.png" alt="">
                        <img style="width: 50px; height: 50px;" src="mastercard.png" alt="" sizes="" srcset="">
                    </div>
                </div>

            </div>


        </div>

    </footer>



</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</html>


<style>
            
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px 80px;
                background: #e3e6f3;
                box-shadow: 0px 5px 20px black;
                position: sticky;
                z-index: 999;
                top: 0%;
                left: 0%;
            }
            
            .nav-r {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .nav-r img {
                height: 1.5cm;
                width: 2.5cm;
            }
            
            .nav-r div {
                padding-left: 20px;
                color: black;
                font-size: 20px;
                font-weight: 900;
                font-family: 'Courier New', Courier, monospace;
            }
            
            .nav-r:hover div {
                text-shadow: 0px 5px 15px orange;
                font-size: 22px;
            }
            
            .nav-bar-left {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .nav-bar-left li {
                list-style: none;
                padding: 0px 20px;
            }
            
            .nav-bar-left:last-child img {
                height: 30px;
                width: 30px;
            }
            
            .nav-bar-left li a {
                text-decoration: none;
                font-size: 20px;
                font-weight: 600;
                color: #1a1a1a;
            }
            
            ul li::after {
                content: "";
                background: orange;
                width: 0%;
                height: 2px;
                transition: 0.5s;
                display: block;
                margin: auto;
            }
            
            ul li::before {
                content: "";
                background: orange;
                width: 0%;
                height: 2px;
                transition: 0.5s;
                display: block;
                margin: auto;
            }
            
            ul li:hover::after {
                width: 100%;
            }
            
            ul li:hover::before {
                width: 100%;
            }
            










            
            
            footer {
                margin-top:100px;
                display: flex;
                flex-direction: row;
                margin-top: 20px;
                background-color: #703d21;;
                border: 1px solid #1a1a1a;
                box-shadow: 0px 1px 10px black;
                color: #cce7d0;
            }
            
            .footer-l {
                width: 40%;
            }
            
            .col h4 {
                padding-top: 10px;
                padding-bottom: 10px;
                font-family: 'Courier New', Courier, monospace;
                font-size: 20px;
                font-weight: 800;
            }
            
            .follow h1 {
                font-size: 16px;
                padding-top: 10px;
                text-align: center;
                padding-bottom: 7px;
            }
            
            .follow li {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
            }
            
            .follow {
                width: 100px;
                margin: 10px;
            }
            
            ul {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
            }
            
            .footer-r {
                margin-left: 20px;
                display: flex;
                justify-content: space-between;
                flex-direction: row;
            }
            
            .footer-r .about {
                margin: 30px;
                padding-right: 30px;
            }
            
            .footer-r .app {
                padding: 30px;
            }
            
            .app h1 {
                padding-bottom: 10px;
            }




</style>
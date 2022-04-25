<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "fozo_shopping");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_POST["hidden_id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_POST["hidden_id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"], 
                     'item_quantite'          =>     $_POST["hidden_quantite"],  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_POST["hidden_id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantite'          =>     $_POST["hidden_quantite"],   
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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





           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center"> Shopping Cart</h3><br />  
               



                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table  class="table table-bordered">  
                          <tr>  
                               <th width="35%">Item Name</th>  
                               <th width="20%">Price</th> 
                               <th width="5%">id product </th> 
                               <th width="5%"> quantite </th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td>MAD <?php echo $values["item_price"]; ?></td> 
                               <td> <?php echo $values["item_id"]; ?></td>
                               <td> <?php echo $values["item_quantite"]; ?></td>


                               <td>MAD <?php echo number_format( $values["item_quantite"]* $values["item_price"], 2); ?></td>  
                               <td><a href="panier.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantite"]* $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">MAD <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br /> 
           
           
<form action="validation_cl.php"> <input  style="margin-left: 46%;  box-shadow: 0px px 2px black;  background-color: rgb(22, 197, 168); transform: scale(1.4); " type="submit" name="validation_cart" value=" validation"> </form>


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

      body{
          background: #e3e6f3;
      }
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

<?php 
include('Connexion_PDO.php');
$idp = $_GET['prodid'];
 $sql = "SELECT * FROM  `product` WHERE id='$idp'";

 $qr=$cnx->query($sql);


 
$result = $qr->fetchAll(PDO::FETCH_ASSOC);


 if (count($result) == 1 ) {
    foreach ($result as $row){ 
         $img=$row['image'];
         $price=$row['price'];
         $title=$row['title'];
        $idproduct=$row['id'];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single_products_</title>
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

    <section id="prod_d" class="section1">
    <div class="single_img">
        <img src=" <?php echo $img ; ?>  " width="100%" id="main_img" alt="">
       
        
    </div>

    <div class="single_pro_d">
<h3> <?php echo $title ; ?> </h3>
<h2> prix : <?php echo $price ;  ?> MAD </h2>

    <select  name="select_size_of_pro" id="select_size_of_pro">
        <option value="">select ur size</option>
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        
        
        </select>

<form action="panier.php" method="post">


<input type="hidden"  name="hidden_id"  value="<?php echo $idproduct ; ?>">
<input type="hidden"  name="hidden_price"  value="<?php echo $price ; ?>">
<input type="hidden"  name="hidden_name"  value="<?php echo $title ; ?>">

        <input class="quantite"  name=' hidden_quantite' type="number" value="1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veritatis rem, eaque dolores ullam nulla
            
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia molestiae animi fuga. Quo cum animi, voluptatem unde corrupti corporis? Id deserunt fugit tempore omnis quibusdam adipisci a minus est blanditiis!
            voluptates exercitationem reiciendis odit in esse eum accusantium delectus! Nesciunt facilis ipsam incidunt facere officia.</p>
        <input type="submit" value="add to cart" name='add_to_cart' >


</form>



    </div>
<?php }}?>
    </section>

 

    <section class="some-prod">
        <h1>some of ours products</h1>
        <p>summer collection new designe</p>
        <div class="cont-prod">
            <div class="product ">
                <img class="img-pro" src="img/products/f7.jpg" alt="">
                <div class="desc">
                    <span>gucci</span>
                    <h5>T-shirt</h5>
                    <div class="start">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">


                    </div>
                    <h4>180 MAD</h4>
                    <a href="panier.html"> <img style="width: 20px;
                    height: 20px;
                    
                    border-radius: 5px;
                    position: absolute;
                    bottom: 5%;
                    left: 90%;
                    " src="shop_icons.png" alt=""></a>
                </div>
            </div>
            <div class="product">
                <img class="img-pro" src="img/products/f6.jpg" alt="">
                <div class="desc">
                    <span>prada</span>
                    <h5>T-shirt</h5>
                    <div class="start">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">

                    </div>
                    <h4>1900 MAD</h4>
                    <a href="panier.html"> <img style="width: 20px;
                    height: 20px;
                    
                    border-radius: 5px;
                    position: absolute;
                    bottom: 5%;
                    left: 90%;
                    " src="shop_icons.png" alt=""></a>
                </div>
            </div>
            <div class="product">
                <img class="img-pro" src="img/products/f7.jpg" alt="">
                <div class="desc">
                    <span>jacobs</span>
                    <h5>T-shirt</h5>
                    <div class="start">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">

                    </div>
                    <h4>160 MAD</h4>
                    <a href="panier.html"> <img style="width: 20px;
                    height: 20px;
                    
                    border-radius: 5px;
                    position: absolute;
                    bottom: 5%;
                    left: 90%;
                    " src="shop_icons.png" alt=""></a>
                </div>
            </div>
        </div>

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




<script> let mainimg = document.getElementById("main_img");
    let smallimg = document.getElementsByClassName("small_img");
    
    smallimg[0].onclick= function(){
        mainimg.src=smallimg[0].src;
    }
    smallimg[1].onclick= function(){
        mainimg.src=smallimg[1].src;
    }
    smallimg[2].onclick= function(){
        mainimg.src=smallimg[2].src;
    }
    smallimg[3].onclick= function(){
        mainimg.src=smallimg[3].src;
    }
     </script>



<style>

* {
    padding: 0%;
    margin: 0%;
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

#prod_d{
margin: 20px;
display: flex;
justify-content: space-between;
flex-direction: row;
}

#prod_d .single_img{

    width: 40%;
    height: 50px;
}

.gr_img{
    display: flex;
    justify-content: space-between;
}
.group_img1{
    border: 3px solid #3e6962;
    box-sizing: border-box;
    border-radius: 12px;
}
#main_img{
    border: 3px solid #3e6962;
    box-sizing: border-box;
    border-radius: 40px;  
}
#main_img:hover{
    box-shadow: 1px 0px 10px black;
    opacity: 0.96;
}
.group_img1:hover{
    box-shadow: 1px 0px 10px black;
    opacity: 0.8;
}


.single_pro_d{
    width: 45%;
}
.single_pro_d h3{
    text-align: left;
    padding-top: 40px;
    font-size: 200%;
    padding-bottom: 20px;
}
.single_pro_d h2{
    text-align: left;
    padding-bottom: 15px;
}
form{
    display: flex;
    flex-direction: column;
}

#select_size_of_pro{
    width: 60%;
    outline: none;
    height: 30px;
    background-color: #cf8d29;
    text-align: center;
    border-radius: 12px;
}
.quantite{
    margin-top: 20px;
    height: 20px;
    width: 10%;
    background-color: #cf8d29;
    outline: none;
    margin-bottom: 15px;
    border-radius: 12px;
    text-align: center;
}
form p{
    margin-bottom: 16px;
    letter-spacing: 2px;
}

form button{
    background-color: #cf8d29;
    text-align: center;
    width: fit-content;
    padding: 6px;
    outline: none;
    border-radius: 12px;
}

form button:hover{
    background-color: #ec9615;
}


  
footer {
    display: flex;
    flex-direction: row;
    margin-top: 20px;
    background-color: #1a1a1a;
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

.section1{
    padding-bottom: 22%;
}


.some-prod {
    text-align: center;
}

.cont-prod {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
}

.cont-prod .product {
    width: 23%;
    border: 1px solid #e3e6f3;
    border-radius: 20px;
    box-shadow: 0px 0px 10px gray;
}

.cont-prod .product:hover {
    box-shadow: 0px 10px 20px gray;
    opacity: 0.9;
}

.img-pro {
    width: 200px;
    height: 200px;
    border-radius: 50px;
    margin: 5px;
}

.start img {
    width: 15px;
    height: 15px;
}

.product {
    text-align: center;
    margin: 50px;
}

.product .desc {
    text-align: center;
    padding: 10px 7px;
}

.desc .span {
    color: #060606;
    font-size: 12px
}

.desc h5 {
    padding-top: 8px;
    color: #1a1a1a;
    font-size: 15px;
}

.desc {
    position: relative;
}


</style>
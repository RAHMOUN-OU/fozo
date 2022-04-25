
<?php 
// connection to my database fozo_shoppin  products table

$_SERVER='localhost';
$user_admin='root';
$pass_admin='';
$data_base='fozo_shopping';

$connection = mysqli_connect($_SERVER,$user_admin,$pass_admin,$data_base);

if($connection){
    echo "connection goooooood ";
}
else{

    echo "opeartion conn isnt succussful";
}

$sel = "select* from product";

$qr = $connection->query($sel);



$qr1 = $connection->query($sel);
$qr2 = $connection->query($sel);
$qr3 = $connection->query($sel);
$qr4 = $connection->query($sel);
$qr5 = $connection->query($sel);
$qr6 = $connection->query($sel);
$qr7 = $connection->query($sel);
$qr8 = $connection->query($sel);
$qr9 = $connection->query($sel);
$qr10 = $connection->query($sel);
$qr11 = $connection->query($sel);
$qr12 = $connection->query($sel);
$qr13 = $connection->query($sel);
$qr14 = $connection->query($sel);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    
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
    <div class="logo_">

        <section class="logo-back">

            <div class="sous-catg">
                <a href="#">women outfits</a>
                <ul>
                    <li><a href="#F_robess">Robes</a></li>
                    <li><a href="#F_Pontalons">Pontalons</a></li>
                    <li><a href="#F_Blazers">Blazers</a></li>
                    <li><a href="#F_T-Shirt">T-Shirt</a></li>
                    <li><a href="#F_Hoodies">Hoodies</a></li>

                </ul>
            </div>

            <div class="sous-catg">
                <a href="#">man outfits</a>
                <ul>
                    <li><a href="#H_T-Shirt">T-Shirt</a></li>
                    <li><a href="#H_Coats">Coats</a></li>
                    <li><a href="#H_Pontalons">Pontalons</a></li>
                    <li><a href="#H_Centures">centures</a></li>
                    <li><a href="#H_Jeans">Jeans</a></li>
                </ul>

            </div>
            <div class="sous-catg">
                <a href="#"> child outfits</a>
                <ul>
                    <li><a href="#E_T-Shirt">T-Shirt</a></li>
                    <li><a href="#E_Coats">Coats</a></li>
                    <li><a href="#E_Pontalons">Pontalons</a></li>
                    <li><a href="#E_Centures">Centures</a></li>
                    
                </ul>
            </div>


        </section>

        <section class="pro-1">




<div id="F_robess" class="globel_scroll">


    <h1 id="robes" > robes </h1>
    <span class="flesh-scrool" > </span>
    <div class="scroll">
 
<div class="continer">
<?php  while($row = $qr->FETCH_ASSOC() ){  

 if($row['category']=='F_robess'){
      ?>
      <form action='panier.php' method='POST'>
      <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div  class="product">
        <img class="img-pro" src="<?php  echo $row['image'] ?>" alt="">
        <div class="desc">
            <span>nick</span>
            <h5  > <?php echo $row['title'] ?> </h5>
            <div class="start">
                <img src="/star.png" alt="">
                <img src="/star.png" alt="">
                <img src="/star.png" alt="">
                <img src="/star.png" alt="">
            </div>
            <h4  > <?php  echo $row['price']  ?></h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            
            
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>
</div>
    </div>

</div>





<div id="F_Pontalons" class="globel_scroll">
    <h1 id="robes"> Pontalons </h1>
    <span class="flesh-scrool"> </span>
    <div class="scroll">
        


<div class="continer">
<?php 
 while($row = $qr1->FETCH_ASSOC() ){  
 if($row['category']=='F_Pontalons'){ 
      ?> 
 <form action='panier.php' method='POST'>
 <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src="<?php echo $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo $row['title'] ?> </span>
            <h5> <?php echo $row['category'] ?>  </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>




</div>

</div>

</div>









<div id="F_Blazers" class="globel_scroll">
    <h1 id="robes"> Blazers</h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
    <div class="continer">

    <?php while($row = $qr2->FETCH_ASSOC() ){ 
if($row['category']=='F_Blazers'){ ?>
     <form action='panier.php' method='POST'>
     <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span>  <?php echo  $row['title'] ?> </span>
            <h5>  <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>


</div>
        
    </div>

</div>




<div id="F_T-Shirt" class="globel_scroll">
    <h1 id="robes"> T-Shirt </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">

<?php 
 while($row = $qr3->FETCH_ASSOC() ){ 
 if($row['category']=='F_T-Shirt'){ ?>
     <form action='panier.php' method='POST'>
     <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    
    <div   class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?></span>
            <h5><?php echo  $row['category'] ?></h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>

    
</div>
</div>
</div>





<div id="F_Hoodies" class="globel_scroll">
    <h1 id="robes"> Hoodies </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        
<div class="continer">

<?php while($row = $qr4->FETCH_ASSOC() ){ 

if($row['category']=='F_Hoodies'){ ?>
     <form action='panier.php' method='POST'>
     <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src="  <?php echo  $row['image'] ?> " alt="">
        <div class="desc">
            <span><?php echo  $row['title'] ?></span>
            <h5><?php echo  $row['category'] ?></h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?> 


</div>
</div>
</div>




<div id="H_T-Shirt" class="globel_scroll">
    <h1 id="robes"> T-Shirt </h1>
    <span class="flesh-scrool"> </span>
    <div class="scroll">

<div class="continer">

<?php
while($row = $qr5->FETCH_ASSOC() ){ 
     if($row['category']=='H_T-Shirt'){ ?>
         <form action='panier.php' method='POST'>
         <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src="  <?php echo  $row['image'] ?> " alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4>  <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?> 



</div>


    </div>


</div>





<div id="H_Coats" class="globel_scroll">
    <h1 id="robes"> Coats </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">
<?php while($row = $qr6->FETCH_ASSOC() ){ 
 if($row['category']=='H_Coats'){ ?>
          <form action='panier.php' method='POST'>
          <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?> 


</div>


    </div>


</div>




<div id="H_Pontalons" class="globel_scroll">
    <h1 id="robes"> Pontalons </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">
<?php
while($row = $qr7->FETCH_ASSOC() ){ 
if($row['category']=='H_Pontalons'){ ?>
          <form action='panier.php' method='POST'>
          <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span><?php echo  $row['title'] ?></span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4>  <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?> 


</div>
    

    </div>


</div>


<div id="H_centures" class="globel_scroll">
    <h1 id="robes"> centures </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">
<?php 
while($row = $qr8->FETCH_ASSOC() ){ 
  if($row['category']=='H_centures'){ ?>
            <form action='panier.php' method='POST'>
            <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?> " alt="">
        <div class="desc">
            <span><?php echo  $row['title'] ?></span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?> 
</div>
        

    </div>


</div>




<div id="H_Jeans" class="globel_scroll">
    <h1 id="robes"> Jeans </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">

<?php 
while($row = $qr9->FETCH_ASSOC() ){ 
if($row['category']=='H_Jeans'){ ?>
            <form action='panier.php' method='POST'>
            <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src="<?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?>  </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>
</div>
        
    </div>


</div>




    

<div id="E_T-Shirt" class="globel_scroll">
    <h1 id="robes"> T-Shirt </h1>
    <span class="flesh-scrool"> </span>
    <div class="scroll">
        


<div class="continer">

<?php 
while($row = $qr10->FETCH_ASSOC() ){ 
  if($row['category']=='E_T-Shirt'){ ?>
            <form action='panier.php' method='POST'>
            <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >

    <div class="product">
        <img class="img-pro" src="<?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5>  <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4>  <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>

    <?php }} ?>

</div>
        

    </div>


</div>





<div id="E_Coats" class="globel_scroll">
    <h1 id="robes"> Coats </h1>
    <span class="flesh-scrool"> </span>
    <div class="scroll">
        


<div class="continer">

<?php 
while($row = $qr11->FETCH_ASSOC() ){ 
  if($row['category']=='E_Coats'){ ?>
            <form action='panier.php' method='POST'>
            <a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src="<?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span>  <?php echo  $row['title'] ?> </span>
            <h5> <?php echo  $row['category'] ?>  </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>

    <?php }} ?>


</div>
        
    </div>



</div>







<div id="E_Pontalons" class="globel_scroll">
    <h1 id="robes"> Pontalons </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">
        


<div class="continer">

<?php 
while($row = $qr12->FETCH_ASSOC() ){ 
  if($row['category']=='E_Pontalons'){ ?>

<form action='panier.php' method='POST'>
<a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >
    <div class="product">
        <img class="img-pro" src=" <?php echo  $row['image'] ?> " alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5>  <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>
    </a>
    </form>
    <?php }} ?>

</div>
    
    </div>

</div>



<div id="E_Centures" class="globel_scroll">
    <h1 id="robes"> Centures </h1>
    <span class="flesh-scrool">  </span>
    <div class="scroll">

<div class="continer">
<?php 
while($row = $qr13->FETCH_ASSOC() ){ 
  if($row['category']=='E_Centures'){ ?>

<form action='panier.php' method='POST'>

    
<a href="s_prod.php?prodid=<?php  echo $row['id'] ;?>" >


<div class="product">
        <img class="img-pro" src="<?php echo  $row['image'] ?>" alt="">
        <div class="desc">
            <span> <?php echo  $row['title'] ?> </span>
            <h5> <?php echo  $row['category'] ?> </h5>
            <div class="start">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
            <h4> <?php echo  $row['price'] ?> </h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
            <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />  
            <input class="submit" type='submit' name='add_to_cart' value="add to cart" > 
            </div>
    </div>


</a>

 
    </form>
    <?php }} ?>


</div>

    </div>

</div>




        </section>

    </div>

 <section class="nest_pageof_products">
<a href="#">1</a>
<a href="#">2</a>
<a href="#">3</a>
<a  href="#">
<ion-icon name="send"></ion-icon>
</a>
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
            
            .logo_ {
                display: flex;
                justify-content: space-between;
                flex-direction: column;
                margin: 50px;
            }
            
            .logo_ {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .logo_ .logo-back {
                width: 17%;
                height: 125vh;
                margin-top: 50px;
                display: flex;
                flex-direction: column;
                background-color: rgb(34, 30, 30);
                box-shadow: black 0PX 1PX 10px;
            }
            
            .sous-catg {
                padding: 20px 30px;
                display: flex;
                justify-content: space-between;
                flex-direction: column;
                position: relative;
                margin-bottom: 200px;
            }
            
            .sous-catg ul {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 104%;
                left: 31%;
                display: inline;
            }
            
            .sous-catg ul li a {
                color: aquamarine;
                opacity: 0.7;
            }
            
            .sous-catg a {
                text-decoration: none;
                font-weight: 900;
                font-size: 19px;
                font-family: 'Courier New', Courier, monospace;
                color: #cce7d0;
                padding-bottom: 10px;
                text-shadow: #cce7d0 0px 3px 30px;
            }
            
            .sous-catg a:hover {
                text-shadow: #e3e6f3 0px 3px 10px;
            }
            .pro-1{
                width: 80%;
                padding-left: 10px;
                margin: 30px;
                padding-top: 17px;
            }


            .globel_scroll{
                padding-bottom: 30px;
            }
            .scroll{
                
                display: block; 
                overflow-x: scroll;
                width: 100%;
                box-sizing: border-box;
                background-color: #058078ca;
                border: 1px solid #1ad1c5;
                box-shadow: 0px 1px 10px #6a8f8c ;
                
                
                
            }

            #robes{
                
                
                text-align: center;
                padding-top: 10px;
                font-family: 'Courier New', Courier, monospace;
                font-weight:900 ;
                text-shadow: 1px 0px 7px #a08989;
                color: #043835;
            }
            .flesh-scrool{
                padding-left: 37.2%;
                font-size: 20px;
                font-weight: 800;
                color: #088178;
            }
            


        
            .scroll::-webkit-scrollbar{
                display: none;
            }
            
            .continer{
                display: block;
                white-space: nowrap;
            }


             .product {
                width: 27%;
                border: 1px solid #52545e;
                border-radius: 20px;
                box-shadow: 0px 0px 10px gray;
                display: inline-block;
                margin-right: 10px;
                text-align: center;
                background-color: #cce7d0;
            }
            
             .product:hover {
                box-shadow: 0px 10px 20px rgb(153, 114, 114);
                opacity: 0.8;
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
.submit{           
     background-color: rgb(71, 143, 143);
    margin-top: 5px;   
    font-size: 10px;
    border-radius: 4px;
    transform: scale(1.2);
}
.submit:hover{
    transform: scale(1.3);
    transition: 0.4s;
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
            .nest_pageof_products{
                text-align: center;
            }
            .nest_pageof_products a{
text-decoration: none;
background-color: #088178;
padding: 15px 20px;
color: #e3e6f3;
font-weight: 500;
font-size: 16px;


            }

            .nest_pageof_products a:hover{
                box-shadow: 0px 2px 16px black;
            }
            






            @media(max-width:909px) {
                .nav-bar-left {
                    display: flex;
                    flex-direction: column;
                }
                .logo-back {
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                }
                .logo-back button {
                    width: fit-content;
                }
                .logo-back a {
                    font-size: 15px;
                }
                .cont-prod {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                .img-pro {
                    width: 70%;
                    height: 70%;
                }
                .footer-r {
                    margin-left: 5px;
                }
                .footer-r .about {
                    margin: 10px;
                    padding-right: 10px;
                }
                .footer-r .app {
                    padding: 10px;
                }
                .app h1 {
                    padding-bottom: 10px;
                }

                .product .start img {

                width: 10px;
                height: 10px;
                }

                .globel_scroll .flesh-scrool{
font-size: 10px;
padding-left: 29%;

                }
                .logo-back li a {
                    font-size: 10px;
                }
                .logo-back ul{
                    list-style: none;
                }
                .sous-catg a{
                    font-size: 10px;
                }

            }
</style>
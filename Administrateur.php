<?php   
?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
        <div class="nav-r"> <img src="/1/R.png" alt="">
            <div>ZOZO</div>
        </div>

        <div>
            <ul class="nav-bar-left">
                <li><a class="active" href="index.html">home</a></li>
                <li><a href="shop.html">shopp</a>
                </li>
                <li><a href="inscription.html">join us</a></li>
                <li><a href="Administrateur.php">about</a></li>
                <li><a href="contact.html">contact us </a></li>
                <li>
                    <a href="panier.html"><img src="/shopping-bag.png" alt=""> </a>
                </li>


            </ul>
        </div>
    </header>
<div>
    <h1>
        Create new Product
    </h1>
   <div>
<form  action="add_new_pro.php" method="post">

   <strong>ID product</strong> <p></p>

   <input class="form-control" type="number" placeholder="ID : 1.."  name="id"> <p></p>

   <strong>product image </strong> <p></p>
   
  <input class="form-control form-control-lg"  type="file" name="image[]">
  <input class="form-control form-control-lg"  type="file" name="image[]">
  <input class="form-control form-control-lg"  type="file" name="image[]">
  <input class="form-control form-control-lg"  type="file" name="image[]">
  <input class="form-control form-control-lg"  type="file" name="image[]">

</div> <p></p>

   <strong>Product type</strong> <p></p>

   <input name="type" class="form-control" type="text" placeholder="your product.." > <p></p>

   <strong>Price</strong> <p></p>

   <input class="form-control" type="text" placeholder="EX:153DH.." name="prix"> <p></p>

   <input style="width: 100%; padding:10px; margin-bottom:5px;" type="text" name="sexe" placeholder="enter the sexe of users prods">

   <input  class="btn btn-primary" type="submit" value="send it server" name="Submit1">
   </form>
</div>
</body>
</html>







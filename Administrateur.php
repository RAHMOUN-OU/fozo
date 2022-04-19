
   <?php   
  include('Connexion_PDO.php');
  include('insertion.php');
    // initialize variables pour search
    $search=false ;
    if (isset($_POST['search']) AND !empty($_POST['sproduct']) ) {
        $search = true;
        $searchproduct=$_POST['sproduct'];
        $sql = "SELECT * FROM `product` WHERE title Like '%$searchproduct%' ";
        $qr = $cnx->query($sql);
    
        $resultsearch = $qr->fetchAll();
    
    }

  	// initialize variables pour update
	$title = "";
	$price = "";
	$id = "";
	$update = false;
    $category="";
    // pour update
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM `product` WHERE id=$id";
    $qr = $cnx->query($sql);
    $result = $qr->fetchAll();
    
    if (count($result) == 1 ) {
        $id = $result[0]['id'];
        $image = $result[0]['image'];
        $title = $result[0]['title'];
        $price = $result[0]['price'];
        $category= $result[0]['category'];
    }
}
// Pour Delete
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql =  "DELETE FROM `product` WHERE id=$id";
    $sth = $cnx->query($sql);
    header('location: Administrateur.php');
}
?>

      
   <?php  
$sql = "SELECT * FROM `product` ";
//Recherche des données
$sth = $cnx->query($sql);
// On voudrait les résultats sous la forme d’un tableau associatif
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="Administrateur.css">
    <title>Document</title>
    <style>
        h1 , strong { 
    color : rgb(0, 110, 255);
           }
    </style>
</head>
<body>
<header>
        <div class="nav-r"> <img src="/1/R.png" alt="">
            <div>ZOZO</div>
        </div>

        <div>
            <ul class="nav-bar-left">
                <li><a class="active" href="index.html">home</a></li>
                <li><a href="shop.php">shop</a>
                </li>
                <li><a href="inscription.html">join us</a></li>
                <li><a href="Administrateur.php">admin</a></li>
                <li><a href="contact.html">contact us </a></li>
                <li>
                    <a href="panier.html"><img src="/shopping-bag.png" alt=""> </a>
                </li>


            </ul>
        </div>
</header>



<div>

        <h1><hr><center>Search for a product</center></h1>


        <form  action="#" method="POST">
            <div class="input-group mb-3">
       <input type="text" class="form-control" placeholder="Search for a product" aria-label="Recipient's username" name="sproduct" >
         <input type=submit value="search" name="search" id="SR" style="background-color :  rgb(42, 211, 211);border-top-right-radius: 7px;
           border-bottom-right-radius: 7px;">
            </div>
            </form> <p></p>

            <table class="table">
    <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
    </table>

            <?php  if($search==true) : ?>
                    <?php foreach ($resultsearch as $row1){ ?>
                        <table class="table">
                            <tr>
                        <td><?php echo $row1['id']; ?></td>
                <td><img src=" <?php echo $row1['image']; ?>" alt="" style="width :4cm ; height : 3cm"></td>
                <td><?php echo $row1['title']; ?></td>
                <td><?php echo $row1['price'].'MAD'  ; ?></td>
                <td><?php echo $row1['category']; ?></td>
                <td>
                    <a href="Administrateur.php?edit=<?php echo $row1['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="Administrateur.php?del=<?php echo $row1['id']; ?>" class="del_btn">Delete</a>
                </td>
                     </tr>
                  </table>
                        <?php } ?> 
                           
              <?php endif ; ?>

    <h1>
       <hr> <center> Create new Product </center><hr>
    </h1>
   <div>
<form  action="insertion.php" method="post">
   <strong>ID product</strong> <p></p>
   <input class="form-control" type="text" placeholder="ID : 1.."  name="id" value="<?php echo $id ; ?>"> <p></p>
   <strong>product image </strong> <p></p>
  <input class="form-control form-control-lg"  type="file" name="image" value="<?php echo $image ; ?>">
</div> <p></p>
   <strong>Product Title</strong> <p></p>
   <input name="title" class="form-control" type="text" placeholder="your product.." value="<?php echo $title ; ?>"> <p></p>
   <strong> Price </strong> <p></p>
   <input class="form-control" type="text" placeholder="EX: 1555.." name="price" value="<?php echo $price  ; ?>"> <p></p>
      
   <strong> Category </strong> <p></p>
   <input class="form-control" type="text" placeholder=".." name="category" value="<?php echo $category  ; ?>"> <p></p>


   <?php if ($update == true): ?>
            <button class="btn btn-primary" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn btn-primary" type="submit" name="submit" >Save</button>
        <?php endif ?>
   </form>

   <h1>
       <hr> <center> Liste of Product </center><hr>
    </h1>  
              
        
    <table class="table">
    <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
    </table>
          
        

              
       
    <?php foreach ($result as $row){ ?>
        <table class="table">
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><img src=" <?php echo $row['image']; ?>" alt="" style="width :4cm ; height : 3cm"></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['price'] .'MAD' ;  ?></td>
            <td><?php echo $row['category']; ?></td>
			<td>
				<a href="Administrateur.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="Administrateur.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
        </table>
	<?php } ?> 


   
</div>
</body>
</html>




<style>

* {
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
        font-family: 'Courier New', Courier, monospace;
    }
    /* header style */
    
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
        height: 40px;
        width: 40px;
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

    .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #41c788;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #cf3b3b;
}
</style>
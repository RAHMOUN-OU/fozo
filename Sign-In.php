<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"> 
    <title>Sing-In</title>
    <style>
        body{ 
            background-color: rgb(201, 201, 201);
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
                <li><a class="active" href="index.php">home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="inscription.html">join us</a></li>
                <li><a href="Sign-In.php">admin</a></li>
                <li><a href="contact.html">contact us </a></li>
                <li>
                    <a href="panier.html"><img src="/shopping-bag.png" alt=""> </a>
                </li>


            </ul>
        </div>
</header>



      <center>
          <div style=" border: 0px solid black; width: 10cm; height: 15cm; margin-top: 9%;">
              <center><img  src="ZAKA12.png" alt="" style="width: 6cm;">  <br> <br>
                <H2>Please Sign in</H2>
                <div id="er" style="width : 4cm; height: 1cm;"></div>
               </center> <p></p>
           <form action="sign-in-traitement.php" method="post">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Votre email.." name="email">
              </div> 
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" placeholder="Votre password.." name="password">
              </div> <br>
              <center><input type="checkbox" id="R"> <label for="R">Remember me</label></center> <br>
              <input type="submit" class="btn btn-primary" value="Sign in" name="submit" style="width: 7cm;">
              <p></p> <br> <br>
              <span style="color: rgb(101, 105, 109);"> © 2022–2023 </span>
           </form>
          </div>
      </center>
</body>
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
                background: #d1d1d3;
                box-shadow: 0px 1px 2px black;
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
</style>
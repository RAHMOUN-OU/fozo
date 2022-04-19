<?php   
  include('Connexion_PDO.php');
?>
<?php  
$sql = "SELECT * FROM `admin_account` ";
//Recherche des données
$sth = $cnx->query($sql);
// On voudrait les résultats sous la forme d’un tableau associatif
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if(isset($_POST['submit']) AND !empty($_POST['email']) AND !empty($_POST['password']))  : ?>
 
      <?php foreach($result as $row) { ?>
          <?php  if(($_POST['email']==$row['admin']) AND ($_POST['password']==$row['pass'])) : ?>
               <?php header('Location: Administrateur.php');
                 break;   ?> 
                
                   <?php else : ?>
                        <script>  
                         <?php header('Location: Sign-In.php'); ?>
                        
                // document.getElementById('er').style="border : 1px solid green ; width: 4cm ; height : 1cm";
                // document.getElementById('er').innerText='ERREUR';
                
                        </script>
          <?php endif; ?>
             
      <?php } ?>  
      <?php  else : ?> 
        <?php header('Location: Sign-In.php'); ?>
<?php endif; ?>
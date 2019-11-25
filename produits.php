<html>
<head>
<?php 

  $limite = 2;
  $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
  $page = ($page <= 0 ? 1 :$page);
  $debut = ($page-1)*$limite;
 
?>

    <meta charset="utf-8" />
    <img class= "logo" src="../StyleOTD/LOGO-BKVIDEO.png" alt="">
		<link rel="stylesheet" href="../StyleOTD/style.css">
    <title>Produits</title>
    
</head>

<?php include "../templateOTD/header.php"; ?>

<div align="center">
  <h2>Produits</h2>
</div>

<?php include "../templateOTD/header2.php"; ?>

<article>
  <table>
    <?php
     require "../controlerOTD/controler.php";
     $produits = new Produits();
      echo "<tbody>";
        $produits = (empty($produits) ? $produits=array() : $produits);
        foreach($produits->ProdGlob() as $tabprod){
        
        echo "<form action='actOTD.php?action=produits' method='POST'>";
        
          echo "<tr>"
            
            ."<td>"."'$tabprod['lien']'"."</td>"
            ."<td>"."'$tabprod['nompro']'"."</td>"
            ."<td>"."'$tabprod['prix']'"."</td>"
            ."<td>". 
            "<input type='submit' name='action' value='Ajouter au panier'>"
            ."</td>".

          "</tr>";

        echo "</form>";
        }
      echo "</tbody>";

      //$nbPages = ceil($nbelementstotal / $limite);
      //if ($page > 1):
        //<img src = "chemin" width="">
    ?>
  </table>
</article>

<a href="?page=<?php echo $page - 1; ?>">Page précédente</a> 
— <?php //endif; ?>
<?php /*for ($i = 1; $i <= $nbPages; $i++):
?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor; ?>
<?php
if ($page < $nbPages):*/
?><a href="?page=<?php echo $page + 1; ?>">Page suivante</a>
<?php //endif; ?>

</html>
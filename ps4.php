<html>
<head>

  <meta charset="utf-8" />
  <img class= "logo" src="../StyleOTD/LOGO-BKVIDEO.png" alt="">
	<link rel="stylesheet" href="../StyleOTD/style.css">
  <title>Nouveautés</title>
    
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
        foreach($produits->ProdPS4() as $tabprod){
        
        echo "<form action='actOTD.php?action=ps4' method='POST'>";
        
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

<div class="conteneur">
  
</div>

</html>
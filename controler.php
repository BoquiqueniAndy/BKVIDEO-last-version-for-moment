<?php

include './modelOTD/model.php';

class Produits extends dbotd {

  function ProdGlob(){
    $req = ('SELECT nompro,prix,lien FROM Produits ORDER BY numprod ASC');
    $tval = array("lien","nompro","prix");
    $prog = $this->reqotd($req,$tval);
    return $prog;

  }




  function ProdPS3(){

    $req = ('SELECT nompro,prix,lien  FROM Produits 
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps3"');
    $tval = array("lien","nompro","prix");
    $prodps3 = $this->reqotd($req,$tval);
    return $prodps3;

  }
  function ProdPS3N(){

    $req = ('SELECT nompro,prix,lien  FROM Produits 
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps3" AND categorie LIKE"New1"');
    $tval = array("lien","nompro","prix");
    $prodps3 = $this->reqotd($req,$tval);
    return $prodps3;

  }
  function ProdPS3OI(){

    $req = ('SELECT nompro,prix,lien  FROM Produits 
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps3" AND categorie LIKE "OI1"');
    $tval = array("lien","nompro","prix");
    $prodps3 = $this->reqotd($req,$tval);
    return $prodps3;
  }
  function ProdPS3RM(){

    $req = ('SELECT nompro,prix,lien  FROM Produits 
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps3" AND categorie LIKE "RM1"');
    $tval = array("lien","nompro","prix");
    $prodps3 = $this->reqotd($req,$tval);
    return $prodps3;

  }




  function ProdPS4(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps4"');
    $tval = array("lien","nompro","prix");
    $prodps4 = $this->reqotd($req,$tval);
    return $prodps4;

  }
  function ProdPS4N(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps4" AND categorie LIKE "New2"');
    $tval = array("lien","nompro","prix");
    $prodps4 = $this->reqotd($req,$tval);
    return $prodps4;

  }
  function ProdPS4OI(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps4" AND categorie LIKE "OI2"');
    $tval = array("lien","nompro","prix");
    $prodps4 = $this->reqotd($req,$tval);
    return $prodps4;

  }
  function ProdPS4RM(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "ps4" AND categorie LIKE "RM2"');
    $tval = array("lien","nompro","prix");
    $prodps4 = $this->reqotd($req,$tval);
    return $prodps4;

  }




  function ProdPC(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "pc"');
    $tval = array("lien","nompro","prix");
    $prodpc = $this->reqotd($req,$tval);
    return $prodpc;
    
  }
  function ProdPCN(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "pc" AND categorie LIKE "New3"');
    $tval = array("lien","nompro","prix");
    $prodpc = $this->reqotd($req,$tval);
    return $prodpc;
    
  }
  function ProdPCOI(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "pc" AND categorie LIKE "OI3"');
    $tval = array("lien","nompro","prix");
    $prodpc = $this->reqotd($req,$tval);
    return $prodpc;
  
  }
  function ProdPCRM(){

    $req = ('SELECT nompro,prix,lien  FROM Produits  
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "pc" AND categorie LIKE "RM3"');
    $tval = array("lien","nompro","prix");
    $prodpc = $this->reqotd($req,$tval);
    return $prodpc;
  
  }
  
  


  function ProdXBOXONE(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme HAVING plateforme LIKE "xboxone"');
    $tval = array("lien","nompro","prix");
    $prodxboxone = $this->reqotd($req,$tval);
    return $prodxboxone;
    
  }
  function ProdXBOXONEN(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xboxone" AND categorie LIKE "New4"');
    $tval = array("lien","nompro","prix");
    $prodxboxone = $this->reqotd($req,$tval);
    return $prodxboxone;
    
  }
  function ProdXBOXONEOI(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xboxone" AND categorie LIKE "OI4"');
    $tval = array("lien","nompro","prix");
    $prodxboxone = $this->reqotd($req,$tval);
    return $prodxboxone;
    
  }
  function ProdXBOXONERM(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xboxone" AND categorie LIKE "RM4"');
    $tval = array("lien","nompro","prix");
    $prodxboxone = $this->reqotd($req,$tval);
    return $prodxboxone;
    
  }




  function ProdXBOX360(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme HAVING plateforme LIKE "xbox360"');
    $tval = array("lien","nompro","prix");
    $prodxbox360 = $this->reqotd($req,$tval);
    return $prodxbox360;
      
  }
  function ProdXBOX360N(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xbox360" AND categorie LIKE "New5"');
    $tval = array("lien","nompro","prix");
    $prodxbox360 = $this->reqotd($req,$tval);
    return $prodxbox360;
      
  }
  function ProdXBOX360OI(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xbox360" AND categorie LIKE "OI5"');
    $tval = array("lien","nompro","prix");
    $prodxbox360 = $this->reqotd($req,$tval);
    return $prodxbox360;
      
  }
  function ProdXBOX360RM(){

    $req = ('SELECT nompro,prix,lien  FROM Produits
    GROUP BY numprod,plateforme,categorie HAVING plateforme LIKE "xbox360" AND categorie LIKE "RM5"');
    $tval = array("lien","nompro","prix");
    $prodxbox360 = $this->reqotd($req,$tval);
    return $prodxbox360;
      
  }
  
}

?>
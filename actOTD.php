<?php
// Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 header("Cache-Control: no-cache");
 header("Pragma: no-cache");

//Dispatcheur
    try{

        if (isset($_REQUEST['action']))
        {

            require "./controlerOTD/controler.php";
            $produits = new Produits();

            if($_POST['action'] == 'produits'){
                $tabprod = $produits->ProdGlob();
                require "./VueOTD/produits.php";
            }
            



            if($_POST['action'] == 'panier'){
                include "./controlerOTD/Cpanier.php";
                $panier = new Panier();
                if(!in_array($action,array('ajout', 'suppression', 'refresh')))
                $erreur=true;

                //récuperation des variables en POST ou GET
                $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
                $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
                $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

                //Suppression des espaces verticaux
                $l = preg_replace('#\v#', '',$l);
                //On verifie que $p soit un float
                $p = floatval($p);

                //On traite $q qui peut etre un entier simple ou un tableau d'entier
                    
                if (is_array($q)){
                    $QteArticle = array();
                    $i=0;
                    foreach ($q as $contenu){
                        $QteArticle[$i++] = intval($contenu);
                    }
                }
                else
                $q = intval($q);
                require "./VueOTD/Vpanier.php";
            }




            if($_POST['action'] == 'ps3'){
                $tabprod = $produits->ProdPS3();
                require "./VueOTD/ps3.php";
            }

            if($_POST['action'] == 'ps4'){
                $tabprod = $produits->ProdPS4();
                require "./VueOTD/ps4.php";
            }

            if($_POST['action'] == 'pc'){
                $tabprod = $produits->ProdPC();
                require "./VueOTD/pc.php";
            }

            if($_POST['action'] == 'xboxone'){
                $tabprod = $produits->ProdXBOXONE();
                require "./VueOTD/xboxone.php";
            }

            if($_POST['action'] == 'xbox360'){
                $tabprod = $produits->ProdXBOX360();
                require "./VueOTD/xbox360.php";
            }




            if($_POST['action'] == 'New1'){
                $tabprod = $produits->ProdPS3N();
                require "./VueOTD/New1.php";
            }

            if($_POST['action'] == 'New2'){
                $tabprod = $produits->ProdPS4N();
                require "./VueOTD/New2.php";
            }

            if($_POST['action'] == 'New3'){
                $tabprod = $produits->ProdPCN();
                require "./VueOTD/New3.php";
            }

            if($_POST['action'] == 'New4'){
                $tabprod = $produits->ProdXBOXONEN();
                require "./VueOTD/New4.php";
            }

            if($_POST['action'] == 'New5'){
                $tabprod = $produits->ProdXBOX360N();
                require "./VueOTD/xbox360OTD/New5.php";
            }




            if($_POST['action'] == 'OI1'){
                $tabprod = $produits->ProdPS3OI();
                require "./VueOTD/OI1.php";
            }

            if($_POST['action'] == 'OI2'){
                $tabprod = $produits->ProdPS4OI();
                require "./VueOTD/OI2.php";
            }

            if($_POST['action'] == 'OI3'){
                $tabprod = $produits->ProdPCOI();
                require "./VueOTD/OI3.php";
            }

            if($_POST['action'] == 'OI4'){
                $tabprod = $produits->ProdXBOXONEOI();
                require "./VueOTD/OI4.php";
            }

            if($_POST['action'] == 'OI5'){
                $tabprod = $produits->ProdXBOX360OI();
                require "./VueOTD/OI5.php";
            }




            if($_POST['action'] == 'RM1'){
                $tabprod = $produits->ProdPS3RM();
                require "./VueOTD/RM1.php";
            }

            if($_POST['action'] == 'RM2'){
                $tabprod = $produits->ProdPS4RM();
                require "./VueOTD/RM2.php";
            }

            if($_POST['action'] == 'RM3'){
                $tabprod = $produits->ProdPCRM();
                require "./VueOTD/RM3.php";
            }

            if($_POST['action'] == 'RM4'){
                $tabprod = $produits->ProdXBOXONERM();
                require "./VueOTD/RM4.php";
            }

            if($_POST['action'] == 'RM5'){
                $tabprod = $produits->ProdXBOX360RM();
                require "./VueOTD/RM5.php";
            }
        }

    }
    catch (Exception $e) {
        erreur($e->getMessage());
    }
    
?> 
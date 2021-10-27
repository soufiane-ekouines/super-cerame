<?php
  include 'class/connecter.php';
  include 'class/produit.php';
 
   if(isset($_POST['update']))
   {
    $title=$_REQUEST['title'];
     $marque=htmlspecialchars($_POST['marque-product']);
     $collection=htmlspecialchars($_POST['collection-product']);
    $ajoute_par=htmlspecialchars($_POST['ajoute-par-product']);
     $taille=htmlspecialchars($_POST['taille-product']);
     $qte=htmlspecialchars($_POST['qte-product']);
     $stock=htmlspecialchars($_POST['stock-product']);
     $prix=htmlspecialchars($_POST['prix-product']);
     $image=$_FILES['name']['name'];
     move_uploaded_file($_FILES['name']['tmp_name'],"assest/image/"."$image");
  $pr=new produit($title,$marque,$collection,$ajoute_par,$taille,$qte,$stock,$prix,$image);
   $pr->Update($title);
 //  echo("<script> window.location.href='voir-product.php';</script>");
   }
  
  
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add-product.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5747f0b4b.js" crossorigin="anonymous"></script>
    <script src="script/sidebar1.js"></script>
    <title>Super Cerame</title>
</head>
<body>

        <!-- header-->
        <section id="showcase">
        <header id="showcase-header">
            <div class="container">
                <img class="logo" src="assest/icon/logo.png" alt="">
                
            
                <div class="user">
                    <label>mohamed aachour</label>
                    <img class="profile" src="assest/icon/profile.png" alt="">
                     
                </div>
          
            </div>
        </header>
    </section>
        <!-- end header-->
        <!--main-->
        <!--sidebar-->
        
        <section id="showcase-sidebar">
        <div class="sidebar" id="sidebar"  > 
            
            <img onclick="toggleSidebar()" id="check-btn" src="fontawesome-free-5.15.3-desktop/svgs/solid/bars.svg" alt="">
            
    
           
            <div class="content"> 
                <a class="heada"  href="dashboard.html"> <i class="icons"><img src="assest/icon/dashboard.png" alt=""></i> <span>Tableau de bord</span></a>
                <a href="orders.html"><i class="icons"><img src="assest/icon/statistical.png" alt=""></i><span>Ordres</span> </a>
                <a href="voir-product.html"><i class="icons"><img src="assest/icon/statistics.png" alt=""></i><span>Voir les produits</span></a>
                <a href="add-product.html"><i class="icons"><img src="assest/icon/box.png" alt=""></i><span>Ajouter les produits</span> </a>
                <a href=""><i class="icons"><img src="assest/icon/list1.png" alt=""></i><span>Catégories</span></a>
                <a href=""><i class="icons"><img src="assest/icon/customer.png" alt=""></i><span>Users</span></a>
            </div>
        </div>
    </section>
        <!-- End sidebar-->
        <!--main-->
        <?php

            $title=$_REQUEST['title'];
            $pr=new produit("","","","",0,0,0,0,"");
            $data=$pr->lister_objet($title);     
             $marque=$data['marque'];
             $collection=$data['collection_nom'];
            $ajoute_par=$data['ajouter_par'];
             $taille=$data['taille'];
             $qte=$data['qte'];
             $stock=$data['stock'];
             $prix=$data['prix'];
             $image=$data['image'];
        
        ?>
        <section id="main">
            <div class="container">
                <form class="content" method="POST"    enctype="multipart/form-data" autocomplete="off">
                    <label>Title :</label>
                    <input class="btn" type="text" placeholder="Title *" id="title-product" name="title-product" value="<?php echo $title ?>" disabled required>

                    <label>Marque :</label>
                    <input class="btn" type="text" value="Super Cérame"  placeholder="Marque *" id="marque-product" name="marque-product" value="<?php echo $marque ?>" required disable>

                    <label>Collection :</label>
                    <input class="btn" type="text" placeholder="Collection *" id="collection-product" name="collection-product" value="<?php echo $collection ?>" required>

                    <label>Ajouté par :</label>
                    <input class="btn" type="text" placeholder="Ajouté par *" id="ajoute-par-product" name="ajoute-par-product" value="<?php echo $ajoute_par ?>" required>

                    <label>Taille :</label>
                    <input class="btn" type="text" placeholder="Taille *" id="taille-product" name="taille-product" value="<?php echo $taille ?>" required>

                    <label>Quantité/Boite :</label>
                    <input class="btn" type="text" placeholder="Quantité/Boite *" id="qte-product" value="12" name="qte-product" value="<?php echo $qte ?>" required>

                    <label>Stock :</label>
                    <input class="btn" type="text" placeholder="stock *" id="stock-product" name="stock-product" value="<?php echo $stock ?>" required>
                    
                    <label>prix :</label>
                    <input class="prix-btn btn" type="text" placeholder="0" id="prix-product" name="prix-product" value="<?php echo $prix ?>"required>
                    
                    <input type="file" id="myFile" name="name" required>
                    <input class="submit-btn" name="update" type="submit">
                </from>
            </div>
        </section>
        <!--End main-->
    
</body>
</html>
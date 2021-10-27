
<?php
  include 'class/connecter.php';
  include 'class/produit.php';

  if(isset($_REQUEST['page']))
  {
      $page=$_REQUEST['page'];
      $page+=1;
  }else{
      $page=1;
  }
  $start_from=($page-1)*12;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/voir-product.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5747f0b4b.js" crossorigin="anonymous"></script>
    <script src="script/sidebar.js" ></script>
    <title>Super Cerame</title>
</head>
<body>

        <!-- header-->
        <section id="showcase">
        <header id="showcase-header">
            <div class="container">
                <img class="logo" src="assest/icon/logo.png" alt="">
                
            
                <div class="user">
                    
                    <img class="profile" src="assest/icon/profile.png" alt="">
                     <label>mohamed aachour</label>
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
                <a class="heada"  href="dashboard.php"> <i class="icons"><img src="assest/icon/dashboard.png" alt=""></i> <span>Tableau de bord</span></a>
                <a href="orders.php"><i class="icons"><img src="assest/icon/statistical.png" alt=""></i><span>Ordres</span> </a>
                <a href=""><i class="icons"><img src="assest/icon/statistics.png" alt=""></i><span>Voir les produits</span></a>
                <a href="add-product.php"><i class="icons"><img src="assest/icon/box.png" alt=""></i><span>Ajouter les produits</span> </a>
                <a href=""><i class="icons"><img src="assest/icon/list1.png" alt=""></i><span>Catégories</span></a>
                <a href=""><i class="icons"><img src="assest/icon/customer.png" alt=""></i><span>Users</span></a>
            </div>
        </div>
    </section>
        <!-- End sidebar-->
        <!--cards-->
        <div class="container" id="con">
            <i id="btn-search" class="fas fa-search"></i>
             <input type="text" placeholder="search" name="search" id="search">
        </div>
        <section id="main">
        <?php
         $pr=new produit("","","","",0,0,0,0,"");
       //if($find=="")
          $rows=$pr->lister($start_from,12);

        if(!empty($rows))
        {
            if($rows[0]!=null)
              $row=$rows[0];
            else
              $row=null;
        if($row!=null)
        {
        ?>
            <div class="card card1">
                <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <a href="update_produit.php?title=<?php echo $row['title'];?>"><i id="icon" class="fas fa-edit"></i></a>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            
            <?php
             }
            if(!empty($rows[1]))
                $row=$rows[1];
            else
                $row=null;
                 if($row!=null)
                     {
             ?>
           <div class="card card2">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[2]))
                $row=$rows[2];
            else
                $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card3">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[3]))
                $row=$rows[3];
            else
                $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card4">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }

            if(!empty($rows[4]))
            {
             $row=$rows[4];
            }else
            {
              $row=null;
            }
                 if($row!=null)
                     {
             ?>
            <div class="card card5">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[5]))
               $row=$rows[5];
            else
                $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card6">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[6]))
              $row=$rows[6];
            else
              $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card7">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[7]))
              $row=$rows[7];
            else
              $row=null;
            ?>
             <?php
                 if($row!=null)
                     {
             ?>
            <div class="card card8">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>

            <?php }
            if(!empty($rows[8]))
              $row=$rows[8];
            else
              $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card9">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[9]))
               $row=$rows[9];
             else
               $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card10">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[10]))
              $row=$rows[10];
            else
              $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card11">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }
            if(!empty($rows[11]))
                $row=$rows[11];
            else
                $row=null;
                 if($row!=null)
                     {
             ?>
            <div class="card card12">
            <img src="assest/image/<?php echo $row['image'];?>" alt="">
                <div class="content">
                <h1><?php echo $row['title'];?></h1>
                <label><?php echo $row['taille'];?></label>
                <br>
                <label><?php echo $row['marque'];?></label>
                <i id="icon" class="fas fa-edit"></i>
               <a href="delete.php?title=<?php echo $row['title'];?>"> <i id="icon" class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php 
            }
        }
            ?>
              <?php
       $total=$pr->nbrrws();
       $total_page=$total/12;
       if($total_page>1)
       {
?>                           <!-- page Next-->
        <form class="page_Next" action="" method="POST">
 
        <div class="next-bar">
                <div class="content">
                <a class="btn" href="voir-product.php?page=0"><< </a>
                <?php  
                if($page>1)
                {
                ?>
                    <a class="btn" href="voir-product.php?page=<?php echo $page-2 ?>"><</a>
                <?php
                }
                for($k=1;$k<=$total_page;$k++)
                    {
                    ?>  
                        <a href="voir-product.php?page=<?php echo $k-1 ?>"><?php echo $k ?><label class="text" for=""></label>
                    <?php 
                    }
                      if($page<$total_page)
                    {
                    ?> 
                        <a class="btn" href="voir-product.php?page=<?php echo $page ?>">> </a>
                    <?php } ?>
                        <a class="btn" href="voir-product.php?page=<?php echo $total_page-1 ?>">>></a>
                </div>
            </div>
            </form>
            <div class="emptyspace">
            
            </div>
            <?php } ?>
        </section>

        <!--end cards-->

        <!--End main-->
</body>
</html>
<?php
include("class/connecter.php");
include("class/commande.php");
$cmd=new commande(22,"","");
if(!empty($_REQUEST['search']))
{
    try{
    $idc=$_REQUEST['search'];
    $rows=$cmd->cherche($idc);
    }catch(Exception $x)
    {}
}else
$rows=$cmd->select();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css">
    <script src="https://kit.fontawesome.com/f5747f0b4b.js" crossorigin="anonymous"></script>
    <title>Super Cérame &#8211; Super Cérame</title>
</head>
<body>  
    <input type="checkbox" id="check">
    <!-- header-->
    <header id="showcase-header">
        
        <div class="container">
            <img class="logo" src="assest/icon/logo.png" alt="">
            <label for="check">
            <i class="fa fa-bars" id="sidebar-btn"></i>
            </label>
            
            <form autocomplete="off">
                <img src="assest/icon/search.png" alt="">
                <?php
                if(!empty($_REQUEST['search']))
                {
                ?>
               
            <input  type="text" placeholder="search" class="search" name="search" id="search" value="<?php echo $_REQUEST['search'] ?>">
            <?php
                }else{
            ?>
            <input  type="text" placeholder="search" class="search" name="search" id="search" >
                <?php
                }
                ?>
            </form>
            <div class="user">
                <img class="profile" src="assest/icon/profile.png" alt="">
                <label class="N-admin">mohamed aachour</label>
            </div>
        </div>
    </header>
    <!-- end header-->
    <!--showcase admin-->

        <section id="wrapper">
        <!--sidebar -->
        <div class="sidebar">
            <div class="content"> 
                <a href=""> <i class="icons"><img src="assest/icon/dashboard.png" alt=""></i> <span>Tableau de bord</span></a>
                <a href="orders.html"><i class="icons"><img src="assest/icon/statistical.png" alt=""></i> <span>Ordres</span></a>
                <a href=""> <i class="icons"><img src="assest/icon/statistics.png" alt=""></i><span>Voir les produits</span></a>
                <a href=""> <i class="icons"><img src="assest/icon/box.png" alt=""></i><span>Ajouter les produits</span></a>
                <a href=""><i class="icons"><img src="assest/icon/list1.png" alt=""></i><span>Catégories</span> </a>
                <a href=""><i class="icons"><img src="assest/icon/customer.png" alt=""></i><span>Users</span></a>
            </div>
        </div>
        <!--endsidebar -->
        <!--main-->
            <!--header main-->
            <div class="main-header">
               <h1> Tableau de bord </h1>
               <div><img src="assest/icon/dashboard1.png" alt=""> <label>Tableau de bord</label> </div>
            </div>
            <!--end header main-->
            <!--main cards-->
            <div class="card1 card">
                <img src="assest/icon/shopping-en-ligne.png" alt="">
                <div class="content">
                    <h2>124</h2>
                    <p>New orders!</p> 
                    <a href="orders.html"><input  type="button" name="btn" value="View details" ></a>
                </div>
            
            </div>
            <div class="card2 card">
                <img src="assest/icon/line-chart.png" alt="">
                <div class="content">
                    <h2>14</h2>
                    <p>Les produit!</p> 
                    <input type="button" name="btn" value="View details" >
                </div>
            </div>
            <div class="card3 card">
                <img src="assest/icon/list.png" alt="">
                <div class="content">
                    <h2>32</h2>
                    <p>Catégories!</p> 
                    <input type="button" name="btn" value="View details">
                </div>
            </div>
            <!--end main cards-->
            
            <!--orders main-->
            <div class="order">
                
            <table>
                   <thead>
                        <th><label>Client</label></th>
                        <th><label>Order ID</label></th>
                        <th><label>Photo</label></th>
                        <th><label>Product</label></th>
                        <th><label>Quantity</label></th>
                        <th><label>Date</label></th>
                        <th><label>status</label></th>
                      
                   </thead>

                    <?php
                    if($rows!=null)
                    {
                    include("class/produit.php");
                        foreach($rows as $row)
                        {
                            
                            $pr=new produit("","","","",0,0,0,0,"");
                            $imagep=$pr->lister_objet($row['produit_title']);
                    ?>
                   <tr>
                    <td><label><?php echo $row['Users_cin'];  ?></label></td>
                    <td><label><?php echo $row['idCommande'];  ?></label></td>
                    <td><img class="order--img" src="assest/image/<?php echo $imagep['image']; ?>" alt=""></td>
                    <td><label><?php echo $row['produit_title'];  ?></label></td>
                    <td><label><?php echo $row['qte_cmd'];  ?></label></td>
                    <td><label><?php echo $row['date'];  ?></label></td>
                    <td><label>paid</label></td>
                   
                    </tr>
                    <?php
                        }
                    }
                    ?>            
                                   
                </table>




            </div>
            <!--end main orders-->
        <!--end main-->
        </section>
    
    <!-- end showcase admin-->
</body>
</html>
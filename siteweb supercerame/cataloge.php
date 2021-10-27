<?php
  include 'class/connecter.php';
  include 'class/produit.php';




  $pr=new produit("","","","",0,0,0,0,"");
//if($find=="")


   if(isset($_REQUEST['page']))
   {
       $page=$_REQUEST['page'];
       $page+=1;
   }else{
       $page=1;
   }
   $start_from=($page-1)*12;

   $rows=$pr->lister($start_from,12);
   $rowsimg=$pr->listerall();
   $img=null;
   $i=0;
foreach($rowsimg as $row)
{
$img[$i]=$row['image'];
$i++;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cataloge.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/webkul-micron@1.1.6/dist/css/micron.min.css">
    <script src="https://kit.fontawesome.com/f5747f0b4b.js" crossorigin="anonymous"></script>
    <script src="script/cataloge.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Super Cerame</title>
</head>
<script>
    images=<?php echo json_encode($img);?>
</script>






<body onload="slider(images)">
        <img class="back" src="assest/image/patternpad (4)@2x.png" alt="">      
        <!--Section creere compte-->    
        <section id="showcase-signup">
            <div class="showcase">
                <h1>Créer un compte </h1>
                <form autocomplete="off" action="" method="post" class="content" id="c-account" name="c-account" autocomplete="off" >
                 
                    <div class="text text1">
                        <label for="">Entrez votre nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required> 
                    </div>

                    <div class="text text2">
                        <label for="">Entrez votre Prénom :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>
                   
                    <div class="text text3">
                        <label for="">Entrez un email valide :</label>
                        <input type="email" id="nom" name="nom" placeholder="" autocomplete="off" required>
                    </div>
                    <div class="text text12">
                        <label for="">CNI :</label>
                        <input type="text" id="nom" name="nom" placeholder="" autocomplete="off" required>
                    </div>
                    <div class="text text4">
                        <label for="">Entrez votre age :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>
                    
                    <div class="text text5">
                        <label for="">sexe :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>
                    <div class="text text6">
                        <label for="">Ville :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>

                    <div class="text text7">
                        <label for="">Entrez votre tele :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>
                    <div class="text text8">
                        <label for="">paye :</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>
                    <div class="text text9">
                    <label for="">Entrez votre adresse :</label>
                        <textarea name="adresse" id="adresse" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text text10">
                        <label for="">Password :</label>
                        <input type="password" id="nom" name="nom" placeholder="" required>
                    </div>
                    <div class="text text11">
                        <label for="">société</label>
                        <input type="text" id="nom" name="nom" placeholder="" required>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    <div class="btn">
                        <input type="submit" value="Submit" class="btn-connecte" />
                        <input type="button" value="Cancle" class="btn-cancle btn-connecte" onclick="document.getElementById('showcase-signup').style.display='none'" />
                    </div>
                    
                </form>
            </div>
        </section>   
<!--End Section creere compte--> 




        <!--Section login-->    
        <section id="showcase-login">
            <div class="showcase">
            <img class="logo" src="assest/icon/logo.png" alt="super cerame logo">
                <h1>Connexion </h1>
                <form autocomplete="off" action="" method="post" class="content" id="c-account" name="c-account" autocomplete="off" >
                 
                    
                   
                    <div class="text text1">
                        <label for="">Entrez votre email  :</label>
                        <input type="email" id="nom" name="nom" placeholder="" autocomplete="off" required>
                    </div>
                   
                    
                    <div class="text text2">
                        <label for="">Password :</label>
                        <input type="password" id="nom" name="nom" placeholder="" required>
                    </div>
                    

                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    <div class="btn">
                        <input type="submit" value="Submit" class="btn-connecte" />
                        <input type="button" value="Cancle" class="btn-cancle btn-connecte" onclick="document.getElementById('showcase-login').style.display='none'" />
                    </div>
                    
                </form>
            </div>
        </section>   
<!--End Section login--> 




        
    <!--header-->
<section id="showcase_header">
    <header class="showcase">
        <div class="container">
            <nav>
               <img class="logo" src="assest/icon/logo.png" alt="super cerame logo">
                <ul class="nav_items"> 
                    <li class="items"><a class="cool_link" href="Accueil.php"><strong>Accueil</strong></a></li>
                    <li class="items"><a class="cool_link" href="Qui_Sommes_nous.php">Qui Sommes-nous?</a></li>
                    <li class="items"><a class="cool_link" href="#">Catalogue</a></li>
                    <li class="items"><a class="cool_link" href="">Formation poseurs</a></li>
                    <li class="items"><a class="cool_link" href="">Actualités</a></li>
                    <li class="items"><a class="cool_link" href="">Espace Media</a></li>
                    <li class="items"><a class="cool_link" href="">Postuler en ligne</a></li>
                </ul>
                <ul>
                    <li class="icons" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29.819" viewBox="0 0 30 29.819">
                        <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook" d="M30.563,15.563A15,15,0,1,0,13.219,30.381V19.9H9.408V15.563h3.81v-3.3c0-3.759,2.238-5.835,5.666-5.835a23.085,23.085,0,0,1,3.358.293V10.4H20.35a2.168,2.168,0,0,0-2.444,2.343v2.816h4.16L21.4,19.9H17.906V30.381A15.005,15.005,0,0,0,30.563,15.563Z" transform="translate(-0.563 -0.563)" fill="#0860a2"/>
                      </svg>
                      </li> 
                      <li class="icons" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29.819" viewBox="0 0 27.705 27.705">
                        <path id="Icon_simple-instagram" data-name="Icon simple-instagram" d="M13.852,0C10.089,0,9.619.017,8.142.083A10.214,10.214,0,0,0,4.779.727a6.784,6.784,0,0,0-2.454,1.6,6.759,6.759,0,0,0-1.6,2.454A10.185,10.185,0,0,0,.083,8.142C.014,9.619,0,10.089,0,13.852s.017,4.233.083,5.711a10.221,10.221,0,0,0,.644,3.363,6.793,6.793,0,0,0,1.6,2.454,6.774,6.774,0,0,0,2.454,1.6,10.227,10.227,0,0,0,3.363.644c1.478.069,1.947.083,5.711.083s4.233-.017,5.711-.083a10.251,10.251,0,0,0,3.363-.644,7.079,7.079,0,0,0,4.052-4.052,10.221,10.221,0,0,0,.644-3.363c.069-1.478.083-1.947.083-5.711s-.017-4.233-.083-5.711a10.244,10.244,0,0,0-.644-3.363,6.8,6.8,0,0,0-1.6-2.454,6.749,6.749,0,0,0-2.454-1.6A10.191,10.191,0,0,0,19.563.083C18.085.014,17.616,0,13.852,0Zm0,2.493c3.7,0,4.138.018,5.6.082a7.632,7.632,0,0,1,2.571.479,4.559,4.559,0,0,1,2.63,2.628,7.648,7.648,0,0,1,.477,2.571c.066,1.461.081,1.9.081,5.6s-.017,4.138-.085,5.6a7.8,7.8,0,0,1-.486,2.571,4.4,4.4,0,0,1-1.038,1.6,4.322,4.322,0,0,1-1.593,1.034,7.7,7.7,0,0,1-2.58.477c-1.471.066-1.9.081-5.609.081s-4.14-.017-5.609-.085a7.855,7.855,0,0,1-2.581-.486A4.29,4.29,0,0,1,4.036,23.6,4.206,4.206,0,0,1,3,22.007a7.861,7.861,0,0,1-.485-2.58c-.052-1.454-.07-1.9-.07-5.592s.018-4.14.07-5.611A7.852,7.852,0,0,1,3,5.645,4.106,4.106,0,0,1,4.036,4.051,4.1,4.1,0,0,1,5.627,3.014a7.667,7.667,0,0,1,2.564-.486c1.472-.052,1.9-.069,5.609-.069l.052.035Zm0,4.246a7.113,7.113,0,1,0,7.113,7.113A7.113,7.113,0,0,0,13.852,6.739Zm0,11.731a4.617,4.617,0,1,1,4.617-4.617A4.616,4.616,0,0,1,13.852,18.47ZM22.909,6.459A1.662,1.662,0,1,1,21.247,4.8,1.663,1.663,0,0,1,22.909,6.459Z" fill="#b7044c"/>
                      </svg>
                      </li>
                     
                      <li class="icons" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29.819" viewBox="0 0 31.724 22.306">
                        <path id="Icon_awesome-youtube" data-name="Icon awesome-youtube" d="M32.111,7.99a3.986,3.986,0,0,0-2.8-2.823C26.832,4.5,16.912,4.5,16.912,4.5s-9.92,0-12.394.667a3.986,3.986,0,0,0-2.8,2.823,41.815,41.815,0,0,0-.663,7.685,41.815,41.815,0,0,0,.663,7.685,3.927,3.927,0,0,0,2.8,2.778c2.474.667,12.394.667,12.394.667s9.92,0,12.394-.667a3.927,3.927,0,0,0,2.8-2.778,41.815,41.815,0,0,0,.663-7.685,41.815,41.815,0,0,0-.663-7.685Zm-18.443,12.4V10.958l8.291,4.717-8.291,4.717Z" transform="translate(-1.05 -4.5)" fill="#ff0101"/>
                      </svg>
                      </li>
                </ul>
                
            </nav>
        </div>
    </header>
</section>
<!--End header-->

<!-- main section-->
<div class="container">
<section id="wrapper">
    

        <div class="header-main">
            <img id="image_slide" class="img-main"src="assest/image/<?php echo $rows[0]['image'];?>" alt="">
        </div>

    <!-- side bar-->
    <div class="sidebar">
        <details class="details-header">
            <summary class="header">
                <img class="icon-user" src="assest/icon/user-profile.png" alt="">
                Se connecter
                <img class="down" src="assest/icon/down1.png" alt="">
                <img class="up" src="assest/icon/up-arrow1.png">
            </summary>
            <div class="content">
                <ul>
                    <li><button class="btn1" onclick="document.getElementById('showcase-login').style.display='block'">Se connecter</button></li>
                    <li><button name="cree" class="btn2" onclick="document.getElementById('showcase-signup').style.display='block'">Créer un compte</button></li>
                </ul>
                
            </div>
        </details>
        
        <details>
            <summary>FABRICANT</summary>
        </details>

        <details>
            <summary>FORMAT :</summary>
        </details>


        <details>
            <summary>COLOURS :</summary>
        </details>


        <details>
            <summary>TYPE DE CARRELAGE</summary>
        </details>


        <details>
            <summary>MATÉRIAU</summary>
        </details>
    </div>
    <!--end side bar-->

    <!--cards section-->


    <?php
        if(!empty($rows[0]))
        {
            $row=$rows[0];
          
      // ,,,,,
        ?>
    <div class="card1 card">
        <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>

    <?php }?>

    <?php
        if(!empty($rows[1]))
        {
            $row=$rows[1];
          
      // ,,,,,
    ?>
    <div class="card2  card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[2]))
        {
            $row=$rows[2];
          
      // ,,,,,
    ?>
    <div class="card3 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[3]))
        {
            $row=$rows[3];
          
      // ,,,,,
    ?>
    <div class="card4 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[4]))
        {
            $row=$rows[4];
          
      // ,,,,,
    ?>
    <div class="card5 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[5]))
        {
            $row=$rows[5];
          
      // ,,,,,
    ?>
    <div class="card6 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[6]))
        {
            $row=$rows[6];
          
      // ,,,,,
    ?>
    <div class="card7 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[7]))
        {
            $row=$rows[7];
          
      // ,,,,,
    ?>
    <div class="card8 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[8]))
        {
            $row=$rows[8];
          
      // ,,,,,
    ?>
    <div class="card9 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[9]))
        {
            $row=$rows[9];
          
      // ,,,,,
    ?>
    <div class="card10 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[10]))
        {
            $row=$rows[10];
          
      // ,,,,,
    ?>
    <div class="card11 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <?php
        if(!empty($rows[11]))
        {
            $row=$rows[11];
          
      // ,,,,,
    ?>
    <div class="card12 card">
    <img src="assest/image/<?php echo $row['image'];?>" alt="">
        <div class="content">
        <h1><?php echo $row['title'];?></h1>
        <label><?php echo $row['taille'];?></label>
        <br>
        <label><?php echo $row['marque'];?></label>
        </div>
    </div>
    <?php }?>
    <!-- end cards section-->

    <?php
       $total=$pr->nbrrws();
       $total_page=$total/12;
       if($total_page>1)
       {
?>                           <!-- page Next-->
        <form class="page_Next" action="" method="POST">
 
        <div class="next-bar">
                <div class="content">
                <a class="btn" href="cataloge.php?page=0"><< </a>
                <?php  
                if($page>1)
                {
                ?>
                    <a class="btn" href="cataloge.php?page=<?php echo $page-2 ?>"><</a>
                <?php
                }
                for($k=1;$k<=$total_page;$k++)
                    {
                    ?>  
                        <a href="cataloge.php?page=<?php echo $k-1 ?>"><?php echo $k ?><label class="text" for=""></label>
                    <?php 
                    }
                      if($page<$total_page)
                    {
                    ?> 
                        <a class="btn" href="cataloge.php?page=<?php echo $page ?>">> </a>
                    <?php } ?>
                        <a class="btn" href="cataloge.php?page=<?php echo $total_page-1 ?>">>></a>
                </div>
            </div>
            </form>
            <div class="emptyspace">
            
            </div>
            <?php } ?>

</section>


</div>
<!-- end main section-->


<!--Footer-->
<section id="items_footer">
        
    <div class="showcase_footer">
        
    </div>
    
    <div class="design_card">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="275.873" height="438" viewBox="0 0 275.873 438">
            <defs>
              <clipPath id="clip-path">
                <rect width="116" height="110" fill="none"/>
              </clipPath>
            </defs>
            <path id="Path_103" data-name="Path 103" d="M28,0H212a28,28,0,0,1,28,28V410a28,28,0,0,1-28,28H28c-15.464,0-13.822-12.536-13.822-28V28C14.178,12.536,12.536,0,28,0Z" transform="translate(-14.127)" fill="#741212"/>
            <g id="Repeat_Grid_1" data-name="Repeat Grid 1" transform="translate(159.873 174)" clip-path="url(#clip-path)">
              <g transform="translate(-306 -3068)">
                <circle id="Ellipse_1" data-name="Ellipse 1" cx="5" cy="5" r="5" transform="translate(306 3068)" fill="#fff"/>
                <circle id="Ellipse_2" data-name="Ellipse 2" cx="5" cy="5" r="5" transform="translate(325 3068)" fill="#fff"/>
                <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(343 3068)" fill="#fff"/>
                <ellipse id="Ellipse_4" data-name="Ellipse 4" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(362 3068)" fill="#fff"/>
                <ellipse id="Ellipse_5" data-name="Ellipse 5" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(381 3068)" fill="#fff"/>
                <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(400 3068)" fill="#fff"/>
              </g>
              <g transform="translate(-306 -3038)">
                <circle id="Ellipse_1-2" data-name="Ellipse 1" cx="5" cy="5" r="5" transform="translate(306 3068)" fill="#fff"/>
                <circle id="Ellipse_2-2" data-name="Ellipse 2" cx="5" cy="5" r="5" transform="translate(325 3068)" fill="#fff"/>
                <ellipse id="Ellipse_3-2" data-name="Ellipse 3" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(343 3068)" fill="#fff"/>
                <ellipse id="Ellipse_4-2" data-name="Ellipse 4" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(362 3068)" fill="#fff"/>
                <ellipse id="Ellipse_5-2" data-name="Ellipse 5" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(381 3068)" fill="#fff"/>
                <ellipse id="Ellipse_6-2" data-name="Ellipse 6" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(400 3068)" fill="#fff"/>
              </g>
              <g transform="translate(-306 -3008)">
                <circle id="Ellipse_1-3" data-name="Ellipse 1" cx="5" cy="5" r="5" transform="translate(306 3068)" fill="#fff"/>
                <circle id="Ellipse_2-3" data-name="Ellipse 2" cx="5" cy="5" r="5" transform="translate(325 3068)" fill="#fff"/>
                <ellipse id="Ellipse_3-3" data-name="Ellipse 3" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(343 3068)" fill="#fff"/>
                <ellipse id="Ellipse_4-3" data-name="Ellipse 4" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(362 3068)" fill="#fff"/>
                <ellipse id="Ellipse_5-3" data-name="Ellipse 5" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(381 3068)" fill="#fff"/>
                <ellipse id="Ellipse_6-3" data-name="Ellipse 6" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(400 3068)" fill="#fff"/>
              </g>
              <g transform="translate(-306 -2978)">
                <circle id="Ellipse_1-4" data-name="Ellipse 1" cx="5" cy="5" r="5" transform="translate(306 3068)" fill="#fff"/>
                <circle id="Ellipse_2-4" data-name="Ellipse 2" cx="5" cy="5" r="5" transform="translate(325 3068)" fill="#fff"/>
                <ellipse id="Ellipse_3-4" data-name="Ellipse 3" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(343 3068)" fill="#fff"/>
                <ellipse id="Ellipse_4-4" data-name="Ellipse 4" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(362 3068)" fill="#fff"/>
                <ellipse id="Ellipse_5-4" data-name="Ellipse 5" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(381 3068)" fill="#fff"/>
                <ellipse id="Ellipse_6-4" data-name="Ellipse 6" cx="5.5" cy="5" rx="5.5" ry="5" transform="translate(400 3068)" fill="#fff"/>
              </g>
            </g>
          </svg>
          
    </div>

        
        <!--contact form-->
        <form autocomplete="off" method="post" action="">
    <div class="contact-card">
        <div class="content">
              <h3>Contactez-nous</h3>
              <label>Entrez votre nom :</label>
              <input type="text" id="name"   required/>
              <label>Entrez un email valide :</label>
              <input type="email" id="name"  required/>
              <label>Entrez votre message :</label>
              <textarea name="msg" id="message"  cols="30" rows="4" required></textarea>
              <button type="submit" value="submit">Envoyer</button>
        </div>
    </div>
</form> 
<!-- End contact form-->
<div class="content_cerame">
    <div class="content">
    <img src="assest/icon/logo.png" alt="Super cerame">
    <p>Leader et acteur incontournable de la céramique au Maroc, Super Cérame, filiale du groupe Ynna Holding, opère depuis 1964 dans la conception, la fabrication et la commercialisation de mosaïques et de revêtements pour sols et murs.</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29.818" viewBox="0 0 30 29.818">
        <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook" d="M30.563,15.563A15,15,0,1,0,13.219,30.381V19.9H9.408V15.563h3.81v-3.3c0-3.759,2.238-5.835,5.666-5.835a23.085,23.085,0,0,1,3.358.293V10.4H20.35a2.168,2.168,0,0,0-2.444,2.343v2.816h4.16L21.4,19.9H17.906V30.381A15.005,15.005,0,0,0,30.563,15.563Z" transform="translate(-0.563 -0.563)" fill="#fff"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27.705" viewBox="0 0 27.705 27.705">
        <path id="Icon_simple-instagram" data-name="Icon simple-instagram" d="M13.852,0C10.089,0,9.619.017,8.142.083A10.214,10.214,0,0,0,4.779.727a6.784,6.784,0,0,0-2.454,1.6,6.759,6.759,0,0,0-1.6,2.454A10.185,10.185,0,0,0,.083,8.142C.014,9.619,0,10.089,0,13.852s.017,4.233.083,5.711a10.221,10.221,0,0,0,.644,3.363,6.793,6.793,0,0,0,1.6,2.454,6.774,6.774,0,0,0,2.454,1.6,10.227,10.227,0,0,0,3.363.644c1.478.069,1.947.083,5.711.083s4.233-.017,5.711-.083a10.251,10.251,0,0,0,3.363-.644,7.079,7.079,0,0,0,4.052-4.052,10.221,10.221,0,0,0,.644-3.363c.069-1.478.083-1.947.083-5.711s-.017-4.233-.083-5.711a10.244,10.244,0,0,0-.644-3.363,6.8,6.8,0,0,0-1.6-2.454,6.749,6.749,0,0,0-2.454-1.6A10.191,10.191,0,0,0,19.563.083C18.085.014,17.616,0,13.852,0Zm0,2.493c3.7,0,4.138.018,5.6.082a7.632,7.632,0,0,1,2.571.479,4.559,4.559,0,0,1,2.63,2.628,7.648,7.648,0,0,1,.477,2.571c.066,1.461.081,1.9.081,5.6s-.017,4.138-.085,5.6a7.8,7.8,0,0,1-.486,2.571,4.4,4.4,0,0,1-1.038,1.6,4.322,4.322,0,0,1-1.593,1.034,7.7,7.7,0,0,1-2.58.477c-1.471.066-1.9.081-5.609.081s-4.14-.017-5.609-.085a7.855,7.855,0,0,1-2.581-.486A4.29,4.29,0,0,1,4.036,23.6,4.206,4.206,0,0,1,3,22.007a7.861,7.861,0,0,1-.485-2.58c-.052-1.454-.07-1.9-.07-5.592s.018-4.14.07-5.611A7.852,7.852,0,0,1,3,5.645,4.106,4.106,0,0,1,4.036,4.051,4.1,4.1,0,0,1,5.627,3.014a7.667,7.667,0,0,1,2.564-.486c1.472-.052,1.9-.069,5.609-.069l.052.035Zm0,4.246a7.113,7.113,0,1,0,7.113,7.113A7.113,7.113,0,0,0,13.852,6.739Zm0,11.731a4.617,4.617,0,1,1,4.617-4.617A4.616,4.616,0,0,1,13.852,18.47ZM22.909,6.459A1.662,1.662,0,1,1,21.247,4.8,1.663,1.663,0,0,1,22.909,6.459Z" fill="#fff"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 31.723 22.306">
        <path id="Icon_awesome-youtube" data-name="Icon awesome-youtube" d="M32.111,7.99a3.986,3.986,0,0,0-2.8-2.823C26.832,4.5,16.912,4.5,16.912,4.5s-9.92,0-12.394.667a3.986,3.986,0,0,0-2.8,2.823,41.815,41.815,0,0,0-.663,7.685,41.815,41.815,0,0,0,.663,7.685,3.927,3.927,0,0,0,2.8,2.778c2.474.667,12.394.667,12.394.667s9.92,0,12.394-.667a3.927,3.927,0,0,0,2.8-2.778,41.815,41.815,0,0,0,.663-7.685,41.815,41.815,0,0,0-.663-7.685Zm-18.443,12.4V10.958l8.291,4.717-8.291,4.717Z" transform="translate(-1.05 -4.5)" fill="#fff"/>
      </svg>
      </div>                                    
</div>

<!-- location-->
<div class="location-info">
    <div class="content">
        <svg xmlns="http://www.w3.org/2000/svg" width="432" height="168" viewBox="0 0 432 168">
            <g id="Group_48" data-name="Group 48" transform="translate(-741 -4382)">
              <path id="Icon_material-location-on" data-name="Icon material-location-on" d="M18,3A10.492,10.492,0,0,0,7.5,13.5C7.5,21.375,18,33,18,33S28.5,21.375,28.5,13.5A10.492,10.492,0,0,0,18,3Zm0,14.25a3.75,3.75,0,1,1,3.75-3.75A3.751,3.751,0,0,1,18,17.25Z" transform="translate(733.5 4396)" fill="rgba(255,255,255,0.98)" />
              <text id="text-footer-casa" data-name="Km 10,5 – Route 110 – BP 2936 Aïn Sebaâ 20252 – Casablanca" transform="translate(790 4382)" fill="#fff" font-size="16" font-family="Montserrat-Regular, Montserrat"><tspan x="0" y="21">Km 10,5 – Route 110 – BP 2936 Aïn </tspan><tspan x="0" y="48">Sebaâ 20252 – Casablanca</tspan></text>
              <path id="Icon-awesome-phone" data-name="Icon awesome-phone" d="M34.692,1.73,27.38.042a1.7,1.7,0,0,0-1.934.977L22.071,8.895a1.683,1.683,0,0,0,.485,1.969l4.261,3.488A26.059,26.059,0,0,1,14.358,26.81L10.87,22.549A1.686,1.686,0,0,0,8.9,22.064L1.027,25.439A1.708,1.708,0,0,0,.042,27.38L1.73,34.692A1.687,1.687,0,0,0,3.375,36,32.621,32.621,0,0,0,36,3.375,1.685,1.685,0,0,0,34.692,1.73Z" transform="translate(744.001 4496.001)" fill="#fff"/>
              <text id="text-footer" data-name="+212 522 35 16 00 / +212 522 35 46 09" transform="translate(808 4496)" fill="#fff" font-size="16" font-family="Montserrat-Regular, Montserrat"><tspan x="0" y="21">+212 522 35 16 00 / +212 522 35 46 </tspan><tspan x="0" y="48">09</tspan></text>
            </g>
          </svg>
          
    </div>
</div>
<!-- End location-->
     
</section>
<section id="footer_copy">
            <div class="content">
                <span>© Mohamed Aachour || Soufaine ekouines.  2021 All rights reserved.
                </span>
            </div>
</section>
<!--End footer-->


</body>
</html>

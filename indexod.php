<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'conf/connect.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    

</head>
<body>
<style>
        th, td{
            padding: 10px;
        }
        th{
            background-color: #273440 ;
            color: #fff;
        }
        td{
            background-color: #394a59;
        }
</style>

<section id="container" class="">
<div class="row">
    <div class="col-12">
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
                <a href="index.php" class="logo">РЕДАКТИРОВАНИЕ<span class="lite">БД</span></a>
        </header> 
        <nav class="navbar bg-body-tertiary">
        </nav>
    </div>
</div>  

    <div class="row">
    <div class="col-6 col-md-2">
     <aside>
         <div id="sidebar"  class="nav-collapse ">
            
             <ul class="sidebar-menu">                
                 <li class="">
                     <a class="" href="index.php">
                         <i class="icon_house_alt"></i>
                         <span>Запчасти</span>
                     </a>
                 </li>
                 <li class="">
                     <a class="" href="indexkategorii.php">
                         <i class="icon_house_alt"></i>
                         <span>Категории</span>
                     </a>
                 </li>
                 <li class="">
                     <a class="" href="indexord.php">
                         <i class="icon_house_alt"></i>
                         <span>Заказы</span>
                     </a>
                 </li>
                <!--
                 <li class="sub-menu">
                     <a href="javascript:;" class="">
                         <i class="icon_desktop"></i>
                         <span>ЗАКАЗЫ</span>
                         <span class="menu-arrow arrow_carrot-right"></span>
                     </a>
                     <ul class="sub">
                         <li><a class="" href="general.html">Elements</a></li>
                         <li><a class="" href="buttons.html">Buttons</a></li>
                         <li><a class="" href="grids.html">Grids</a></li>
                     </ul>
                 </li>
                -->
          
                 <li>                     
                     <a class="" href="">
                         <i class="icon_piechart"></i>
                         <span> Детали заказа</span>
                     </a>                    
                 </li>
             </ul>
            
         </div>
     </aside>
     </div>


        <div class="col-6 col-md-5">
            <table>
            <tr>
                <th style="color:#ffffff">id</th>
                <th style="color:#ffffff">idзаказа</th>
                <th style="color:#ffffff">idдетали</th>
                <th style="color:#ffffff">Количество</th>

                <th style="color:#ffffff">Изменить</th>
                <th style="color:#ffffff">Удалить</th>
            </tr>


            <?php
            $Parts = mysqli_query($connect,"SELECT * FROM `OrderDetails`");
            $Parts = mysqli_fetch_all($Parts);
            foreach ($Parts as $product)
            {
                ?>
                <tr>
                    <td style="color:#ffffff"><?= $product[0] ?></td>
                    <td style="color:#ffffff"><?= $product[1] ?></td>
                    <td style="color:#ffffff"><?= $product[2] ?></td>
                    <td style="color:#ffffff"><?= $product[3] ?></td>

                    <td> <a style="color:#ffffff" href="updateod.php?id=<?= $product[0] ?>">Изменить</a></td>
                    <td> <a style="color:#ffffff" href="vend/deleteod.php?id=<?= $product[0] ?>">Удалить</a></td>
                </tr>
                <?php

            }
            ?>
            </table>
      </div>



      <div class="col-6 col-md-4">
            <h1> Добавить</h1>
            <form action="vend/creatod.php" method="post">

                <div class="form-floating mb-3">
                    <input type="number" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">idзаказа</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="description" class="form-control" id="floatingPassword" placeholder="Пароль">
                    <label for="floatingPassword">idдетали</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="proce" class="form-control" id="floatingPassword" placeholder="Пароль">
                    <label for="floatingPassword">Количество</label>
                </div>


                <button type="submit" class="btn btn-outline-dark btn-lg">Добавить запись в бд</button>
             
            </form>
        </div>
        <div class="col-6 col-md-1">
        </div>
    </div>


</section>
    
 
    

  




    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/fullcalendar.min.js"></script> 
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
</body>
</html>
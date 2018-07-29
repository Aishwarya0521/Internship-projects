<?php
include 'config.php';
$selectproducts ="SELECT * FROM products";
$productsresult=$connection->query($selectproducts);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-deep_orange.min.css" />
<style>
    .mdl-layout__tab-bar{
        padding:0px 5px  ;
        margin:2%;

    }
    .card:hover {
          
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
    .container {
        padding: 1px 15px ;
    
    }
     body{
            background-color:lightgrey;    
            font-family:Arial;
        }
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
    .mdl-layout__tab{
        padding:50px 12px 0px 12px;
    }
    .search{
        padding:60px 15px;
    }
    .column {
    float: left;
    width: 40%;
    padding: 5px;
    }
    .logo-zoom {
   
 
    transition: transform 2s;
    
    }
    .logo-zoom:hover {
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.5); 
    }
    .material-icons .mdl-badge .mdl-badge--overlap{
        float:right;
    } 
    </style>
</head>

<body> 
      <div class="logo-zoom">
        <img src="image/mylogo.jpg"  alt="des" width="65%">
        </div>
        </header>
      <a href="dashboardnew.php" class="mdl-layout__tab is-active">Looks</a>
      <a href="kitchen.php" class="mdl-layout__tab">Modular Kitchen</a>
      <a href="#scroll-tab-3" class="mdl-layout__tab">Wardrobes</a>
      <a href="#scroll-tab-4" class="mdl-layout__tab">Furnitures</a>
      <a href="#scroll-tab-5" class="mdl-layout__tab">Curtains</a>
      <a href="#scroll-tab-6" class="mdl-layout__tab">Decor Items</a>

        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button  type="submit">
                <i class="fa fa-search"></i>
            </button>
            <button>
            <div  class="material-icons mdl-badge mdl-badge--overlap" data-badge="1" >add_shopping_cart</div>
            </button>
            <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                <li class="mdl-menu__item">Username</li>
                <li class="mdl-menu__item">Logout</li>
                
                </ul>
           
          

        </div>
    </div>
    <div class="row">
    <?php
        if($productsresult -> num_rows>0){

            while($row = $productsresult->fetch_assoc()) {

                    $productName = $row["productName"];
                    $productDes = $row["description"];
                    $productImage = $row["image"];
                    $productQty = $row["quantity"];
                    $productPrice = $row["price"];
                    $productTax = $row["tax"];
                    $productDis = $row["discount"];

                echo "
               
                    <div class=\"column\">
                        <div class=\"card\">
                            <h1> $productName </h1>
                            <img src= $productImage  alt=\"Avatar\"style=\"width:100%\">
                                <div class=\"container\">
                                    <h4>
                                        <p>Desc: $productDes <br>   Quantity: $productQty<br> Price: $productPrice<br> Tax: $productTax 
                                        <br>discount: $productDis </p>
                                    </h4>
                            

                                    <button id=\"myBtn\" class=\"button\" style=\"float:top-left\"; onclick=javascript:add2cart();>Add To Cart</button>
                                       
                                </div>
                        </div>
                    </div>
           
         " ;
            }
        }
     ?>
    </div>
  



</body>




    </html>
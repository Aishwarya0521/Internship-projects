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

        <style>
             .row::after {
            content: "";
            clear: both;
            display: table;
        }
        .mdl-layout__tab-bar{
        padding:0px 5px  ;
        margin:2%;

    }
    .mdl-layout__tab{
        padding:50px 12px 0px 12px;
    }
    .search{
        padding:60px 15px;
    }

        .column {
            float: left;
            width: 30.33%;
             padding: 20px; 
        }

        .row1::after {
            content: "";
            clear: both;
            display: table;

        }

        .col1 {
            float: left;
            width: 1.33%;
            padding:50px;
        }
        .row2::after {
            content: "";
            clear: both;
            display: table;

        }
        .row3::after {
            content: "";
            clear: both;
            display: table;

        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

        }

        .container {
            padding: 1px 18px;
        }


            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.2s;
            width: 90%;
            margin: 10%;
            padding: 10px 20px;
            float: left;
            grid-template-rows: auto;
            background-color: pink;
        }

            </style>
    </head>

    <body>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
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
            </div>
         </div>
        <?php
                if($productsresult->num_rows>0){

                    while($row = $productsresult->fetch_assoc()) {

                            $productName = $row["productName"];
                            $productDes = $row["description"];
                            $productImage = $row["image"];
                            $productQty = $row["quantity"];
                            $productPrice = $row["price"];
                            $productTax = $row["tax"];
                            $productDis = $row["discount"];

                        echo "
                        <div class=\"row\">
                            <div class=\"column\">
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
                  
    </body>
</html>
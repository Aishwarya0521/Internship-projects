<?php
include 'config.php';
$selectproducts ="SELECT * FROM products";
$productsresult=$connection->query($selectproducts);
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <div style="background-color: dimpink;">
        <header style="text-align:center; font-size:12px;">
            <div class="logo-zoom">
                <img src="image/mylogo.jpg"  alt="des" width="8%">
</div>
        </header>
        
    <form action="dashboardnw.php method="post">
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
           
            <button style="float:right">
                <i class="fa fa-user"></i>
            </button>

        </div>
      
    </div>

   
  
    <ul>
 
        <li>
    
       <a  href="dashboardnw.php"<i class="fa fa-home"</i>Home</a>
           
            </li>
        <li>
            <a href="kitchen.php">
                <b>Modular Kitchen</b>
            </a>
        </li>
        <li>
            <a href="wardrobes.php">
                <b>Wardrobes</b>
            </a>
        </li>
        <li>
            <a href="furnitures.php">
                <b>Furnitures</b>
            </a>
          
          
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">
                <b> Other Products</b>
            </a>
            <div class="dropdown-content">
                <a href="screens.php">
                    <b>Screens</b>
                </a>
                <a href="idols.php">
                    <b>Idols</b>
                </a>

            </div>
        </li>
        <li>
            <a  href="admin.php">Admin </a>
        </li>
        <button style="float:right"; "margin:7%">
            <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1" >add_shopping_cart</div>
            </button>
        
            
       
    </ul>
  



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
                                        <div id=\"myModal\" class=\"modal\">
                                             <div class=\"modal-content\">
                                                <span class=\"close\">&times;</span>
                                                <p align=\"center\">Continue payment</p>

                                             </div>
                                         </div>
                                </div>
                        </div>
                    </div>
           
         " ;
            }
        }
     ?>
</form>
</body>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //alert button working,printing the value i.e 250
    var button = document.getElementById("myBtn").value;
    // alert(button);

    // function add2cart() {
    //                 console.log("button is working");
    
</script>
</html>
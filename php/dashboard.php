<?php
include 'config.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         body{
            background-color:#f1f1f1;
            padding:20px;
            font-family:Arial;
        }
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        ul {
            list-style-type: none;
            margin: 10;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
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
        .row1:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .col1 {
            float: left;
            width: 1.33%;
            padding: 50px;
        }
        .row2::after {
            content: "";
            clear: both;
            display: table;

        }
        .row2:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .row3::after {
            content: "";
            clear: both;
            display: table;

        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.2s;
            width: 90%;
            margin: 10%;
            padding: 50px 60px;
            float: left;
            grid-template-rows: auto;
            background-color: #fff;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }



        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

        }

        .container {
            padding: 1px 16px;
        }

        li {
            float: left;
          
            
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: orangered;
            text-align: left;
            padding: 30px 20px;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(130, 130, 131);
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #747474;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: whitesmoke;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: grey;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }



        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 7px;
            color: white;
            background-color: grey;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }


        .button:hover {
            background-color: #555;
        }
      
      




    </style>
</head>

<body>
    <div style="background-color: green;">
        <header style="text-align:center; font-size:24px;">
                
            <marquee><i style="color:black;" class="fa fa-h-square"></i><b>Homelyheaven</b></marquee>
        </header>
        

        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <button style="float:right">
                <i class="fa fa-shopping-cart"></i>
            </button>
            <button style="float:right">
                <i class="fa fa-user"></i>
            </button>

        </div>
      
    </div>

   
  
    <ul>
 
        <li>
    
       <a  href="dashboard.php"<i class="fa fa-home"</i>Home</a>
           
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
       
       
    </ul>
    <?php
    if($productsresult->num_rows>0){

while($row = $productsresult->fetch_assoc()) {
    
    $product_description=$row["description"];
    $productImage=$row["image"];

}
    }
?>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="image/Intr2.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Living Room</h4>
                    <p>Description : Furnished </p>

                    <button id="myBtn" class="button" onclick=javascript:add2cart();>Add To Cart</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p align="center">Continue payment</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="image/Intr2.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/Intr3.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="row1">
            <div class="column">
                <div class="card">


                <img src="image/Intr4.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
   

   
        <div class="column">
            <div class="card">
                <img src="image/dining room.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Dining room</b>
                    </h4>
                    <p>Description : furnished</p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/tiles.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
<div class="row2">
        <div class="column">
            <div class="card">
                <img src="image/liv.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/livng.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="image/bed.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Dining room</b>
                    </h4>
                    <p>Description : furnished</p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
   <div class="row3"> 
        <div class="column">
            <div class="card">
                <img src="image/bedr.jpeg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/bedrm.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="image/kitch.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4>
                        <b>Tiles</b>
                    </h4>
                    <p>Description : Furnished </p>
                    <p>
                        <button class="button">Add To Cart</button>
                    </p>
                </div>
            </div>
        </div>
    </div>


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
    // }
</script>
</html>
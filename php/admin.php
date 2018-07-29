<?php
include 'config.php';
$productName="";
$productDesc="";
$productImage="";
$productQty="";
$productPrice="";
$productTax="";
$productDis="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = test_input($_POST["product_name"]);
    $productDesc=test_input($_POST["product_desc"]);
    $productImage = test_input($_POST["product_image"]);
    $productQty=test_input($_POST["product_qty"]);
    $productPrice = test_input($_POST["product_price"]);
    $productTax=test_input($_POST["product_tax"]);
    $productDis = test_input($_POST["product_disc"]);
        
            $insert="INSERT INTO products (productName,description,image,quantity,price,tax,discount)
            VALUES('$productName','$productDesc','$productImage','$productQty','$productPrice','$productTax','$productDis')";
            if($connection->query($insert)==TRUE){
                echo "successful";
            }
            else{
            echo $connection -> error;
            }

        }
    

function test_input($data){
    $data=trim($data);
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
<html>
    <head>
        <style>
            .wrapper {
            padding: 20px;
            width: 350px;
        }
        </style>

        <title>
            My Admin
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<div class="wrapper";>
    <form action="admin.php" method="post">
        <h2>Admin</h2>
    <div>
            <label>Product name</label>
            <br>
            <input type="text" name="product_name">
        </div>
        <div>
            <label>Description</label>
            <br>
            <input type="text" name="product_desc">
        </div>
        <div>
            <label>Quantity</label>
            <br>
            <input type="text" name="product_qty">
        </div>
        <div>
            <label>Image</label>
            <br>
            <input type="text" name="product_image">
        </div>
        <div>
            <label>Price</label>
            <br>
            <input type="text" name="product_price">
        </div>
        <div>
            <label>Tax</label>
            <br>
            <input type="text" name="product_tax">
        </div>
        <div>
            <label>Discount</label>
            <br>
            <input type="text" name="product_disc">
        </div>
        <div>
            <button class="btn btn-primary" type="login">Save</button>
            <button>cancel</button>
        </div>
</form>
</div>
</body>
</html>
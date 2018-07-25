<?php
    include 'config.php';
    $password = "";
    $username = "";
    $confirm_password = "";
    $error_message = "";
    $success = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $username = $_POST["username"];
        $confirm_password = $_POST["confirm_password"];
        $select = "SELECT * FROM users WHERE username = '$username' ";
        $result = $connection->query($select);
        // 1. check if entered pwd and confirm new pwd are same ? goto else condition : throw error -> password not matching
        // 2. 
        // echo strcmp($password, $confirm_password)
        if(strcmp($password, $confirm_password)) {
            $error_message = "password not matching";
        } else if($result->num_rows > 0) {
            echo  "username already exsist, please try logging in! ";
        } else {
            $success = "successfully registered";
            $select="SELECT * FROM users WHERE username='$username'";
            $result=$connection->query($select);
                if($result->num_rows>0){
                    echo "username not found";
                }
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            echo "successfully";
            if($connection->query($sql) === TRUE) {
                echo "successfully registered";
                header('Location: login.php');
            }
            else {
                echo  $connection->error;
            }
        }
    }
?>


<html>
    <title>
        My-Page
    </title>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
        <div class="wrapper";>
            <form action="registration.php" method="post"> 
                <h1>Sign Up</h1>
                <p>Please fill form to create an account</p>
                <div>
                    <label>Username
                    <input type="text" name="username" required>
                    </label><br>
                </div>
                <div>
                    <label>Password
                    <input type="password" name="password" required>
                    </label><br>
                </div>
                <div>
                    <label>Confirm password
                    <input type="password" name="confirm_password" required>
                    <label class="error"><?php echo $error_message; ?> </label>
                    <label class="success"><?php echo $success; ?> </label>
                    </label><br>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit"; color="blue">Submit</button>
                    <button type="reset">Reset</button>
                    <p>already have an account? <a href="login.php">Login here</a></p>
                </div>
            </form>
        </div>
    </body>
</html>




<?php
    include 'config.php';
    $loginName="";
    $loginPassword="";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $loginName = $_POST["login_name"];
        $loginPassword=$_POST["login_password"]; 
        $selectusers ="SELECT * FROM users WHERE username ='$loginName' AND password = '$loginPassword' ";
        $usersresult=$connection->query($selectusers);
        if($usersresult->num_rows>0){
            echo "successfully logged-in ";
            header('Location :\loader1.php');
        }
    
               else{
                    echo "user not registered";
                    

                }
            
         }
?>

<html>

    <head>
        <title>
            Login-Page
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="page.css">
    </head>

    <body>
             <div class="page">
                  <img src="./avater.png" alt="avater" class="left">
    
                  <form action="login.php" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <label>
                            <b>Username</b>
                        </label>
                        <br>
                        <input type="text" name="login_name" required>
                    </div>
                    <br>
                    <div>
                        <label>
                            <b>Password</b>
                        </label>
                        <br>
                        <input type="password"  name="login_password" required>
                    </div>
                    <div>
                   
                        <button class="btn btn-primary" type="login" <a href="loader1.php"> Login</button>

                    </div>
                    <label class="check">
                        <input type="checkbox" checked="checked" name="remember me">Remember me
                    </label>
                    <div>
                        <button class="cancelbtn">Cancel</button>

                        <p>Do not have  account?
                            <button>
                                <a href="registration.php">Register</a>
                            </button>
                            </p>
                              <p>forgot password?
                                  <a>click here</a>
                              </p>
                      

                    </div>
                </form>
            </div>
    </body>
  
</html>

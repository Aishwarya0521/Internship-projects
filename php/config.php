<?php
    define('DB_Server', 'localhost');
    define('DB_Username', 'root');
    define('DB_Password', '');
    define('DB_name', 'e_commerce');
    $connection = mysqli_connect(DB_Server, DB_Username, DB_Password, DB_name);
        if($connection===false){
            die('Error while connecting to Database');
        }
        else{
         
        }

?>

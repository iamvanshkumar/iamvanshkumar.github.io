<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "vkphotography"; 

    $db = new PDO('mysql:host=localhost;dbname=' .$db_name .';charset=utf8', $user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>      
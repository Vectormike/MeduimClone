<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "meduimClone");
if (mysqli_connect_errno){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();;
}

if(isset($_POST["username"])){

    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_login WHERE admin_name = .$name. AND admin_password = $password";
    
    $result = mysqli_query($connect, $sql);
    
    if(result){
        $value = $result->fetch_all();
        if(count($value) > 0){
           echo json_encode([
               'status' => 200,
               'answer' => 'Logged in successfully'
           ]);
           $_SESSION["username"] = $name;
           return;
       }
       else{
           echo json_encode([
               'status' => 1,
               'answer' => 'Unable to login'
           ]);
           return;
        }
    }
    echo "an error occured";
    return;
}

?>
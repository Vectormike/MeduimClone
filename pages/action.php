<? php
session_start();
$connect = mysqli_connect("localhost", "root", "", "meduimClone");

if(isset($_POST["username"])){
    $query = "
        SELECT * FROM admin_login
        WHERE admin_name = '".$_POST['username']"'
        AND admin_password = '".$_POST['password']"'
    ";
    $result = mysqli_query($connect, $query)
    if(mysqli_num_rows > 0){
        $_SESSION["username"] = $_POST["username"];
        echo 'Yes';
    }
    else{
        echo 'No'; 
    }
}

?>
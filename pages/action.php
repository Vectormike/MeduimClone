<?php

<<<<<<< HEAD
session_start();

$connect = mysqli_connect("localhost", "root", "", "meduimClone");
if (mysqli_connect_errno){
    echo "Failed to connect to MySQL: " .mysqli_connect_error();;
}
=======





// echo "james";
// return;
session_start();
// $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
$connect = mysqli_connect("localhost", "root", "root", "mediumclone");
>>>>>>> bf61913156dde9d640f8c9faccb71f6c2619886a

// $name =  $_POST['username'];
// $password = $_POST['password'];
// echo "$name";
// return;
if(isset($_POST["username"])){
<<<<<<< HEAD

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
=======
	$name =  $_POST['username'];
	$password = $_POST['password'];
	// echo "$password"; return;
    $sql = "SELECT * FROM `admin_login` WHERE `name` ='$name' AND `password` ='$password'";
    // $result = $connect->query($query);
    $result = $connect->query($sql);
    // $result = mysqli_query($connect, $query);
    if ($result) {
    	$value = $result->fetch_all();
    	if (count($value) > 0) {
    		echo json_encode([
                'status' => 200,
                'answer' => 'logged in successfully'
            ]);
    		//do your handling here
    		return;
    	}else{
		    echo json_encode([
                'status' => 1,
                'answer' => 'unable to login please change your login details'
            ]);
		    return ;
    	}
    }
    echo "an error occured";
    return;
>>>>>>> bf61913156dde9d640f8c9faccb71f6c2619886a

}

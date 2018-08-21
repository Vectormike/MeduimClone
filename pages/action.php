<?php






// echo "james";
// return;
session_start();
// $conn = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE );
$connect = mysqli_connect("localhost", "root", "root", "mediumclone");

// $name =  $_POST['username'];
// $password = $_POST['password'];
// echo "$name";
// return;
if(isset($_POST["username"])){
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

}

<?php 
    include('config/connect.php');
	/* Connect to your database */
	// $con = mysqli_query("hostname", "username", "pwd", "database");
    /* Select Columns from table*/
    $sql = "SELECT * FROM `admin`";
    /* Query your SQL code to SQLDatabase */
    $result = mysqli_query($con, $sql);
    /* Find rows in table*/
    $check = mysqli_num_rows($result);
    if($check > 0){
    while($data= mysqli_fetch_assoc($result)){
    /* Print all of your data*/
    echo $data["password"];
    echo "<br>";
    }
    }
?>
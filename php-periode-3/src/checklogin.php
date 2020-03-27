<?php 
    @session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "'1") {
    echo "you are logged in";
    // dd($_SESSION);
} else {
    // echo $_SESSION['loggedin'];
    session_destroy();
    // dd($_SESSION);
    header('Location: view/login_user.php');
    exit;
}

?>
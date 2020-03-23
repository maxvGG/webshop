<?php
    function setformdata(){
        global $con;
        if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
            $email = dbp($_POST['field_email']);
        }else{
            echo "email is verplicht";
        }
        if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
            $password = dbp($_POST['field_password']);
            
            $sql = "SELECT password FROM user WHERE emailadres = '$email'";    
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            $source = $row['password'];
            echo $source;
        }else{
            echo "Password is verplicht";
        }
        if(isset($_POST['submit'])){
            if(password_verify($password,$source)){
                // password verify werkt soort van alleen nog vragfen hoe je zorgt dat je er is een lek plaatsgevonden weghaalt
                header('Location: ../index.php');
            } else {
                echo "error";
            }
        }
    }
    
?>
<?php 

/**
 * Standaard functie definitie
 * @param string Dit noem je een parameter (die staat tussen haakjes)
 * @return array Dit is de waarde die je functie doorgeef
 */
function setFormData(){
    global $con; // dit is je database connectie
    if(isset($_POST['field_firstname']) && $_POST['field_firstname'] != ''){
        $firstname = dbp($_POST['field_firstname']);
    }else{
        echo "Voornaam is verplicht";
    }

    if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
        $password = dbp($_POST['field_password']);
        $pwd_hashed = password_hash ($password , PASSWORD_DEFAULT);
    }else{
        echo "Password is verplicht";
    }

    if(isset($_POST['field_infix']) && $_POST['field_infix'] != ''){
        $middlename = dbp($_POST['field_infix']);
    }else{
        echo "middle name is verplicht";
    }

    if(isset($_POST['field_lastname']) && $_POST['field_lastname'] != ''){
        $lastname = dbp($_POST['field_lastname']);
    }else{
        echo "last is verplicht";
    }

    if(isset($_POST['field_date']) && $_POST['field_date'] != ''){
        $date = dbp($_POST['field_date']);
    }else{
        echo "date is verplicht";
    }

    if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
        $email = dbp($_POST['field_email']);
    }else{
        echo "email";
    }

    // pwd_hashed in bind_param zetten nog niet gelukt 
    $query1 = $con->prepare("INSERT INTO user(firstname,middlename,lastname,birthdate,emailadres,password) VALUES (?,?,?,?,?,?);");
    
    if ($query1 === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    // hashed password zit er nog niet in 
    $query1->bind_param('ssssss', $firstname,$middlename,$lastname,$date,$email,$pwd_hashed);
    if ($query1->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "Gebruiker toegevoegd";
        header('location: loginuser.php');
        $query1->close();
    }
    
}

?>
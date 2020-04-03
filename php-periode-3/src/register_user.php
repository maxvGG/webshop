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
    }
    if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
        $password = dbp($_POST['field_password']);
        $pwd_hashed = password_hash ($password , PASSWORD_DEFAULT);
        $permissions = dbp($_POST['permissions']);
    }

    if(isset($_POST['field_infix']) && $_POST['field_infix'] != ''){
        $middlename = dbp($_POST['field_infix']);
    }
    if(isset($_POST['field_lastname']) && $_POST['field_lastname'] != ''){
        $lastname = dbp($_POST['field_lastname']);
    }
    if(isset($_POST['field_date']) && $_POST['field_date'] != ''){
        $date = dbp($_POST['field_date']);
    }

    if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
        $email = dbp($_POST['field_email']);
    }
    
    if(isset($_POST['gender']) && $_POST['gender'] != ''){
        $gender = dbp($_POST['gender']);
    }
    if(isset($_POST['field_street']) && $_POST['field_street'] != ''){
        $street = dbp($_POST['field_street']);
    }
    if(isset($_POST['field_houseNumber']) && $_POST['field_houseNumber'] != ''){
        $house = dbp($_POST['field_houseNumber']);
    }
    if(isset($_POST['field_addon']) && $_POST['field_addon'] != ''){
        $addon = dbp($_POST['field_addon']);
    }
    if(isset($_POST['field_zipcode']) && $_POST['field_zipcode'] != ''){
        $zipcode = dbp($_POST['field_zipcode']);
    }
    if(isset($_POST['field_city']) && $_POST['field_city'] != ''){
        $city = dbp($_POST['field_city']);
    }
    if(isset($_POST['field_country']) && $_POST['field_country'] != ''){
        $country = dbp($_POST['field_country']);
    }
    if(isset($_POST['field_phone']) && $_POST['field_phone'] != ''){
        $phone = dbp($_POST['field_phone']);
    }
    


    // pwd_hashed in bind_param zetten nog niet gelukt 
    $query1 = $con->prepare("INSERT INTO costumer(firstname,middlename,lastname,emailadres,password,gender,street,houseNumber,houseNumber_addon,zipcode,city,country,phone) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);");
    if ($query1->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    }
    
    // hashed password zit er nog niet in 
    $query1->bind_param('sssssssssssss', $firstname,$middlename,$lastname,$email,$pwd_hashed,$gender,$street,$house,$addon,$zipcode,$city,$country,$phone);
    if ($query1->execute() === false) {
        echo mysqli_error($con)." - ";
        exit(__LINE__);
    } else {
        echo "Gebruiker toegevoegd";
        header('location: login_user.php');
        $query1->close();
    }
    
}

?>
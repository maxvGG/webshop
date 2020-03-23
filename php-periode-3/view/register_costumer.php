<?php
    include("../config/connect.php");
    include("../src/register_costumer.php");

    //dd($_POST);

    if(!empty($_POST)){
        $sfd = setFormData();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CMS registratie</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post" action="register_costumer.php">
                    <div class="form-group">
                        <label for="gender">gender</label> <br>
                        <select name="field_gender" id="gender" class="form-control" required>
                            <option value="m" class="form-control">male</option>  
                            <option value="f" class="form-control">female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">name</label>
                        <input type="text" name="field_firstname" class="form-control" id="fname" placeholder="first name" required />
                        <input type="text" name="field_infix" class="form-control" id="iname" placeholder="middle name" />
                        <input type="text" name="field_lastname" class="form-control" id="lname" placeholder="last name" required />
                    </div>     
                    <div class="form-group">   
                        <label for="adres">adres</label>
                        <input type="text" name="field_street" class="form-control" placeholder="street" required>
                        <input type="number" name="field_housenumber" class="form-control" placeholder="house number" required>
                        <input type="text" name="field_addon" class="form-control" placeholder="house number addon">
                        <input type="text" name="field_zipcode" class="form-control" placeholder="zip code" required>
                        <input type="text" name="field_city" class="form-control" placeholder="city" required>
                        <input type="text" name="field_country" class="form-control" placeholder="country" required>
                    </div>     
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="field_email" class="form-control" id="email" placeholder="email" required />
                    </div>      
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" name="field_phone" class="form-control" id="ephone" placeholder="phone number" required />
                    </div>
                    <div class="form-group">
                        <label for="passwd">Wachtwoord</label>
                        <input type="password" name="field_password" class="form-control" id="passwd" placeholder="Wachtwoord" required />
                    </div>
                    <input type="submit" name="submit" class="btn btn-info" value="Registreren" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
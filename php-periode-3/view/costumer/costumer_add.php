<?php
   include("../../config/connect.php");
    include("../../src/costumer_add.php");


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
    <link rel="stylesheet" href="../../assets/css/styleOverzicht.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post" action="costumer_add.php">
                    <div class="form-group">
                        <label for="fname">naam</label>
                        <select name="gender" id="gender" class='form-control' required>
                            <option value="f">vrouw</option>
                            <option value="m">man</option>
                            <option value="o">overige</option>
                        </select>
                        <input type="text" name="firstName" id="fname"  class="form-control" placeholder="voornaam" required />
                        <input type="text" name="middleName" id="iname"  class="form-control" placeholder="tussennaam" />
                        <input type="text" name="lastName" id="lname"  class="form-control" placeholder="achternaam" required />
                    </div>
                    <div class="form_group">
                        <label for="woonplaats">woonplaats</label>
                        <input type="text" name='street' class='form-control' id="street" placeholder="straat" required>
                        <input type="text" name='houseNumber' id="houseNumber"class="form-control" placeholder="huisnummer"required>
                        <input type="text" name="houseNumber_addon" class="form-control" id='addon'placeholder="addon">
                        <input type="text" name='zipcode' class="form-control" id='zipcode'placeholder="postcode" required>
                        <input type="text" name="city" id='city' class="form-control" placeholder="stad" required>
                        <input type="text" name="country" id='land' class="form-control" placeholder="land" required>
                        <input type="number" name='phone'class="form-control"placeholder="telefoonnummer">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email" required />
                    </div>
                    <div class="form-group">
                        <label for="passwd">Wachtwoord</label>
                        <input type="password" name="password" class="form-control" id="passwd" placeholder="Wachtwoord" required />
                        <input type="checkbox" name="newsletter">
                        <!-- <input type="hidden" name="permissions" value="1"> -->
                    </div>
                    <input type="submit" name="submit" class="btn btn-info" value="Registreren" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
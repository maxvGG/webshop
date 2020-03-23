<?php
    include("../config/connect.php");
    include("../src/register_user.php");

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
                <form method="post" action="register_user.php">
                    <div class="form-group">
                        <label for="fname">naam</label>
                        <input type="text" name="field_firstname" id="fname"  class="form-control" placeholder="voornaam" required />
                        <input type="text" name="field_infix" id="iname"  class="form-control" placeholder="tussennaam" />
                        <input type="text" name="field_lastname" id="lname"  class="form-control" placeholder="achternaam"  />
                    </div>
                    <div class="form-group">
                        <label for="date">birthdate</label>
                        <input type="date" name="field_date" class="form-control" id="bday"/>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="field_email" class="form-control" id="email" placeholder="email"  />
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
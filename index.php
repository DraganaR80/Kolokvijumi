<?php
require "dbBroker.php";
require "Model/user.php";
session_start();

if(isset($_POST['username'])&& isset($_POST['password'])){ //ako je user uneo user name i password tj da li je setovano

    $username= $_POST['username'];
    $password = $_POST['password'];

    $korisnik= new User (1,$username, $password);
    $odgovor  = User:: loginUser ($korisnik,$conn);
    //print_r($odgovor);

 if($odgovor->num_rows ==1){ //ako si vratio 1 red tj nasao si tog jednog korisnika taj user name i passowrd znaci da on postoji
        $_SESSION['user_id'] = $korisnik->id; //da zapamti korisnika koji postoji
    header("Location:home.php"); // prebaci ga na ovu stranicu
    exit();
 }
else  // ako ga nisi pronasao ispisi ovo
{
    echo "User ne postoji";
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>
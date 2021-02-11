<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Register - a docker project</title>
</head>
<body>
<?php
        include 'functions.php';
    ?>
    <div class="container">
        <?php
        if (isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $pdo = getDBCon('dockerdb');
            $req = "INSERT INTO `users`(`username`, `nom`, `prenom`, `password`) VALUES (:username, :nom, :prenom, :pass)";
            $stmt = $pdo->prepare($req);
            $stmt->execute(array(
                "username" => $username, 
                "nom" => $nom,
                "prenom" => $prenom,
                "pass" => $hashed_pass
                ));
            echo '<h3>✅ User has been added ' . '('. $stmt->rowCount() .' lines added)</h3>';
        }
        ?>
        <div class="register-form">
            <form method="post">
                <input placeholder="Username" name="username" type="text" required />
                <input placeholder="Nom" name="nom" type="text" required />
                <input placeholder="Prenom" name="prenom" type="text" required />
                <input placeholder="Password" name="password" type="password" required />
                <input type="submit" class="submitbtn" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
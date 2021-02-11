<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Home - a docker project</title>
</head>
<body>
    <?php
        include 'functions.php';
    ?>
    <div class="container">
        <h1>Liste des utilisateurs</h1>
        <table cellspacing="0" class="table">
            <tbody> 
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Password (hashed)</td>
            </tr> 
                <?php
                    $users = SQLRequest("SELECT * from users;", "dockerdb");
                    foreach($users as $user) {
                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['nom'] ?></td>
                        <td><?= $user['prenom'] ?></td>
                        <td><?= $user['password'] ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
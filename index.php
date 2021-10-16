<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class='error'><?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label for="">Nom d'utilisateur</label>
        <input type="text" name="name" placeholder="Entrez votre nom"></br>

        <label for="">Mot de passe</label>
        <input type="password" name="password" placeholder="Entrez votre mot de passe"></br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
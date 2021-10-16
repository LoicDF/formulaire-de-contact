<?php session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
        <title>Home</title>
    </head>

    <body class="test">
        <h1 class="homePage">bienvenue sur ta page privé <?php echo $_SESSION['name']; ?>, si tu souhaites te déconnecter tu n'as plus qu'a cliquer sur "déconnection" </h1></br>
        <a href="logout.php">Déconnection</a>
    </body>

    </html>

<?php
} else {
    header("Location: home.php");
    exit();
}

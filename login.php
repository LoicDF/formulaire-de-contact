<?php
session_start();
include "db_conn.php";
if (isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $password = validate($_POST['password']);

    if (empty($name) && empty($password)) {
        header("Location: index.php?error=nom utilisateur requis et mot de passe requis");
        exit();
    } else if (empty($name)) {
        header("Location: index.php?error=nom utilisateur requis");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=mot de passe requis");
        exit();
    } else if (empty($name) && empty($password)) {
        header("Location: index.php?error=nom utilisateur requis mot de passe requis");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE name='$name' AND password='$password' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // echo "hello $name , bienvenue sur ton login ";
            $row = mysqli_fetch_assoc($result);
            if($row['name'] === $name && $row['password'] === $password) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['name?'] = $row['name?'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=utilisateur ou mot de passe incorrect");
                exit();
            }
        } else {
            header("Location: index.php?error=nom utilisateur erroné et/ou mot de passe erroné");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}

<?php

require_once '../system/system.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password';";
    $result = mysql_query($sql);
    if (!empty($result)) {
        if (mysql_num_rows($result) == 1) {
            $_SESSION['login'] = $username;
            $_SESSION['pass'] = $password;

            header("Location: index.php");
            exit();
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['pass']);

            header("Location: ../views/login.php");
            exit();
        }
    } 
} else {
    header("Location: index.php");
    exit();
}
?>

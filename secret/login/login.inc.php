<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../config/config_session.inc.php';
    require_once '../Database/database.php';
    require_once 'login_model.php';
    require_once 'login_controller.php';

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $errors = [];

    if (is_input_empty($username, $password)) {
        $errors['empty_input'] = 'Fill in all fields';
    } elseif (!check_acc($conn, $username, $password)) {
        $errors['wpwd'] = 'Wrong username or password';
    }

    if ($errors) {
        $_SESSION['login_errors'] = $errors;
        header('Location: ../../index.php');
        die();
    }

    session_regenerate_id(true);
    $_SESSION['veri'] = true;
    $_SESSION['username'] = $username;

    header('Location: ../../Home.php');
    die();
}
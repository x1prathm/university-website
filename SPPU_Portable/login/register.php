<?php
// JSON-based registration and login (no database)

require_once 'connect.php';
session_start();

if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['fName'] ?? '');
    $lastName  = trim($_POST['lName'] ?? '');
    $email     = strtolower(trim($_POST['email'] ?? ''));
    $password  = $_POST['password'] ?? '';

    if ($firstName === '' || $lastName === '' || $email === '' || $password === '') {
        echo "All fields are required.";
        exit;
    }

    $users = load_users();

    foreach ($users as $u) {
        if (isset($u['email']) && $u['email'] === $email) {
            echo "Email Address Already Exists!";
            exit;
        }
    }

    $users[] = [
        'firstName' => $firstName,
        'lastName'  => $lastName,
        'email'     => $email,
        // For local/demo use only: store password in plain text
        'password'  => $password,
        'created_at'=> date('Y-m-d H:i:s'),
    ];

    save_users($users);

    $_SESSION['email']     = $email;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName']  = $lastName;

    header("Location: ../index.php");
    exit;
}

if (isset($_POST['signIn'])) {
    $email    = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        echo "Email and Password are required.";
        exit;
    }

    $users = load_users();
    foreach ($users as $u) {
        if (isset($u['email']) && $u['email'] === $email && isset($u['password']) && $u['password'] === $password) {
            $_SESSION['email']     = $u['email'];
            $_SESSION['firstName'] = $u['firstName'] ?? '';
            $_SESSION['lastName']  = $u['lastName'] ?? '';
            header("Location: ../index.php");
            exit;
        }
    }

    echo "Not Found, Incorrect Email or Password";
    exit;
}

echo "Invalid request.";
?>

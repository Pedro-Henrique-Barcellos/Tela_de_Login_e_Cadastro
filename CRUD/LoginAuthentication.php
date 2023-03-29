<?php
require('../conn.php');
echo '<pre>';
print_r($_POST);
echo '</pre>';

$email = $_POST['email'];
$password = $_POST['password'];

$LoginInfo = $pdo->prepare("SELECT * FROM UsersInfo WHERE email_user = :email_user AND password_user = :password_user");
$LoginInfo->execute(['email_user' => $email, 'password_user' => $password]);
$user = $LoginInfo->fetch();

if ($user) {  
    header('Location: ../Dashboard.php');
    exit();
} else {
    echo "User does not exist";
}
?>
<?php
require('../conn.php');
echo '<pre>';
print_r($_POST);
echo '</pre>';

$email_user = $_POST['email_user'];
$password_user = $_POST['password_user'];
$password_user_confirmation = $_POST['password_user_confirmation'];

$LoginInfo = $pdo->prepare("SELECT * FROM UsersInfo WHERE email_user = :email_user AND password_user = :password_user");
$LoginInfo->execute(['email_user' => $email_user, 'password_user' => $password_user]);
$user = $LoginInfo->fetch();

if ($user) {
    header('Location: CadastroUsado.php');
} else if ($password_user != $password_user_confirmation) {
    header('Location: CadastroInvalido.php');
} else if ($password_user == $password_user_confirmation) {
    $InsertInfo = $pdo->prepare("INSERT INTO UsersInfo (email_user, password_user) VALUES (:email_user, :password_user)");
    $InsertInfo->execute(['email_user' => $email_user, 'password_user' => $password_user]);
    header('Location: CadastroSucesso.php');
}
?>

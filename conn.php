<?php
try {

$pdo = new PDO('mysql:host=localhost;dbname=Users','root','');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> exec("SET CHARACTER SET utf8");
echo 'INVALID!';

}catch(PDOException $error){
    echo "Error".$error->getMessage();
}
?>
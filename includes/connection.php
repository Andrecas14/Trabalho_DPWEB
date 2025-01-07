<?php 
$user = 'web';
$pass = 'web';
$database = 'grupo209';

try{
    $dbh = new PDO('mysql:host=localhost;dbname='. $database, $user, $pass);

}catch(PDOException $e){
    echo $e;
}

?>
<?php 
$user = 'web1';
$pass = 'web';
$database = 'projeto';

try{
    $dbh = new PDO('mysql:host=localhost;dbname='. $database, $user, $pass);

}catch(PDOException $e){
    echo $e;
}

?>
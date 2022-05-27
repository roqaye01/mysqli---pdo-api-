
<?php 
// connect to db by PDO: (*:creat database pdo name)
$servername="localhost";
$username="root";
$password="";
$dbname="pdo";
$dsn="mysql:host=$servername;dbname=$dbname";
try{
$connect= new PDO($dsn,$username ,$password);

return $connect;

}catch(PDOException $error){
echo "error in connect::".$error->getMessage();
exit();
}
?>
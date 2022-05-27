<?PHP 
// connect to db bY MYSQLI :
//  creat db con 
	 $servername="localhost";
	 $username="root";
	 $password=" ";
	 $con=mysqli_connect($servername , $username , $password );
    if(mysqli_connect_error())
    {  
    die("failled:".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }

?> 
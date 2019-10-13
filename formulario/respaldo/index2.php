<?php
	
	$host="localhost";  //Dominio donde se encuentra la base de datos
	$user="root";       //Usuario de base de datos
	$pass="";           //Password
	$db="tareaiacc";    //Nombre base de datos

// Variable de fecha y hora en que se va a realizar el respaldo
$fecha = date("d-m-Y_His");


//$salida_sql = $db.'__'.$fecha.'.sql';


$filename = "./"."respaldo.sql";

$executa = 'C:\\xampp\\mysql\\bin\\mysqldump.exe'." -u$user --pass=$pass --opt $db > $filename";
system($executa);





//system('C:\xampp\mysql\bin\mysqldump'."-h$host -u$user -p$pass $db > "."$salida_sql");


//$dump = 'C:\xampp\mysql\bin\mysqldump' --single-transaction -h'.$host.' -u'.$user.' -p'.$pass.''.$db.' > $salida_sql";

//$dump = 'C:\xampp\mysql\bin\mysqldump' --single-transaction -h'.$host.' -u'.$user.' -p'.$pass.''.$db.' > $salida_sql";


//$dump = "mysqldump --user=".$user." --password=".$pass." --host=".$host." ".$db." > $salida_sql";


// system('C:\xampp\mysql\bin\mysqldump.exe'." -h$host -u$user -p$pass $db > "."$salida_sql");






//system($dump, $output); 


?>
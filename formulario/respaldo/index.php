<?php
	
	$host="localhost";  //Dominio donde se encuentra la base de datos
	$user="root";       //Usuario de base de datos
	$pass="adidas";           //Password
	$db="tareaiacc";    //Nombre base de datos

// Variable de fecha y hora en que se va a realizar el respaldo
$fecha = date("d-m-Y_His");


$salida_sql = $db.'__'.$fecha.'.sql';


//$dump = 'C:\xampp\mysql\bin\mysqldump.exe' --single-transaction -h'.$host.' -u'.$user.' -p'.$pass.''.$db.' > $salida_sql";

//$dump = 'C:\xampp\mysql\bin\mysqldump' --single-transaction -h'.$host.' -u'.$user.' -p'.$pass.''.$db.' > $salida_sql";

//system('C:\xampp\mysql\bin\mysqldump.exe'." -h$host -u$user -p$pass $db > "."$salida_sql");


//$dump = "C:\xampp\mysql\bin\mysqldump -h $host -u $user -p$pass --opt$db>$salida_sql.sql";
 
$dump = "mysqldump --user=".$user." --password=".$pass." --host".$host." ".$db." >$salida_sql";

//$dump = 'C:\xampp\mysql\bin\mysqldump --single-transaction -user'.$user.'                -password'.$pass.''.$db.' > '$salida_sql.';



system($dump, $output); 


?>
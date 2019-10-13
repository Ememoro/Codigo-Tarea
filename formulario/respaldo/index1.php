<?php

/**
 * Define database parameters here
 */
//define("DB_USER", 'your_username');
//define("DB_PASSWORD", 'your_password');
//define("DB_NAME", 'your_db_name');
//define("DB_HOST", 'localhost');


	$host="localhost";  //Dominio donde se encuentra la base de datos
	$user="root";       //Usuario de base de datos
	$pass="";           //Password
	$db="tareaiacc";    //Nombre base de datos


define("C:\xampp\htdocs\formulario\respaldo", '.');

//define("BACKUP_DIR", 'myphp-backup-files'); // Comment this line to use same script's directory ('.')

define("TABLES", '*'); // Full backup

//define("TABLES", '*'); // Full backup
//define("TABLES", 'table1 table2 table3'); // Partial backup
define("CHARSET", 'utf8');


define("GZIP_BACKUP_FILE", false);



?>
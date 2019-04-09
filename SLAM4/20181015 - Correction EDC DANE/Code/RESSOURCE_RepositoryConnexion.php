<?php
class DbCnx {
private $cnxInstance ;
private $hostname ;
private $dbUser;
private $dbPwd;

public function __construct() { 
$dsn = "sqlsrv:Server=SQLSRV1,1433;Database=TEST";
$this->cnxInstance = new PDO($dsn, "SQLTROBERT", "TEST");

$this->cnxInstance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

public function getCnx() {
	return $this->cnxInstance;
	}
}
	?>
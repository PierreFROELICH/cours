<?php
abstract class PDORepository{
        const USERNAME="SQLTROBERT";
        const PASSWORD="TEST";
        const SERVER="SQLSRV1";
        const DB="TEST";

        private function getConnection(){
            $username = self::USERNAME;
            $password = self::PASSWORD;
            $server = self::SERVER;
            $db = self::DB;
            $connection = new PDO("sqlsrv:server=$server,1433;Database=$db", $username, $password);
            return $connection;
        }
        protected function queryList($sql, $args){
            $connection = $this->getConnection();
            $stmt = $connection->prepare($sql);
            $stmt->execute($args);
            return $stmt;
        }
    }

		class UserRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select * from SOFTWARE.REF_LIB_JEUX";
								$statement = $this->queryList($requeteSql,NULL) ;
								while ($ligneJeux = $statement->fetch())
								{
									    print_r($ligneJeux);
										echo "<BR>";
								}
		        }  // fin init
					}

$user = new UserRepository()	;
$user->init() ;

?>

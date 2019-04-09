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
        protected function queryList($sql, $fetch_mode,$nom_classe){
            $connection = $this->getConnection();
            $stmt = $connection->prepare($sql);
            if ($nom_classe === NULL)
            {
                $stmt->setFetchMode($fetch_mode);
            }
            else
            {
                $stmt->setFetchMode($fetch_mode,$nom_classe);
            }
            $stmt->execute();
            return $stmt;
        }
    }



?>

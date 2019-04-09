<?php
require ('EXO2_FormationEleve.php');
require ('EXO1_Repository_SQLServer.php');


class FetchRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,PDO::FETCH_BOTH,NULL) ;
								while ($eleve = $statement->fetch())
								{
                                            print_r($eleve);
								}
		        }  // fin init
					}


class FetchClasseRepository extends PDORepository{
		        public function init() {
		            $requeteSql = "select id_eleve, nom_eleve, nb_heures_cours_info, code_filiere from PROCS.FORMATIONELEVES";
								$statement = $this->queryList($requeteSql,PDO::FETCH_CLASS,'FormationEleve') ;
								while ($eleve = $statement->fetch())
								{
                                            $eleve -> afficheTout();
								}
		        }  // fin init
					}

$user = new FetchClasseRepository()	;
$user->init() ;


?> 
 SELECT DISTINCT pf.nom_pays
FROM footedc.PAYS_FOOTBALL pf 
INNER JOIN 
(
   SELECT id_equipe 
   FROM footedc.but_detail
   WHERE id_match=(
     SELECT id_match 
     FROM FOOTEDC.MATCH_SYNTHESE 
     WHERE nb_spectateurs=(
       SELECT max(nb_spectateurs) 
       FROM FOOTEDC.MATCH_SYNTHESE )
	   )
) aud
ON pf.ID_PAYS =aud.id_equipe
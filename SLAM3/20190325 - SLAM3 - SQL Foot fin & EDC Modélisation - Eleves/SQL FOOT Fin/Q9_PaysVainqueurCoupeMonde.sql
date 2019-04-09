SELECT pf.nom_pays 
FROM footedc.PAYS_FOOTBALL pf 
INNER JOIN (
SELECT id_equipe 
FROM footedc.match_detail md 
WHERE ETAPE_COMPETITION='F' and resultat='VICTOIRE') SR
ON pf.ID_PAYS = SR.ID_EQUIPE
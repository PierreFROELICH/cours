select a.PRENOM_NOM_ARBITRE ,
pf.NOM_PAYS as nationalite,
count(*) as NB_MATCHS_ARBITREs
from FOOTEDC.ARBITRE a
inner join FOOTEDC.PAYS_FOOTBALL pf
on a.ID_PAYS = pf.ID_PAYS
inner join FOOTEDC.MATCH_SYNTHESE ms
on a.ID_ARBITRE = ms.ID_ARBITRE
GROUP BY a.PRENOM_NOM_ARBITRE ,
pf.NOM_PAYS 
HAVING count(*) =
(
select max(sr.nb) as maximatch
from 
(
select ms.id_arbitre, count(*) as nb
from footedc.MATCH_SYNTHESE ms
group by ms.ID_ARBITRE
) sr
)
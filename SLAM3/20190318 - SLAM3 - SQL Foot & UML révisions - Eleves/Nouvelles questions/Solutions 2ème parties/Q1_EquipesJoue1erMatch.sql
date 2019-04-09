SELECT md.id_match,pf.nom_pays
FROM footedc.match_detail md
INNEr JOIN footedc.PAYS_FOOTBALL pf ON md.id_equipe=pf.id_pays
 AND md.id_match=1;
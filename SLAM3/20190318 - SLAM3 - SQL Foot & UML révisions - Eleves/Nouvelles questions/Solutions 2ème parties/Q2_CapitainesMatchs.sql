SELECT c.id_match,pf.NOM_PAYS, j.nomprenom_joueur, 
j.numero_maillot, j.position_terrain 
FROM footedc.capitaines c
JOIN footedc.PAYS_FOOTBALL pf ON c.id_equipe=pf.id_pays
JOIN footedc.joueurs j ON c.id_joueur_capitaine=j.id_joueur
order by c.id_match
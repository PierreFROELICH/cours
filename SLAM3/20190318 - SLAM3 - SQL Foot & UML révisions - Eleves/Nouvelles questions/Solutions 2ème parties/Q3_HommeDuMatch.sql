SELECT j.nomprenom_joueur, pf.NOM_PAYS
FROM footedc.joueurs j 
inner JOIN footedc.MATCH_SYNTHESE ms ON ms.ID_JOUEUR_MATCH=j.id_joueur
AND ms.ETAPE_COMPETITION='F'
inner JOIN footedc.PAYS_FOOTBALL pf
ON j.id_equipe=pf.id_pays;
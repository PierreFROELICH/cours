SELECT r.id_match,pf.nom_pays,j.nomprenom_joueur, 
j.numero_maillot,r.temps_remplacement
FROM FOOTEDC.remplacements r
JOIN FOOTEDC.joueurs j ON r.id_joueur=j.id_joueur
JOIN footedc.PAYS_FOOTBALL pf  ON j.id_equipe=pf.id_pays
WHERE r.entree_sortie='E'
AND r.temps_additionnel='N'
AND r.periode_remplacement=1
ORDER BY r.id_match;
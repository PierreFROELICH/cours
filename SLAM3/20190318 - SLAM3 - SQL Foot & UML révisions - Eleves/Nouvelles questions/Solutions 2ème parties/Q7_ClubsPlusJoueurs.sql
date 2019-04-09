SELECT j.nom_club, COUNT(j.nom_club) 
FROM footedc.joueurs j  GROUP BY j.nom_club 
HAVING COUNT(j.nom_club)=( 
SELECT MAX(comptage) 
FROM ( 
SELECT nom_club, COUNT(nom_club) comptage 
FROM footedc.joueurs 
GROUP BY nom_club) SR
);
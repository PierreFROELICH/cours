CREATE VIEW ASDOMI.vKilometrage (noVehicule, noImmat, marque, totalKm)
AS 
SELECT i.noVehicule, v.noImmat, v.marque, sum(i.nbKm)
FROM ASDOMI.VEHICULE V
INNER JOIN INTERVENTION I ON v.numero = i.noVehicule 
WHERE year(I.dateIntervention) = 2010
GROUP BY i.noVehicule, v.noImmat, v.marque

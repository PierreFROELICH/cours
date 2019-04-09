
SELECT count(DISTINCT I.noDossier) 
FROM ASDOMI.INTERVENTION I
WHERE year(I.dateIntervention) = 2010 AND  month(I.dateIntervention) = 4

SELECT DISTINCT S.matricule, S.nom, S.PRENOM
FROM ASDOMI.SALARIE S
INNER JOIN ASDOMI.INTERVENTION I ON S.matricule = I.matriculeSalarie
WHERE year(I.dateIntervention) = 2010
AND month(I.dateIntervention) = 4
AND DATEPART(weekday,I.dateIntervention) = 7
;
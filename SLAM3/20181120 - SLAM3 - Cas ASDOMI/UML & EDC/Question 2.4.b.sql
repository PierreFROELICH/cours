select v.noImmat
FROM ASDOMI.vKilometrage v
WHERE v.totalKm = 
(select max(totalKm) from ASDOMI.vKilometrage)
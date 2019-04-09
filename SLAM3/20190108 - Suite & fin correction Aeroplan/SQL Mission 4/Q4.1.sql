set dateformat ymd
select MVT.numeroVol, R.raison, MVT.dureeVol, MVT.nbPassagers, MVT.distance
from MOUVEMENT MVT
inner join RETARD R
on MVT.id = R.idMvt
/* where dateHeureDepart = dateadd(day,-1, getdate()) */
where dateHeureDepart = dateadd(day,-1, cast('2013-07-18 18:30:00.000' as datetime))
;
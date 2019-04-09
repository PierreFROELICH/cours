select count(*) as NBVolsRetardes
from volsretardes vue
inner join mouvement mvt
on vue.idMvt = mvt.id
where ( 1500 > vue.distance) and  (vue.distance >= 0  )
and (mvt.dureeVol >= 15) and (mvt.dureeVol <120)
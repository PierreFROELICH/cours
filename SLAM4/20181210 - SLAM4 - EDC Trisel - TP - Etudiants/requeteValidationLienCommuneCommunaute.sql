select sum(c.nbFoyers) as TotFoyers, sum(c.population) as totPop,cc.code
from trisel.commune c
Inner Join trisel.CommunauteCommunes cc
on c.idCommunauteCommunes = cc.id
group By cc.code
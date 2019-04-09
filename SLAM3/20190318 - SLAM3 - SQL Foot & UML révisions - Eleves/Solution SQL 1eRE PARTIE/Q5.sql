SELECT s.nom_stade , v.nom_ville
from footedc.stade_football s
inner join footedc.stade_ville v
on s.id_ville = v.id_ville
inner join footedc.match_synthese ms
on ms.id_stade = s.id_stade
where ms.date_match = (select max(date_match)
from footedc.match_synthese)

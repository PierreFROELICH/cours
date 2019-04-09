select  J.nomprenom_joueur, MD.ID_EQUIPE
from footedc.joueurs J

inner join footedc.gardien_match_tirsauxbuts GMT
on J.id_joueur = GMT.id_joueur_gardien

inner join footedc.pays_football PF
on GMT.id_equipe = PF.id_pays

inner join footedc.match_detail MD
on GMT.id_match = MD.id_match


where PF.nom_pays = 'Italy'  
and MD.id_equipe = (
	select SR.id_pays
	from footedc.pays_football SR
	where SR.nom_pays = 'Germany'
)
SELECT
sal.sal_nom , sal.sal_prenom
FROM BRETAGNE.SALARIE SAl
INNER JOIN
BRETAGNE.occupationVehicules('12/05/2016') oc
ON sal.sal_id = oc.dos_chefEquipe
and oc.veh_immat = 'BC-095-LA'

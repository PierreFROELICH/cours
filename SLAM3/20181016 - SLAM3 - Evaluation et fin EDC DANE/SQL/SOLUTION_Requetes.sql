1.1
SELECT J.NOM_JOUEUR, J.PRENOM_JOUEUR
FROM FOOT.JOUEURS J 
INNER JOIN FOOT.PAYS P 
ON J.ID_PAYS = P.ID_PAYS 
WHERE P.NOM_PAYS = 'Serbie' OR J.AGE < 26

1.2
SELECT E.NOM_EQUIPE
FROM FOOT.EQUIPES E
    LEFT JOIN FOOT.MATCHES ML
    ON E.ID_EQUIPE = ML.ID_EQUIPE_LOCAL
WHERE ML.ID_EQUIPE_LOCAL IS NULL

1.3
SELECT SUM(M.SCORE_LOCAL + M.SCORE_VISITEUR) AS NB_BUTS ,
AVG(M.SCORE_LOCAL + M.SCORE_VISITEUR) AS MOY_BUTS
FROM FOOT.MATCHES M

1.4
SELECT  J.NOM_JOUEUR,  J.AGE    
FROM  FOOT.JOUEURS  J    
INNER  JOIN  FOOT.EQUIPES  E  
ON  J.ID_EQUIPE  =  E.ID_EQUIPE  
INNER  JOIN  FOOT.PAYS  P  
ON  E.ID_PAYS  =  P.ID_PAYS    
WHERE  P.NOM_PAYS='France' 

1.5
SELECT  J.NOM_JOUEUR  
FROM  FOOT.JOUEURS  J    
INNER  JOIN  FOOT.EQUIPES  E  
ON  J.ID_EQUIPE  =  E.ID_EQUIPE  
WHERE  J.ID_PAYS  <>  E.ID_PAYS 

1.6
SELECT DISTINCT E.NOM_EQUIPE
FROM FOOT.EQUIPES E
INNER JOIN FOOT.MATCHES MV
ON E.ID_EQUIPE = MV.ID_EQUIPE_VISITEUR
WHERE MV.SCORE_LOCAL = MV.SCORE_VISITEUR
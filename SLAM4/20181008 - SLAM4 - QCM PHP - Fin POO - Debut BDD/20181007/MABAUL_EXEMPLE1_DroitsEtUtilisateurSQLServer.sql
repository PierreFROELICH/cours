USE MABAUL;
GO
CREATE LOGIN SQLMAEVA   
    WITH PASSWORD = 'TEST'  ;  
GO  

-- CREE UN UTILISATEUR BDD POUR LE LOGIN.  
CREATE USER MABAUL FOR LOGIN SQLMAEVA;  
GO

-- CREATION ROLE POUR ACCES VIA PHP
USE MABAUL ;

EXEC sp_addrolemember 'db_datawriter', 'MABAUL' ;
EXEC sp_addrolemember 'db_datareader', 'MABAUL' ;
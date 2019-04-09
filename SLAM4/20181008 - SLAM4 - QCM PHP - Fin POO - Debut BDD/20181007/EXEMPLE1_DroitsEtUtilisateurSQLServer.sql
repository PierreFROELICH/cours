USE yhaddad;

-- CREE UN UTILISATEUR BDD POUR LE LOGIN.  
CREATE USER sqlHaddad FOR LOGIN SQLYANIS;  
GO

-- CREATION ROLE POUR ACCES VIA PHP
USE yhaddad ;

EXEC sp_addrolemember 'db_datawriter', 'sqlHaddad' ;
EXEC sp_addrolemember 'db_datareader', 'sqlHaddad' ;
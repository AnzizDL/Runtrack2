SELECT prenom, nom, naissance 
FROM étudiants 
WHERE naissance < CURDATE() - INTERVAL 18 YEAR;
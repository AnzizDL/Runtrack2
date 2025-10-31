SELECT 
    salles.nom AS nom_salle,
    salles.capacite AS capacite_salle,
    etage.numero AS numero_etage
FROM salles
INNER JOIN etage
ON salles.id_etage = etage.id;

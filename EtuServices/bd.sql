-- Création de la table
CREATE TABLE utilisateurs (
    id INT PRIMARY KEY,
    nom varchar(255), 
    prenom varchar(255), 
    email varchar(255), 
    mdp varchar(255),
    PRIMARY KEY (id_utilisateur)
    );

-- Remplissage de la table
INSERT INTO utilisateurs (id, nom, prenom,email, mdp) VALUES (1, 'John', 'Doe','john@example.com','mysecretpassword');

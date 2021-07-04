DROP DATABASE IF EXISTS exempleframework;
CREATE DATABASE exempleframework;
USE exempleframework;
CREATE TABLE CarteGraphique (
                                Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                Fabricant VARCHAR(255) NOT NULL,
                                Nom VARCHAR(255) NOT NULL,
                                Description TEXT NOT NULL,
                                Prix DECIMAL(7,2) NOT NULL
);

INSERT INTO CarteGraphique (Fabricant, Nom, Description, Prix)
VALUES (
           'AMD',
           'Radeon RX 6800',
           'Performances de calcul en simple précision maximales : 16.17 TFLOPs',
           649.99
       );

INSERT INTO CarteGraphique (Fabricant, Nom, Description, Prix)
VALUES (
           'AMD',
           'Radeon RX 6900 XT',
           'Performances de calcul en simple précision maximales : 23.04 TFLOPs',
           1100.99
       );

INSERT INTO CarteGraphique (Fabricant, Nom, Description, Prix)
VALUES (
           'Nvidia',
           'GeForce RTX 3090',
           'Taille et type de mémoire : 24Go GDDR6X',
           1399.99
       );

INSERT INTO CarteGraphique (Fabricant, Nom, Description, Prix)
VALUES (
           'Nvidia',
           'GeForce RTX 3080',
           'Taille et type de mémoire : 10Go GDDR6X',
           1399.99
       );

INSERT INTO CarteGraphique (Fabricant, Nom, Description, Prix)
VALUES (
           'Nvidia',
           'GeForce GT 440',
           'Taille et type de mémoire : 1Go DDR3',
           34.99
       );

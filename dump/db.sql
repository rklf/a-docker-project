CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    password VARBINARY(255)
);

INSERT INTO users(username, nom, prenom, password) VALUES ('Booba', 'Yaffa', 'Elie', '$2y$12$3HhwFqx.FrcxRgX2rbLhievSWzBwMpx0qnVklvChbX.HIANa2lOrW');
INSERT INTO users(username, nom, prenom, password) VALUES ('Kaaris', 'Gnakouri', 'Okou', '$2y$12$oYKVzYn9RQGkqg8g.97hlOvCoFTDi.aVCSADajrA/sDxSwNfCi4LK');
INSERT INTO users(username, nom, prenom, password) VALUES ('Ninho', 'Nzobazola', 'William', '$2y$12$NxheSqkn1h3.CcfaTDaCWO6hhTZA3ZxBQwuO4dU26xom.QJ.XO5a6');
INSERT INTO users(username, nom, prenom, password) VALUES ('FreezeCorleone', 'Diakhaté', 'Issa', '$2y$12$gjjCcUPtu2zrj46CY7YHqOJUFreTWPZkaub/o15imnEKGeOrWL5eW ');
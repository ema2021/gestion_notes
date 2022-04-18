-- create a new user with the given name and password
-- grant all privileges to the user
-- and `create` a new database with the given name
-- grant all privileges to the user
-- create user if not exists
CREATE USER IF NOT EXISTS 'web_php' @'localhost' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'web_php' @'localhost';

CREATE DATABASE IF NOT EXISTS gestion_notes;

grant create on *.* to 'web_php' @'localhost';

use gestion_notes;

-- DROP TABLE Etudiant;
CREATE TABLE IF NOT EXISTS Etudiant (
    id INT AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    maths FLOAT NOT NULL,
    info FLOAT NOT NULL,
    PRIMARY KEY (id)
);

describe Etudiant;

insert into
    Etudiant (nom, maths, info)
values
    ('Bing Bavridge', 15.54, 1.97);

insert into
    Etudiant (nom, maths, info)
values
    ('Janeva Grishunin', 13.42, 17.51);

insert into
    Etudiant (nom, maths, info)
values
    ('Dorie Reddie', 12.56, 10.97);

insert into
    Etudiant (nom, maths, info)
values
    ('Angie Sictornes', 12.69, 3.26);

insert into
    Etudiant (nom, maths, info)
values
    ('Susana Brownsill', 16.75, 13.39);

insert into
    Etudiant (nom, maths, info)
values
    ('Bronny Duguid', 0.87, 3.55);

-- describe Etudiant;
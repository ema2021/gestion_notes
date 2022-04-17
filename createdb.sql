-- create a new user with the given name and password
-- grant all privileges to the user
-- and `create` a new database with the given name
-- grant all privileges to the user
-- create user if not exists
CREATE USER IF NOT EXISTS 'web_php' @'localhost' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'web_php' @'localhost';

CREATE DATABASE IF NOT EXISTS gestion_notes2;

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
    ('Grete Caneo', 2.69, 11.98);

insert into
    Etudiant (nom, maths, info)
values
    ('Noach Fowls', 11.48, 18.8);

insert into
    Etudiant (nom, maths, info)
values
    ('Honoria Velten', 3.89, 10.33);

insert into
    Etudiant (nom, maths, info)
values
    ('Tiffy Pilger', 16.03, 12.69);

insert into
    Etudiant (nom, maths, info)
values
    ('Sallee Pringley', 6.82, 3.93);

insert into
    Etudiant (nom, maths, info)
values
    ('Salomi McEachern', 13.87, 17.71);

insert into
    Etudiant (nom, maths, info)
values
    ('Petunia Allwood', 7.94, 8.95);

insert into
    Etudiant (nom, maths, info)
values
    ('Billie Antognozzii', 3.24, 5.24);

insert into
    Etudiant (nom, maths, info)
values
    ('Ganny Sagar', 9.24, 8.11);

insert into
    Etudiant (nom, maths, info)
values
    ('Aubert Hollows', 5.27, 3.72);

insert into
    Etudiant (nom, maths, info)
values
    ('Eydie Crump', 16.43, 19.43);

insert into
    Etudiant (nom, maths, info)
values
    ('Arlyne Pleasants', 17.44, 18.54);

insert into
    Etudiant (nom, maths, info)
values
    ('Liva Paule', 5.51, 13.74);

insert into
    Etudiant (nom, maths, info)
values
    ('Art Thal', 13.75, 14.82);

insert into
    Etudiant (nom, maths, info)
values
    ('Corney Jeske', 11.71, 16.48);

insert into
    Etudiant (nom, maths, info)
values
    ('Osgood Gynn', 6.45, 11.93);

insert into
    Etudiant (nom, maths, info)
values
    ('Karel Dealtry', 15.74, 1.14);

insert into
    Etudiant (nom, maths, info)
values
    ('Jessie Dominiak', 4.66, 11.2);

insert into
    Etudiant (nom, maths, info)
values
    ('Hildagarde Porte', 13.5, 3.18);

insert into
    Etudiant (nom, maths, info)
values
    ('Kendricks Sturney', 14.48, 1.5);

insert into
    Etudiant (nom, maths, info)
values
    ('Cary Kelberman', 3.98, 6.49);

insert into
    Etudiant (nom, maths, info)
values
    ('Felike Baylis', 8.83, 1.8);

insert into
    Etudiant (nom, maths, info)
values
    ('Winn Delf', 8.98, 15.24);

insert into
    Etudiant (nom, maths, info)
values
    ('Loralie Kavanagh', 16.58, 0.76);

insert into
    Etudiant (nom, maths, info)
values
    ('Vaughan Goodbarr', 7.34, 17.05);

insert into
    Etudiant (nom, maths, info)
values
    ('Karly Dowber', 11.9, 19.81);

insert into
    Etudiant (nom, maths, info)
values
    ('Koo Jeannon', 3.51, 3.25);

insert into
    Etudiant (nom, maths, info)
values
    ('Maddalena Jaksic', 17.99, 4.2);

insert into
    Etudiant (nom, maths, info)
values
    ('Riley Gerren', 6.27, 12.86);

insert into
    Etudiant (nom, maths, info)
values
    ('Indira McDougald', 3.03, 12.72);

insert into
    Etudiant (nom, maths, info)
values
    ('Everard Crosseland', 15.67, 8.39);

insert into
    Etudiant (nom, maths, info)
values
    ('Melinda Kimblin', 19.63, 13.57);

insert into
    Etudiant (nom, maths, info)
values
    ('Ced Sarsons', 4.81, 19.45);

insert into
    Etudiant (nom, maths, info)
values
    ('Adelaida Cerith', 17.41, 13.75);

insert into
    Etudiant (nom, maths, info)
values
    ('Padraic Scudamore', 1.18, 6.31);

insert into
    Etudiant (nom, maths, info)
values
    ('Brandy Skirvane', 2.4, 3.91);

insert into
    Etudiant (nom, maths, info)
values
    ('Chris Boaler', 1.08, 4.87);

insert into
    Etudiant (nom, maths, info)
values
    ('Valentine Roe', 10.65, 18.58);

insert into
    Etudiant (nom, maths, info)
values
    ('Blakeley O''Driscole', 6.28, 17.78);

insert into
    Etudiant (nom, maths, info)
values
    ('Morry Camplin', 11.16, 12.34);

insert into
    Etudiant (nom, maths, info)
values
    ('Broderick Orrobin', 0.17, 6.13);

insert into
    Etudiant (nom, maths, info)
values
    ('Latashia Piatek', 3.65, 7.05);

insert into
    Etudiant (nom, maths, info)
values
    ('Idette Cardenas', 13.9, 0.65);

insert into
    Etudiant (nom, maths, info)
values
    ('Gallagher Greenside', 15.23, 19.5);

insert into
    Etudiant (nom, maths, info)
values
    ('Barclay Guillford', 8.87, 11.15);

insert into
    Etudiant (nom, maths, info)
values
    ('Erv Farrah', 13.83, 12.47);

insert into
    Etudiant (nom, maths, info)
values
    ('Luce Syder', 4.36, 9.75);

insert into
    Etudiant (nom, maths, info)
values
    ('Fern Konzel', 2.92, 14.53);

insert into
    Etudiant (nom, maths, info)
values
    ('Reynold Copestick', 0.41, 4.04);

insert into
    Etudiant (nom, maths, info)
values
    ('Courtenay Joslyn', 17.32, 2.07);

insert into
    Etudiant (nom, maths, info)
values
    ('Elbert Swires', 10.22, 11.6);

insert into
    Etudiant (nom, maths, info)
values
    ('Hilde MacAulay', 7.46, 14.49);

insert into
    Etudiant (nom, maths, info)
values
    ('Miriam Spellsworth', 17.05, 6.27);

insert into
    Etudiant (nom, maths, info)
values
    ('Giusto Bruggen', 0.43, 3.09);

insert into
    Etudiant (nom, maths, info)
values
    ('Saxe Bilbee', 7.39, 18.3);

insert into
    Etudiant (nom, maths, info)
values
    ('Halli Cauderlie', 16.63, 11.21);

insert into
    Etudiant (nom, maths, info)
values
    ('Lavina McDermid', 7.65, 3.67);

insert into
    Etudiant (nom, maths, info)
values
    ('Salvatore Ellph', 19.35, 5.0);

insert into
    Etudiant (nom, maths, info)
values
    ('Maiga Amdohr', 18.25, 16.81);

insert into
    Etudiant (nom, maths, info)
values
    ('Marcelo Anglin', 11.96, 3.65);

insert into
    Etudiant (nom, maths, info)
values
    ('Jesse Dwyr', 15.88, 2.91);

insert into
    Etudiant (nom, maths, info)
values
    ('Roddy Nursey', 4.63, 9.45);

insert into
    Etudiant (nom, maths, info)
values
    ('Morissa Brodway', 11.24, 4.92);

insert into
    Etudiant (nom, maths, info)
values
    ('Minerva Guage', 12.36, 6.75);

insert into
    Etudiant (nom, maths, info)
values
    ('Jessie Gettings', 18.41, 12.27);

insert into
    Etudiant (nom, maths, info)
values
    ('Jacquelynn Bembridge', 13.79, 10.81);

insert into
    Etudiant (nom, maths, info)
values
    ('Carolus Emma', 4.41, 4.54);

insert into
    Etudiant (nom, maths, info)
values
    ('Cassaundra Behneke', 4.19, 3.12);

insert into
    Etudiant (nom, maths, info)
values
    ('Winnah Wharram', 3.47, 14.16);

insert into
    Etudiant (nom, maths, info)
values
    ('Massimiliano Edgerton', 6.65, 5.1);

insert into
    Etudiant (nom, maths, info)
values
    ('Lothaire Arnke', 14.56, 16.58);

insert into
    Etudiant (nom, maths, info)
values
    ('Wendye Zettler', 17.68, 4.81);

insert into
    Etudiant (nom, maths, info)
values
    ('Thorny Dearsley', 4.46, 7.12);

insert into
    Etudiant (nom, maths, info)
values
    ('Mirella Denk', 9.38, 6.77);

insert into
    Etudiant (nom, maths, info)
values
    ('Genna Fenwick', 1.46, 15.34);

insert into
    Etudiant (nom, maths, info)
values
    ('Cullin Lautie', 15.36, 7.31);

insert into
    Etudiant (nom, maths, info)
values
    ('Myrle Bartrop', 0.21, 15.02);

insert into
    Etudiant (nom, maths, info)
values
    ('Hunter Mourant', 12.17, 7.97);

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

insert into
    Etudiant (nom, maths, info)
values
    ('Davon Duncan', 4.69, 5.42);

insert into
    Etudiant (nom, maths, info)
values
    ('Leonidas Del Castello', 17.91, 7.67);

insert into
    Etudiant (nom, maths, info)
values
    ('Whitman Yakutin', 11.63, 12.38);

insert into
    Etudiant (nom, maths, info)
values
    ('Aurelie Deegan', 13.22, 7.01);

insert into
    Etudiant (nom, maths, info)
values
    ('Corella Gresley', 7.1, 18.45);

insert into
    Etudiant (nom, maths, info)
values
    ('Theda Della Scala', 3.46, 4.48);

insert into
    Etudiant (nom, maths, info)
values
    ('Alexine McGaraghan', 8.29, 17.09);

insert into
    Etudiant (nom, maths, info)
values
    ('Fabe Coathup', 18.4, 13.83);

insert into
    Etudiant (nom, maths, info)
values
    ('Helsa Kaemena', 1.98, 0.34);

insert into
    Etudiant (nom, maths, info)
values
    ('Tine Sprade', 10.17, 11.93);

insert into
    Etudiant (nom, maths, info)
values
    ('Felicio Shelborne', 16.18, 10.32);

insert into
    Etudiant (nom, maths, info)
values
    ('Fayette Eadmeads', 14.06, 2.17);

insert into
    Etudiant (nom, maths, info)
values
    ('Rayshell Robathon', 13.01, 15.98);

insert into
    Etudiant (nom, maths, info)
values
    ('Evangelina Chern', 6.99, 4.52);

insert into
    Etudiant (nom, maths, info)
values
    ('Jennifer Casiero', 12.14, 10.31);

insert into
    Etudiant (nom, maths, info)
values
    ('Clarita Butts', 13.15, 18.44);

-- describe Etudiant;
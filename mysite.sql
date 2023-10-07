-- fai partire il database
-- docker run -d -p 3306:3306 --name mysql-container -e MYSQL_ROOT_PASSWORD=password mysql:8

-- Elimina il database se esiste già
DROP DATABASE IF EXISTS mypage;

-- Crea un nuovo database
CREATE DATABASE mypage;

-- Seleziona il database appena creato
USE mypage;

-- Crea una tabella per gli articoli con la colonna "type"
CREATE TABLE articolo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    description TEXT NOT NULL,
    link VARCHAR(255) NOT NULL,
    classNames VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL
);

-- Inserisci i dati dall'array "articlesData" nella tabella "articolo" con "rpg" come valore predefinito per la colonna "type"
INSERT INTO articolo (title, date, description, link, classNames, type)
VALUES
  ("Curse of Strahd", '2022-10-27', "Guida alla campagna COS.", "/cos/Curse_of_Strahd.pdf", "", "rpg"),
  ("Dichiarazione d'Intenti", '2022-10-27', "Regolamento e speifiche per la campagna COS.", "/cos/Dichiarazione_Di_Intenti_1.1.pdf", "", "rpg"),
  ("Brancalonia", '2022-11-10', "Manuale d'ambientazione Fantasy-Spaghetti.", "/5e/Brancalonia.pdf", "", "rpg"),
  ("Sane Magical Prices", '2022-11-10', "Prezi Regolari per Oggetti fuori dal Comune.", "/5e/Sane_Magical_Prices.pdf", "", "rpg"),
  ("The Monster Harvester Handbook", '2022-11-10', "Guida alla raccolta di parti utili e trofei dalle Bestie di tutte le terre.", "/5e/The_Monster_Harvester_Handbook.pdf", "", "rpg"),
  ("FOCOS: Vigneto I", '2022-11-25', "Note su come gestire il Vigneto del Mago delle Viti.", "/cos/winery_I.pdf", "", "rpg"),
  ("FOCOS: Vigneto II", '2022-11-25', "Note su come gestire il Vigneto del Mago delle Viti.", "/cos/winery_II.pdf", "", "rpg");

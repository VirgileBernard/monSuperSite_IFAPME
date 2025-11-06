create database crud_user;
use crud_user;


CREATE TABLE users (
id TINYINT UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
gender ENUM('Homme','Femme') NOT NULL,
birthdate DATE NOT NULL,
age TINYINT UNSIGNED NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);


INSERT INTO users (firstname, lastname, email, gender, birthdate, age) VALUES
('Catherine', 'Martin', 'catherine.martin@example.com', 'Femme', '1987-02-14', 38),
('Pascal', 'Dupont', 'pascal.dupont@example.com', 'Homme', '1991-08-30', 33),
('Adam', 'Lefevre', 'adam.lefevre@example.com', 'Homme', '2004-12-11', 20),
('Aurélie', 'Bernard', 'aurelie.bernard@example.com', 'Femme', '1995-05-07', 30),
('Nathan', 'Lambert', 'nathan.lambert@example.com', 'Homme', '2000-10-19', 24),
('Julien', 'Moreau', 'julien.moreau@example.com', 'Homme', '1989-03-25', 36),
('Sophie', 'Marchal', 'sophie.marchal@example.com', 'Femme', '1993-06-18', 32),
('Rayan', 'Khelifi', 'rayan.khelifi@example.com', 'Homme', '2002-09-02', 23),
('Élodie', 'Masson', 'elodie.masson@example.com', 'Femme', '1997-11-29', 27),
('Thomas', 'Renard', 'thomas.renard@example.com', 'Homme', '1984-01-05', 41);

SELECT firstname, lastname, birthdate,
       TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS age_calcule
FROM users;

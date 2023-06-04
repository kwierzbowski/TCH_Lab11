USE db;

CREATE TABLE contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    phone_number VARCHAR(20) NOT NULL
);

INSERT INTO contacts (firstname, surname, phone_number)
VALUES ('Klaudiusz', 'Wierzbowski', '987654321');

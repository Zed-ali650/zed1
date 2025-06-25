
CREATE DATABASE IF NOT EXISTS zedacademy_db;
USE zedacademy_db;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admins (username, password) VALUES ('zedadmin', '01090705347');

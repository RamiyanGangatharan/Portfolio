DROP TABLE IF EXISTS users;
CREATE TABLE users 
(
id VARCHAR(20) PRIMARY KEY,
password VARCHAR(15) NOT NULL,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email_address VARCHAR(255) NOT NULL,
enrol_date DATE NOT NULL,
last_access DATE NOT NULL
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES('jdoe', 'testpass', 'John', 'Doe', 'jdoe@durhamcollege.ca', '2023-1-1', '2023-2-1');

SELECT * FROM users;
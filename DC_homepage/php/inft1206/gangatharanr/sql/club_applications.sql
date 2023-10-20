DROP TABLE IF EXISTS club_applications;

CREATE TABLE club_applications
(
    club_code CHAR(4) NOT NULL,
    club_name VARCHAR(60) NOT NULL,
    member_count INT NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    date_submitted DATE NOT NULL,
    PRIMARY KEY (club_code)
);

GRANT ALL PRIVILEGES ON club_applications TO faculty;
GRANT ALL PRIVILEGES ON club_applications TO gangatharanr;

INSERT INTO club_applications(club_code, club_name, member_count, contact_email, date_submitted)
VALUES ('CODE', 'Code Club', 14, 'Nadia.Goralski@durhamcollege.ca', '2021-01-14');

INSERT INTO club_applications (club_code, club_name, member_count, contact_email, date_submitted)
VALUES ('WEBD', 'Web Development Club', 31, 'ramiyan.gangatharan@dcmail.ca', '2023-01-09');

SELECT * FROM club_applications
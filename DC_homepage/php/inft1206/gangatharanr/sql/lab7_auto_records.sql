/*
Ramiyan Gangatharan
lab7_auto_records.sql
29 March 2023
INFT1206
*/
-- MAIN SCRIPT // RUN FIRST
DROP TABLE IF EXISTS automobiles;

CREATE TABLE automobiles
(
    id INTEGER PRIMARY KEY NOT NULL,
    make VARCHAR(15) NOT NULL,
    model VARCHAR(20) NOT NULL,
    vehicle_year INTEGER NOT NULL,
    vehicle_owner VARCHAR(60) NOT NULL,
    msrp DECIMAL NOT NULL,
    purchase_date DATE NOT NULL
);

GRANT ALL ON automobiles TO faculty;
ALTER TABLE automobiles OWNER TO gangatharanr;

INSERT INTO automobiles
(
    id,
    make,
    model, 
    vehicle_year, 
    vehicle_owner, 
    msrp,
    purchase_date
) 
VALUES
(
    65758018,
    'Volkswagen', 'Tiguan SE',
    2017,
    'Amani Jefferson', 
    31,515,
    '2019/05/04'
);

INSERT INTO automobiles
(
    id,
    make,
    model, 
    vehicle_year, 
    vehicle_owner, 
    msrp,
    purchase_date
) 
VALUES
(
    45040665,
    'Toyota', 'Avalon Limited',
    2022,
    'Bobby Caldwell',
    42575,
    '2022/11/26'
);

INSERT INTO automobiles
(
    id,
    make,
    model, 
    vehicle_year, 
    vehicle_owner, 
    msrp,
    purchase_date
) 
VALUES
(
    51779332, 
    'Mercedes Benz', 'S-Class W126',
    1986,
    'Jonathan Galloway',
    66300,
    '1988/08/05'
);

INSERT INTO automobiles
(
    id,
    make,
    model, 
    vehicle_year, 
    vehicle_owner, 
    msrp,
    purchase_date
) 
VALUES
(
    52863956,
    'Ford', 'F-150 Lightning',
    2022,
    'Mark Sheppard',
    121000,
    '2023/03/22'
);

INSERT INTO automobiles
(
    id,
    make,
    model, 
    vehicle_year, 
    vehicle_owner, 
    msrp,
    purchase_date
) 
VALUES
(
    71504129,
    'BMW', 'E30 M3',
    1991,
    'Heinrich Hoffman',
    71755,
    '1998/11/11'
);

----------------------------------
---------------------------------

-- ADDITIONAL SCRIPT 

--select statement
SELECT * FROM automobiles ORDER BY vehicle_year ASC;

--update statement
UPDATE automobiles 
SET vehicle_owner = 'Ramiyan Gangatharan' 
WHERE id = 4504066504426070;

--delete statement
DELETE FROM automobiles WHERE model = 'Ford';
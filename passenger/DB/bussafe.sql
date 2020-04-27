-- drops the database if it exitsts
-- so we wont have duplicates

drop DATABASE IF EXISTS bussafe;

CREATE DATABASE bussafe;

use bussafe;

CREATE TABLE passenger (
	passengerID INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(256),
	cell VARCHAR(256),
	password VARCHAR(256),
	busID INT NOT NULL,
	
	PRIMARY KEY (passengerID),
	FOREIGN KEY (busID) REFERENCES bus(busID)
);
INSERT INTO passenger(name, cell, password, busID) VALUES
('Biren', '8458211274', '12345', ''),
('Mike', '3317779090', '123', '');


CREATE TABLE bus (
	busID INT NOT NULL AUTO_INCREMENT,
	number INT NOT NULL,
	type VARCHAR(256),
	busfrom VARCHAR(256),
	busto VARCHAR(256),
	date date,
	time time,
	
	PRIMARY KEY (busID)
);
INSERT INTO bus(number, type, busfrom, busto, date, time) VALUES
('123', 'Public Bus', 'Naperville', 'Bolingbrook', '2019-12-31', '10:15:00'),
('123', 'Public Bus', 'Naperville', 'Bolingbrook', '2019-12-17', '18:00:00'),
('123', 'Public Bus', 'Naperville', 'Chicago', '2019-12-23', '22:30:00'),
('123', 'Public Bus', 'Bolingbrook', 'Romeoville', '2019-12-28', '09:45:00');




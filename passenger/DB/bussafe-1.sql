-- drops the database if it exitsts
-- so we wont have duplicates

drop DATABASE IF EXISTS bussafe;

CREATE DATABASE bussafe;

use bussafe;

CREATE TABLE busCompany (
    busCompanyID INT NOT NULL AUTO_INCREMENT,
    busCompanyName VARCHAR(256),
    busCompanyInfo VARCHAR(256),
	passengerID INT NOT NULL,
	driverID INT NOT NULL,
	busID INT NOT NULL,
	feedbackID INT NOT NULL,
	certifierID INT NOT NULL,

    PRIMARY KEY (busCompanyID),
	FOREIGN KEY (passengerID) REFERENCES passenger(passengerID),
	FOREIGN KEY (driverID) REFERENCES driver(driverID),
	FOREIGN KEY (busID) REFERENCES bus(busID),
	FOREIGN KEY (feedbackID) REFERENCES feedback(feedbackID),
	FOREIGN KEY (certifierID) REFERENCES certifier(certifierID)
);
INSERT INTO busCompany(busCompanyName, busCompanyInfo, passengerID, driverID, busID, feedbackID, certifierID) VALUES 
('Chicago Charter Bus Company', 'Tour Bus', '2' ,'1' ,'1' ,'1','1'),
('Chicago Bus ', 'Local Transist Bus', '1' ,'2' ,'2' ,'2','1');

CREATE TABLE passenger (
	passengerID INT NOT NULL AUTO_INCREMENT,
	passengerName VARCHAR(256),
	passengerCell INT NOT NULL,
	feedbackID INT NOT NULL,
	
	PRIMARY KEY (passengerID),
	FOREIGN KEY (feedbackID) REFERENCES feedback(feedbackID)
);
INSERT INTO passenger(passengerName, passengerCell, feedbackID) VALUES
('Cris', '1234567890', '1'),
('Mike', '1234567890', '2');

CREATE TABLE driver (
	driverID INT NOT NULL AUTO_INCREMENT,
	driverName VARCHAR(256),
	driverCell INT NOT NULL,
	
	PRIMARY KEY (driverID)
);
INSERT INTO driver(driverName, driverCell) VALUES
('Jimmy', '1234567890'),
('Kenny', '1234567890');

CREATE TABLE bus (
	busID INT NOT NULL AUTO_INCREMENT,
	busNumber INT NOT NULL,
	busType VARCHAR(256),
	tripInformationID INT NOT NULL,
	
	PRIMARY KEY (busID),
	FOREIGN KEY (tripInformationID) REFERENCES tripInformation (tripInformationID)
);
INSERT INTO bus(busNumber, busType, tripInformationID) VALUES
('AQ 12894', 'Tour Bus', '1'),
('CD 56983', 'Local Transist Bus', '2');

CREATE TABLE driverandpassenger(
  driverID INT NOT NULL,
  pessengerID INT NOT NULL,
  busID INT NOT NULL,

  FOREIGN KEY (driverID) REFERENCES driver(driverID),
  FOREIGN KEY (pessengerID) REFERENCES pessenger(pessengerID),
  FOREIGN KEY (busID) REFERENCES bus(busID)
);
INSERT INTO driverandpassenger(driverID, pessengerID, busID) VALUES
('1', '2', '1'),
('2', '1', '2');

CREATE TABLE tripInformation (
	tripInformationID INT NOT NULL AUTO_INCREMENT,
	tripInformationGPSLocation VARCHAR(256),
	speed INT NOT NULL,
	acceleration INT NOT NULL,
	
	PRIMARY KEY (tripInformationID)
);
-- INSERT INTO tripInformation() VALUES (),();

CREATE TABLE feedback (
	feedbackID INT NOT NULL AUTO_INCREMENT,
	driverRatings INT NOT NULL,
	roadCondition VARCHAR(256),
	busCondition VARCHAR(256),
	driverID INT NOT NULL,
	busID INT NOT NULL,
	
	PRIMARY KEY (feedbackID),
	FOREIGN KEY (driverID) REFERENCES driver(driverID),
	FOREIGN KEY (busID) REFERENCES bus(busID)
);
INSERT INTO feedback(driverRatings, roadCondition, busCondition, driverID, busID) VALUES
('5', 'Not Bad', 'Very Good', '1', '1'),
('4', 'Good', 'Good', '2', '2');

CREATE TABLE certifier (
	certifierID INT NOT NULL AUTO_INCREMENT,
	busCompanyID INT NOT NULL,
	registrationID INT NOT NULL,
	
	PRIMARY KEY (certifierID),
	FOREIGN kEY (busCompanyID) REFERENCES busCompany(busCompanyID),
	FOREIGN kEY (registrationID) REFERENCES registration(registrationID)
);
INSERT INTO certifier(busCompanyID, registrationID) VALUES
('1', '1'),
('1', '2');

CREATE TABLE registrationID (
	registrationID INT NOT NULL AUTO_INCREMENT,
	busSafteyCertificate VARCHAR(256),
	busID INT NOT NULL,
	
	PRIMARY KEY (registrationID),
	FOREIGN kEY (busID) REFERENCES bus(busID)
);
INSERT INTO registration(busSafteyCertificate, busID) VALUES
('Pass', '1'),
('Pass', '2');

CREATE TABLE county (
	countyID INT NOT NULL AUTO_INCREMENT,
	certifierID INT NOT NULL,
	
	PRIMARY KEY (countyID),
	FOREIGN KEY (certifierID) REFERENCES certifier(certifierID)
);
INSERT INTO county(certifierID) VALUES
(1),
(2);



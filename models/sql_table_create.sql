CREATE DATABASE IF NOT EXISTS tw_proto;
USE tw_proto;

CREATE TABLE students (
	id INT AUTO_INCREMENT PRIMARY KEY,
	firstName VARCHAR(15) NOT NULL,
	lastName  VARCHAR(20) NOT NULL,
	teamAffiliation ENUM ('basketball', 'crossCountry', 'football', 'soccer', 'swimDive', 'trackField', 'volleyball', 'wrestling', 'other') 
);

CREATE TABLE professors (
	id INT AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50) UNIQUE,
	frequency ENUM ('MON/WED/FRI', 'TUE/THU', 'MON/TUE/WED/THU/FRI', 'OTHER')
);

CREATE TABLE studentsProfessors (
	studentProfessorId INT AUTO_INCREMENT PRIMARY KEY,
	studentId INT,
	professorId INT,
	FOREIGN KEY (studentId) REFERENCES students(id),
	FOREIGN KEY (professorId) REFERENCES professors(id)
);

INSERT INTO students (firstName, lastName, teamAffiliation)
VALUES  ('John',  'Doe',   'football'),
		('Jane',  'Doe',   'soccer'),
		('Tim',   'Apple', 'football'),
		('Steve', 'Apple', 'crossCountry'),
		('John',  'Booth', 'trackField');

INSERT INTO professors (email, frequency)
VALUES  ('example1@email.edu', 'MON/WED/FRI'),
		('example2@gmail.edu', 'TUE/THU'),
		('example3@gmail.com', 'MON/TUE/WED/THU/FRI'),
		('example4@gmail.com', 'other'),
		('example5@email.com', 'other');

INSERT INTO studentsProfessors (studentId, professorId)
VALUES  (1, 1), 
		(2, 2),
		(3, 3),
		(4, 4),
		(5, 5);  

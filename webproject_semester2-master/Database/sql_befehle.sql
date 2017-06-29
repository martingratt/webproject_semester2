
CREATE DATABASE hangman;

USE hangman;


CREATE TABLE Groups (
	groupid INT NOT NULL AUTO_INCREMENT
    , groupname VARCHAR (80)
    , PRIMARY KEY (groupid)
    );

CREATE TABLE User (
	userid INT NOT NULL AUTO_INCREMENT
    , nickname CHAR (80) NOT NULL
    , entrydate TIMESTAMP
    , password CHAR (80) NOT NULL
    , groupid INT
    , FOREIGN KEY (groupid) REFERENCES Groups(groupid)
    , PRIMARY KEY (userid)
    );
    
CREATE TABLE Scores (
	scoreid INT NOT NULL AUTO_INCREMENT
	, userid INT
    , score INT
    , PRIMARY KEY (scoreid)
    , FOREIGN KEY (userid) REFERENCES User(userid)
	);
    
CREATE TABLE Difficulty (
	difficultyid INT NOT NULL AUTO_INCREMENT
    , difficultyname CHAR (20)
    , PRIMARY KEY (difficultyid)
    );
        
CREATE TABLE Words (
	wordid INT NOT NULL AUTO_INCREMENT
    , wordname VARCHAR (50)
    , difficultyid INT
    , PRIMARY KEY (wordid)
    , FOREIGN KEY (difficultyid) REFERENCES Difficulty(difficultyid)
    );

INSERT INTO Groups (groupname)
	VALUES
	('WEB')
	, ('SKVM')
	, ('WING')
	, ('MKM');

INSERT INTO User (nickname, password, groupid)
	VALUES
    ('robinho',  'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', 1) /*Passwort nach hash sha-256 (asdf) --> wurde mit generator umgewandelt und dient zu Testzwecken*/
    , ('marinho', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', 1)
    , ('johinho', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', 2);
    
INSERT INTO Scores(userid, score)
	VALUES 
	(1, 1100),
    (2, 4500),
    (3, 2390),
    (3, 1234),
    (2, 5642),
    (1, 54200),
    (1, 20042),
    (2, 75000),
    (3, 56000),
    (3, 9700),
    (2, 45700),
    (1, 12400),
    (1, 6372),
    (2, 9960),
    (3, 4570),
    (3, 11090),
    (2, 8790),
    (1, 8400),
    (1, 7890),
    (2, 9210),
    (3, 4270),
    (3, 7896),
    (2, 9450),
    (1, 7809),
    (1, 78010),
    (2, 45758),
    (3, 45000),
    (3, 78500),
    (2, 4567),
    (1, 1201);
    
INSERT INTO Difficulty(difficultyname)
	VALUES
    ('sehr einfach')
    , ('einfach')
    , ('mittel')
    , ('schwer')
    , ('sehr schwer');

INSERT INTO Words (wordname, difficultyid)
	VALUES
    ('Affe', 1)
    , ('Hund', 1)
    , ('Stirnlappenbasilisk', 5)
    , ('Bier', 2)
    , ('Frankreich', 3)
    , ('Donaudampfschiffahrt', 4);


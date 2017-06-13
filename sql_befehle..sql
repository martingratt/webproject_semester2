

USE Hangman;


CREATE TABLE Groups (
	groupid INT NOT NULL AUTO_INCREMENT
    , groupname VARCHAR (80)
    , PRIMARY KEY (groupid)
    );

CREATE TABLE User (
	userid INT NOT NULL AUTO_INCREMENT
    , nickname CHAR (80) NOT NULL
    , entrydate DATE
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

INSERT INTO User (nickname, entrydate, password, groupid)
	VALUES
    ('robinho', "2017-06-13", 'keine Ahnung', 1)
    , ('marinho', "2016-05-16", 'password', 1)
    , ('johinho', "2017-03-18", 'bambus', 2);
    
INSERT INTO Scores(userid, score)
	VALUES 
	(1, 1100),
    (2, 4500),
    (3, 2390),
    (3, 1234),
    (2, 5642),
    (1, 4234);
    
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






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
	VALUES ('robinho', "2017-06-13", 'keine Ahnung', 1);

Select * From hangman.user;






CREATE DATABASE IF NOT EXISTS GoT;

USE GoT;

CREATE TABLE users(
	Username VARCHAR(20) NOT NULL,
	Password VARCHAR(20) NOT NULL,
	Type VARCHAR(20) NOT NULL,
	PRIMARY KEY(Username,Password,Type)
);

INSERT INTO users VALUES ("Engincan", "1234", "Admin");
INSERT INTO users VALUES ("Alperen", "qwer", "User");

CREATE TABLE Lands(
	Lname VARCHAR(20) NOT NULL, 
	Continent VARCHAR(20) NOT NULL,
	Resources VARCHAR(20) NOT NULL,
	PRIMARY KEY(Lname)
);

CREATE TABLE Kingdom(
	Kname VARCHAR(20) NOT NULL,
	Capital VARCHAR(20) NOT NULL,
	PRIMARY KEY (Kname)
);

CREATE TABLE Houses(
	Hname VARCHAR(20) NOT NULL,
	Motto VARCHAR(300) NOT NULL,
	Sigil VARCHAR(300) NOT NULL,
	PRIMARY KEY (Hname)
);

CREATE TABLE People(
	Pid INT(11) NOT NULL,
	Pname VARCHAR(20) NOT NULL,
	Alive BOOLEAN NOT NULL,
	Religion VARCHAR(20) NOT NULL,
	PRIMARY KEY (pid)
);

CREATE TABLE Noble_People(
	Pid INT(11) NOT NULL,
	PRIMARY KEY (Pid),
	CONSTRAINT FOREIGN KEY (Pid) REFERENCES People (Pid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Pleb_People(
	Pid INT NOT NULL,
	PRIMARY KEY (Pid),
	CONSTRAINT FOREIGN KEY (Pid) REFERENCES People (Pid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Kill_People(
	Pid1 int(11) NOT NULL,
	Pid2 INT (11) NOT NULL,
	How VARCHAR(150) NOT NULL,
	Kwhen VARCHAR(50) NOT NULL,
	PRIMARY KEY (Pid1, Pid2),
	CONSTRAINT FOREIGN KEY (Pid1) REFERENCES People (Pid) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (Pid2) REFERENCES People (Pid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Belongs(
	Pid INT NOT NULL,
	Hname VARCHAR(20) NOT NULL,
	Title VARCHAR(20) NOT NULL,
	PRIMARY KEY (Pid, Hname),
	CONSTRAINT FOREIGN KEY (Pid) REFERENCES People (Pid) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (Hname) REFERENCES Houses (Hname) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Weapons(
	Wname VARCHAR(20) NOT NULL,
	Material VARCHAR(20) NOT NULL,
	Owned_by INT(11) NOT NULL,
	PRIMARY KEY (Wname,Owned_by),
	CONSTRAINT FOREIGN KEY (Owned_by) REFERENCES Noble_People (Pid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Relation(
	Hname1 VARCHAR(20) NOT NULL,
	Hname2 VARCHAR(20) NOT NULL,
	Type VARCHAR(20) NOT NULL,
	PRIMARY KEY (Hname1,Hname2,Type),
	CONSTRAINT FOREIGN KEY (Hname2) REFERENCES Houses (Hname) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (Hname1) REFERENCES Houses (Hname) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Rules(
	Kname VARCHAR(20) NOT NULL,
	Hname VARCHAR(20) NOT NULL,
	PRIMARY KEY (Kname),
	CONSTRAINT FOREIGN KEY (Hname) REFERENCES Houses (Hname) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (Kname) REFERENCES Kingdom (Kname) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Located(
	Lname VARCHAR(20) NOT NULL,
	Kname VARCHAR(20) NOT NULL,
	PRIMARY KEY(Lname, Kname),
	CONSTRAINT FOREIGN KEY (Lname) REFERENCES Lands (Lname) ON DELETE CASCADE,
	CONSTRAINT FOREIGN KEY (Kname) REFERENCES Kingdom (Kname) ON DELETE CASCADE
);

INSERT INTO Lands
VALUES ("The North", "Westeros", "Barley");
INSERT INTO Lands
VALUES ("Riverlands", "Westeros", "Fish");
INSERT INTO Lands
VALUES ("Iron Islands", "Westeros", "Iron");
INSERT INTO Lands
VALUES ("The Reach","Westeros", "Grain");
INSERT INTO Lands
VALUES ("Dorne", "Westeros", "Wine");
INSERT INTO Lands
VALUES ("Vale of Arryn","Westeros", "Steel");
INSERT INTO Lands
VALUES ("Stormlands", "Westeros", "Dragonglass");
INSERT INTO Lands
VALUES ("Westerlands", "Westeros", "Gold");
INSERT INTO Lands
VALUES ("Beyond The Wall", "Westeros", "Snow");
INSERT INTO Lands
VALUES ("Mereen", "Essos", "Slave");
INSERT INTO Lands
VALUES ("Dothraki Sea", "Essos", "Horse");

INSERT INTO Kingdom
VALUES ("The North", "Winterfell");
INSERT INTO Kingdom
VALUES ("Riverlands", "Riverrun");
INSERT INTO Kingdom
VALUES ("Westerlands", "Casterly Rock");
INSERT INTO Kingdom
VALUES ("Iron Islands", "Pyke");
INSERT INTO Kingdom
VALUES ("The Reach", "Highgarden");
INSERT INTO Kingdom
VALUES ("Dorne", "Sunspear");
INSERT INTO Kingdom
VALUES ("The Vale", "Eyrie");
INSERT INTO Kingdom
VALUES ("Stormlands", "Storms_end");
INSERT INTO Kingdom
VALUES ("Dothraki", "Vaes Dothrak");

INSERT INTO Houses
VALUES ("Stark", "Winter is Coming", "Direwolf");
INSERT INTO Houses
VALUES ("Tully", "Family, Duty, Honor", "Trout");
INSERT INTO Houses
VALUES ("Lannister", "Hear me Roar!", "Lion");
INSERT INTO Houses
VALUES ("Greyjoy", "What is dead may never die", "Kraken");
INSERT INTO Houses
VALUES ("Tyrell", "Growing Strong", "Golden Rose");
INSERT INTO Houses
VALUES ("Martell", "Unbowed, Unbent, Unbroken", "Sun");
INSERT INTO Houses
VALUES ("Arryn", "As High as Honor", "Falcon");
INSERT INTO Houses
VALUES ("Baratheon", "Ours is the Fury", "Stag");
INSERT INTO Houses
VALUES ("Targaryen", "Fire and Blood", "Dragon");
INSERT INTO Houses
VALUES ("Bolton", "Our Blades Are Sharp", "A red flayed man");
INSERT INTO Houses
VALUES ("Frey", "We Stand Together", "The two stone grey towers");
INSERT INTO Houses
VALUES ("Tarth", "None", "Yellow suns on rose quartered with white crescents on azure.");

INSERT INTO People
VALUES (100, "Lyanna Stark", 0, "Old Gods");
INSERT INTO People
VALUES (0, "Eddard Stark", 0, "Old Gods");
INSERT INTO People
VALUES (1, "Catelyn Stark", 0, "Old Gods");
INSERT INTO People
VALUES (2, "Robb Stark", 0, "Old Gods");
INSERT INTO People
VALUES (3, "Sansa Stark", 1, "Old Gods");
INSERT INTO People
VALUES (4, "Arya Stark", 1, "Many Face God");
INSERT INTO People
VALUES (5, "Bran Stark", 1, "Old Gods");
INSERT INTO People
VALUES (6, "Rickon Stark", 0, "Old Gods");
INSERT INTO People
VALUES (7, "Jon Snow", 1, "Old Gods");
INSERT INTO People
VALUES (8, "Tyrion Lannister", 1, "Seven Gods");
INSERT INTO People
VALUES (9, "Cersei Lannister", 1, "Godless");
INSERT INTO People
VALUES (10, "Jaime Lannister", 1, "Seven Gods");
INSERT INTO People
VALUES (11, "Tywin Lannister", 0, "Seven Gods");
INSERT INTO People
VALUES (12, "Robert Baratheon", 0, "Seven Gods");
INSERT INTO People
VALUES (13, "Stannis Baratheon", 0, "God of Light");
INSERT INTO People
VALUES (14, "Renly Baratheon", 0, "Seven Gods");
INSERT INTO People
VALUES (15, "Joffrey Baratheon", 0, "Godless");
INSERT INTO People
VALUES (16, "Myrcella Baratheon", 0, "Seven Gods");
INSERT INTO People
VALUES (17, "Tommen Baratheon", 0, "Seven Gods");
INSERT INTO People
VALUES (18, "Daenerys Targaryen", 1, "Socialist");
INSERT INTO People
VALUES (19, "Rhaegar Targaryen", 0, "Seven Gods");
INSERT INTO People
VALUES (20, "Viserys Targaryen", 0, "Godless");
INSERT INTO People
VALUES (21, "Khal Drogo", 0, "Great Stallion");
INSERT INTO People
VALUES (22, "Theon Greyjoy", 1, "Drowned God");
INSERT INTO People
VALUES (23,"Margaery Tyrell", 0, "Seven Gods");
INSERT INTO People
VALUES (24, "Olenna Tyrell", 0, "Seven Gods");
INSERT INTO People
VALUES (25, "Oberyn Martell", 0, "Seven Gods");
INSERT INTO People
VALUES (26, "Doran Martell", 0, "Seven Gods");
INSERT INTO People
VALUES (27, "Ellaria Sand", 1, "Seven Gods");
INSERT INTO People
VALUES (28, "Jon Arryn", 0, "Seven Gods");
INSERT INTO People
VALUES (29, "Lysa Arryn", 0, "Seven Gods");
INSERT INTO People
VALUES (30, "Robin Arryn", 1, "Seven Gods");
INSERT INTO People
VALUES (31, "Ramsay Bolton", 0, "Seven Gods");
INSERT INTO People
VALUES (32, "Roose Bolton", 0, "Godless");
INSERT INTO People
VALUES (33, "Walder Frey", 0, "Godless");
INSERT INTO People
VALUES (34, "Bryndern Tully", 0, "Seven Gods");
INSERT INTO People
VALUES (35, "Edmure Tully", 1, "Seven Gods");
INSERT INTO People
VALUES (36, "Melisandre", 1, "God of Light");
INSERT INTO People
VALUES (37, "Lord Varys", 1, "Socialist");
INSERT INTO People
VALUES (38, "Petyr Baelish", 0, "Allahsiz");
INSERT INTO People
VALUES (39, "Gendry", 1, "Seven Gods");
INSERT INTO People
Values (40, "Brienne of Tarth", 1, "Seven Gods");

INSERT INTO Noble_People
VALUES (100);
INSERT INTO Noble_People
VALUES (0);
INSERT INTO Noble_People
VALUES (1);
INSERT INTO Noble_People
VALUES (2);
INSERT INTO Noble_People
VALUES (3);
INSERT INTO Noble_People
VALUES (4);
INSERT INTO Noble_People
VALUES (5);
INSERT INTO Noble_People
VALUES (6);
INSERT INTO Noble_People
VALUES (7);
INSERT INTO Noble_People
VALUES (8);
INSERT INTO Noble_People
VALUES (9);
INSERT INTO Noble_People
VALUES (10);
INSERT INTO Noble_People
VALUES (11);
INSERT INTO Noble_People
VALUES (12);
INSERT INTO Noble_People
VALUES (13);
INSERT INTO Noble_People
VALUES (14);
INSERT INTO Noble_People
VALUES (15);
INSERT INTO Noble_People
VALUES (16);
INSERT INTO Noble_People
VALUES (17);
INSERT INTO Noble_People
VALUES (18);
INSERT INTO Noble_People
VALUES (19);
INSERT INTO Noble_People
VALUES (20);
INSERT INTO Noble_People
VALUES (23);
INSERT INTO Noble_People
VALUES (22);
INSERT INTO Noble_People
VALUES (24);
INSERT INTO Noble_People
VALUES (25);
INSERT INTO Noble_People
VALUES (26);
INSERT INTO Noble_People
VALUES (29);
INSERT INTO Noble_People
VALUES (28);
INSERT INTO Noble_People
VALUES (30);
INSERT INTO Noble_People
VALUES (31);
INSERT INTO Noble_People
VALUES (32);
INSERT INTO Noble_People
VALUES (33);
INSERT INTO Noble_People
VALUES (34);
INSERT INTO Noble_People
VALUES (35);
INSERT INTO Noble_People
VALUES (40);
INSERT INTO Pleb_People
VALUES (7);
INSERT INTO Pleb_People
VALUES (21);
INSERT INTO Pleb_People
VALUES (27);
INSERT INTO Pleb_People
VALUES (36);
INSERT INTO Pleb_People
VALUES (37);
INSERT INTO Pleb_People
VALUES (38);
INSERT INTO Pleb_People
VALUES (39);

INSERT INTO Kill_People
VALUES (15, 0, "Beheading", "1x9");
INSERT INTO Kill_People
VALUES (32, 1, "Stabbing", "3x9");
INSERT INTO Kill_People
VALUES (32, 2, "Stabbing", "3x9");
INSERT INTO Kill_People
VALUES (31, 6, "Arrow through the heart", "6x9");
INSERT INTO Kill_People
VALUES (8, 11, "Arrow through the heart", "4x10");
INSERT INTO Kill_People
VALUES (40, 12, "Sword swing", "5x10");
INSERT INTO Kill_People
VALUES (13, 14, "Stabbing", "2x5");
INSERT INTO Kill_People
VALUES (24, 15, "Poison", "4x9");
INSERT INTO Kill_People
VALUES (27, 16, "Poison", "6x2");
INSERT INTO Kill_People
VALUES (17, 17, "SUicide", "6x10");
INSERT INTO Kill_People
VALUES (12, 19, "Hammer", "-1");
INSERT INTO Kill_People
VALUES (21, 20, "Golden Crown", "1x6");
INSERT INTO Kill_People
VALUES (9, 23, "Wildfire", "6x10");
INSERT INTO Kill_People
VALUES (10, 24, "Poison", "6x10");
INSERT INTO Kill_People
VALUES (27, 26, "Poison", "5x10");
INSERT INTO Kill_People
VALUES (38, 28, "Fever", "1x1");
INSERT INTO Kill_People
VALUES (38, 29, "Throw from the moon door", "4x8");
INSERT INTO Kill_People
VALUES (3, 31, "Fed to the hounds of his own", "6x9");
INSERT INTO Kill_People
VALUES (31, 32, "Stabbing", "4x6");
INSERT INTO Kill_People
VALUES (4,33, "Slitting throat", "7x1");
INSERT INTO Kill_People
VALUES (3, 38, "Slitting throat", "7x7");

INSERT INTO Belongs
VALUES (100,"Stark","Lady");
INSERT INTO Belongs
VALUES (0,"Stark","Former Lord");
INSERT INTO Belongs
VALUES (1,"Stark","Former Lady");
INSERT INTO Belongs
VALUES (2,"Stark","Former Lord");
INSERT INTO Belongs
VALUES (3,"Stark","Current Lady");
INSERT INTO Belongs
VALUES (4,"Stark","Lady");
INSERT INTO Belongs
VALUES (5,"Stark","Warg");
INSERT INTO Belongs
VALUES (6,"Stark","Lord");
INSERT INTO Belongs
VALUES (8,"Lannister","Lord");
INSERT INTO Belongs
VALUES (9,"Lannister","Queen");
INSERT INTO Belongs
VALUES (10,"Lannister","Lord");
INSERT INTO Belongs
VALUES (11,"Lannister","Lord");
INSERT INTO Belongs
VALUES (12,"Baratheon","Former King");
INSERT INTO Belongs
VALUES (13,"Baratheon","Lord");
INSERT INTO Belongs
VALUES (14,"Baratheon","Lord");
INSERT INTO Belongs
VALUES (15,"Baratheon","Former King");
INSERT INTO Belongs
VALUES (16,"Baratheon","Princess");
INSERT INTO Belongs
VALUES (17,"Baratheon","Former King");
INSERT INTO Belongs
VALUES (18,"Targaryen","Queen");
INSERT INTO Belongs
VALUES (19,"Targaryen","Prince");
INSERT INTO Belongs
VALUES (20,"Targaryen","Prince");
INSERT INTO Belongs
VALUES (22,"Greyjoy","Lord");
INSERT INTO Belongs
VALUES (23,"Tyrell","Farmer Queen");
INSERT INTO Belongs
VALUES (24,"Tyrell","Lady");
INSERT INTO Belongs
VALUES (25,"Martell","Prince");
INSERT INTO Belongs
VALUES (26,"Martell","Head of House Martell");
INSERT INTO Belongs
VALUES (28,"Arryn","Former head of House Arryn");
INSERT INTO Belongs
VALUES (29,"Arryn","Former lady of House Arryn");
INSERT INTO Belongs
VALUES (30,"Arryn","Head of House Arryn");
INSERT INTO Belongs
VALUES (31,"Bolton","Former Head of House Bolton");
INSERT INTO Belongs
VALUES (32,"Bolton","Former Head of House Bolton");
INSERT INTO Belongs
VALUES (33,"Frey","Former Head of House Frey");
INSERT INTO Belongs
VALUES (34,"Tully","Lord");
INSERT INTO Belongs
VALUES (35,"Tully","Lord");
INSERT INTO Belongs
VALUES (40,"Tarth","Knight");

INSERT INTO Rules
VALUES ("The North","Stark");
INSERT INTO Rules
VALUES ("Riverlands","Tully");
INSERT INTO Rules
VALUES ("Westerlands","Lannister");
INSERT INTO Rules
VALUES ("Iron Islands","Greyjoy");
INSERT INTO Rules
VALUES ("The Reach","Tyrell");
INSERT INTO Rules
VALUES ("Dorne","Martell");
INSERT INTO Rules
VALUES ("The Vale","Arryn");
INSERT INTO Rules
VALUES ("Stormlands","Baratheon");
INSERT INTO Rules
VALUES ("Dothraki","Targaryen");


INSERT INTO Relation
VALUES("Stark","Arryn","Allies");
INSERT INTO Relation
VALUES("Lannister","Tully","Allies");
INSERT INTO Relation
VALUES("Lannister","Frey","Allies");
INSERT INTO Relation
VALUES("Lannister","Tyrell","Former Allies");
INSERT INTO Relation
VALUES("Targaryen","Stark","Allies");
INSERT INTO Relation
VALUES("Targaryen","Martell","Allies");
INSERT INTO Relation
VALUES("Targaryen","Tyrell","Allies");

INSERT INTO Weapons
VALUES("Ice","Valyrian Steel",0);
INSERT INTO Weapons
VALUES("Longclaw","Valyrian Steel",7);
INSERT INTO Weapons
VALUES("Needle","Castle-forged steel",4);
INSERT INTO Weapons
VALUES("Oathkeeper","Valyrian Steel",40);
INSERT INTO Weapons
VALUES("Widow’s Wail","Valyrian Steel",10);
INSERT INTO Weapons
VALUES("Lightbringer","Valyrian Steel",13);


INSERT INTO Located
VALUES("The North","The North");
INSERT INTO Located
VALUES("Riverlands","Riverlands");
INSERT INTO Located
VALUES("Iron Islands","Westerlands");
INSERT INTO Located
VALUES("The Reach","Iron Islands");
INSERT INTO Located
VALUES("Dorne","The Reach");
INSERT INTO Located
VALUES("Vale of Arryn","Dorne");
INSERT INTO Located
VALUES("Stormlands","The Vale");
INSERT INTO Located
VALUES("Westerlands","Stormlands");
INSERT INTO Located
VALUES("Beyond The Wall","Dothraki");
CREATE TABLE actor (
    ano INT PRIMARY KEY,
    aname VARCHAR(50)
);

CREATE TABLE movie (
    mno INT PRIMARY KEY,
    mname VARCHAR(50),
    release_year INT,
    ano INT
);

INSERT INTO actor VALUES (1,'Amitabh');
INSERT INTO actor VALUES (2,'Shahrukh');

INSERT INTO movie VALUES (101,'Don',2006,1);
INSERT INTO movie VALUES (102,'Sholay',1975,1);
INSERT INTO movie VALUES (103,'DDLJ',1995,2);
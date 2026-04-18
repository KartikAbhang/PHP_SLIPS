CREATE TABLE customer (
    cno INT PRIMARY KEY,
    cname VARCHAR(50),
    city VARCHAR(50)
);

CREATE TABLE orders (
    ono INT PRIMARY KEY,
    odate DATE,
    address VARCHAR(100),
    cno INT
);

INSERT INTO customer VALUES (1,'Ram','Pune');
INSERT INTO customer VALUES (2,'Shyam','Mumbai');

INSERT INTO orders VALUES (101,'2024-01-10','Pune Address',1);
INSERT INTO orders VALUES (102,'2024-02-15','Pune Address',1);
INSERT INTO orders VALUES (103,'2024-03-20','Mumbai Address',2);
CREATE TABLE peopleSelling
(
    ID    SMALLINT AUTO_INCREMENT PRIMARY KEY,
    name  varchar(35) NOT NULL,
    email VARCHAR(50) NOT NULL,
    addr  VARCHAR(256),
    time  long
);


CREATE TABLE peopleInvesting
(
    ID    SMALLINT AUTO_INCREMENT PRIMARY KEY,
    name  varchar(35) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message  VARCHAR(8192),
    time  long
);
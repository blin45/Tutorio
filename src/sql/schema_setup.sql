DROP TABLE IF EXISTS classes
DROP TABLE IF EXISTS classes_taken
DROP TABLE IF EXISTS friends_list
DROP TABLE IF EXISTS tutors_list 
DROP TABLE IF EXISTS users 

CREATE TABLE classes(
    crn NUMERIC(10), 
    class_name VARCHAR(255),
    PRIMARY KEY(crn)
);

CREATE TABLE classes_taken(
    rin NUMERIC(10),
    crn NUMERIC(10),
    PRIMARY KEY(rin)
);

CREATE TABLE friends_list(
    primary_rin NUMERIC(10),
    list_rin NUMERIC(10),
    PRIMARY KEY(primary_rin)
);

CREATE TABLE tutors_list(
    crn NUMERIC(10), 
    rin NUMERIC(10),
    PRIMARY KEY(crn)
);

CREATE TABLE users(
    rin NUMERIC(10), 
    name VARCHAR(255),
    PRIMARY KEY(rin)
);
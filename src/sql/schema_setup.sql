DROP TABLE IF EXISTS classes
DROP TABLE IF EXISTS classes_taken
DROP TABLE IF EXISTS friends_list
DROP TABLE IF EXISTS tutors_list 
DROP TABLE IF EXISTS users 

CREATE TABLE classes(
    crn NUMERIC(10), 
    class_name VARCHAR(255)
);

CREATE TABLE classes_taken(
    rin NUMERIC(10),
    crn NUMERIC(10)
);

CREATE TABLE friends_list(
    primary_rin NUMERIC(10),
    list_rin NUMERIC(10)
);

CREATE TABLE tutors_list(
    crn NUMERIC(10), 
    rin NUMERIC(10)
);

CREATE TABLE users(
    rin NUMERIC(10), 
    name VARCHAR(255)
);
-- Classses Table Information
INSERT INTO classes(crn, class_name)
VALUES(123456, 'Software Design and Documentation')
INSERT INTO classes(crn, class_name)
VALUES(234567, 'Network Programming')
INSERT INTO classes(crn, class_name)
VALUES(345678, 'Large Scale Programing and Design')
INSERT INTO classes(crn, class_name)
VALUES(456789, 'Cognitive Psychology')
INSERT INTO classes(crn, class_name)
VALUES(567890, 'Sports Psychology')
INSERT INTO classes(crn, class_name)
VALUES(678901, 'Introduction to Biology')
INSERT INTO classes(crn, class_name)
VALUES(789012, 'Advanced Algorithms')
INSERT INTO classes(crn, class_name)
VALUES(890123, 'Introduction to Algorithms')
INSERT INTO classes(crn, class_name)
VALUES(901234, 'RCOS')
INSERT INTO classes(crn, class_name)
VALUES(123457, 'Operating Systems')

--Adding Classes taken list--
INSERT INTO classes_taken(rin, crn)
VALUES(661782855, 123456)
INSERT INTO classes_taken(rin, crn)
VALUES(661782855,234567)
INSERT INTO classes_taken(rin, crn)
VALUES(661782855,345678)
INSERT INTO classes_taken(rin, crn)
VALUES(661782855,456789)

INSERT INTO classes_taken(rin, crn)
VALUES(123456789,456789)
INSERT INTO classes_taken(rin, crn)
VALUES(123456789,567890)
INSERT INTO classes_taken(rin, crn)
VALUES(123456789,789012)
INSERT INTO classes_taken(rin, crn)
VALUES(123456789,901234)

INSERT INTO classes_taken(rin, crn)
VALUES(234567890,123457)
INSERT INTO classes_taken(rin, crn)
VALUES(234567890,890123)
INSERT INTO classes_taken(rin, crn)
VALUES(234567890,678901)
INSERT INTO classes_taken(rin, crn)
VALUES(234567890,234567)

INSERT INTO classes_taken(rin, crn)
VALUES(345678901,789012)
INSERT INTO classes_taken(rin, crn)
VALUES(345678901,901234)
INSERT INTO classes_taken(rin, crn)
VALUES(345678901,234567)
INSERT INTO classes_taken(rin, crn)
VALUES(345678901,456789)

INSERT INTO classes_taken(rin, crn)
VALUES(456789012,123456)
INSERT INTO classes_taken(rin, crn)
VALUES(456789012,234567)
INSERT INTO classes_taken(rin, crn)
VALUES(456789012,345678)
INSERT INTO classes_taken(rin, crn)
VALUES(456789012,456789)

INSERT INTO classes_taken(rin, crn)
VALUES(567890123,567890)
INSERT INTO classes_taken(rin, crn)
VALUES(567890123,678901)
INSERT INTO classes_taken(rin, crn)
VALUES(567890123,789012)
INSERT INTO classes_taken(rin, crn)
VALUES(567890123,890123)

INSERT INTO classes_taken(rin, crn)
VALUES(678901234,901234)
INSERT INTO classes_taken(rin, crn)
VALUES(678901234,123457)
INSERT INTO classes_taken(rin, crn)
VALUES(678901234,234567)
INSERT INTO classes_taken(rin, crn)
VALUES(678901234,567890)

INSERT INTO classes_taken(rin, crn)
VALUES(789012345,456789)
INSERT INTO classes_taken(rin, crn)
VALUES(789012345,678901)
INSERT INTO classes_taken(rin, crn)
VALUES(789012345,901234)
INSERT INTO classes_taken(rin, crn)
VALUES(789012345,345678)

INSERT INTO classes_taken(rin, crn)
VALUES(890123456,123457)
INSERT INTO classes_taken(rin, crn)
VALUES(890123456,789012)
INSERT INTO classes_taken(rin, crn)
VALUES(890123456,456789)
INSERT INTO classes_taken(rin, crn)
VALUES(890123456,234567)

INSERT INTO classes_taken(rin, crn)
VALUES(901234567,234567)
INSERT INTO classes_taken(rin, crn)
VALUES(901234567,567890)
INSERT INTO classes_taken(rin, crn)
VALUES(901234567,678901)
INSERT INTO classes_taken(rin, crn)
VALUES(901234567,890123)
-----------------------------------------

-- Adding values for users --
INSERT INTO users(rin, name)
VALUES(661782855,'William Violet')
INSERT INTO users(rin, name)
VALUES(123456789,'Bill Baggins')
INSERT INTO users(rin, name)
VALUES(234567890,'Justin Smith')
INSERT INTO users(rin, name)
VALUES(345678901,'Nick Scoggins')
INSERT INTO users(rin, name)
VALUES(456789012,'Brian Lin')
INSERT INTO users(rin, name)
VALUES(567890123,'Olivia Rau')
INSERT INTO users(rin, name)
VALUES(678901234,'Caitlin Violet')
INSERT INTO users(rin, name)
VALUES(789012345,'David Violet')
INSERT INTO users(rin, name)
VALUES(890123456,'Meghan Segura')
INSERT INTO users(rin, name)
VALUES(901234567,'Tom Kasputis')

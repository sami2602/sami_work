create database School_Management_System2;
use School_Management_System2;
create table Students(
Stud_ID int primary key auto_increment not null,
Fname Varchar(50) not null,
Stud_Email varchar (50) unique not null,
Course_id int not null
);
create table Course(
Course_ID int primary key auto_increment not null,
Course_name Varchar(50) not null,
Course_code int not null
);
truncate table students;
truncate table Course;
alter table students drop constraint students_ibfk_1;
alter table students add foreign key(Course_id) references Course(Course_ID);
alter table students auto_increment = 111;
alter table course auto_increment = 101;


INSERT INTO Course (Course_name, Course_code)
VALUES 
('Computer Science', 201),
('Mathematics', 202),
('Physics', 203);

INSERT INTO Students (Fname, Stud_Email, Course_id)
VALUES 
('Alice Smith', 'alice@example.com', 101),
('Bob Johnson', 'bob@example.com', 102),
('Carol Lee', 'carol@example.com', 103);


SELECT * FROM students INNER JOIN course ON students.Course_id = Course.Course_ID;
SELECT * FROM students INNER JOIN course ON students.Course_id = Course.Course_ID where Course.Course_ID = 3;

SELECT * FROM students RIGHT JOIN course ON students.Course_id =Course.Course_ID;
SELECT * FROM students LEFT JOIN course ON students.Course_id = Course.Course_ID;
SELECT * FROM students CROSS JOIN course;

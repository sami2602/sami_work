create database school_management_system;
use school_management_system;

create table Student(
Stud_ID int primary key identity,
F_Name varchar(50) not null ,
L_Name varchar(50) not null ,
Age int,
Contact_add int,
Stud_email varchar(50),
Stud_pass varchar(50),
);

create table Transactions(
Trans_ID int primary key identity,
Trans_Name varchar(50) not null ,
Stud_ID int,
trans_date date,
);
alter table Transactions add foreign key (Stud_ID) references Student(Stud_ID);

create table Shedules(
sched_ID int primary key identity,
course_ID int,
ins_ID int,
sub_ID int,
stud_ID int,
Time_start timestamp,
Time_end time,
foreign key(course_ID) references courses(course_ID),
foreign key(ins_ID) references instructor(ins_ID),
foreign key (stud_ID) references Student(Stud_ID),
foreign key (sub_ID) references Subjects(sub_ID)

);`
create table courses(
course_ID int primary key identity,
course_name varchar(20),
course_desc varchar(100),
school_yr int,

);
create table instructor(
ins_ID int primary key identity,
name varchar(20),
gender varchar(100),
age int,
ins_email varchar(50),
ins_pass varchar(50),

);
create table Subjects(
sub_ID int primary key identity,
name varchar(20),
course_ID int,
foreign key(course_ID) references courses(course_ID)
);
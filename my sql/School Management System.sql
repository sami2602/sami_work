create database School_Management_System;
use School_Management_System;
create table Student(
Stud_ID int primary key auto_increment not null,
Fname Varchar(50) not null,
Lname Varchar(50) not null,
Gender Varchar(50) not null,
Age int not null,
Contact_add Varchar (100) not null,
Stud_Email varchar (50) unique not null,
Stud_Password Varchar (50) not null
);
create table Instructor(
Ins_ID int primary key auto_increment not null,
Fname Varchar(50) not null,
Lname Varchar(50) not null,
Gender Varchar(50) not null,
Age int not null,
Contact_add Varchar (100) not null,
Stud_Email varchar (50) unique not null,
Stud_Password Varchar (50) not null
);
create table Schedules(
Sched_ID int primary key auto_increment not null,
Course_ID int,
Ins_ID int,
Sub_ID int,
Stud_ID int,
Day varchar(50),
time_start datetime,
time_end datetime
);
create table Transactions(
Trans_ID int primary key auto_increment not null,
Trans_name Varchar(50) not null,
Stud_ID int,
Tans_Date date
);
create table Courses(
Course_ID int primary key auto_increment not null,
Course_name Varchar(50) not null,
Course_desc Varchar(50) not null,
School_yr year
);
create table Subjects(
Sub_ID int primary key auto_increment not null,
name Varchar(50) not null,
Course_ID int
);

drop table Transaction;
alter table Subjects add foreign key(Course_ID) references Courses(Course_ID);
alter table Transactions add foreign key(Stud_ID) references Student(Stud_ID);
alter table Schedules add foreign key(Course_ID) references Courses(Course_ID);
alter table Schedules add foreign key(Stud_ID) references Student(Stud_ID);
alter table Schedules add foreign key(Sub_ID) references Subjects(Sub_ID);
alter table Schedules add foreign key(Ins_ID) references Instructor(Ins_ID);



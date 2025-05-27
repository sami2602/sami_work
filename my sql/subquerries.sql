create database subqueries;
use subqueries;
create table DEPARTMENT(
DID int auto_increment primary key,
DName varchar(100),
DHead varchar(100),
DLocation varchar(80),
DRanking int 
);

ALTER TABLE DEPARTMENT auto_increment = 3001;

create table EMPLOYEE (
EmployeeID int primary key auto_increment,
Name varchar(80),
Position varchar(90),
Salary int,
Dept INT,
foreign key (Dept) references  DEPARTMENT (DID)
);

INSERT INTO DEPARTMENT (DName,DHead,DLocation,DRanking)
VALUES ("FINANCE" , "JAMES" , "WASHINGTON" , 1),
		("SALES" , "MARY" , "CALIFORNIA" , 2),
        ("LEGAL" , 'JHON' , 'TEXAS' , 3),
        ('ACCOUNTING' , 'DREW' , 'ALASKA' , 4),
        ('MARKETING' , 'KOLIN' , 'OHIO' , 5),
        ('HR' , 'HELLAN' , 'CALIFORNIA' , 6);
        
alter table EMPLOYEE auto_increment = 1001 ; 
select * from EMPLOYEE;
insert into EMPLOYEE (Name , Position , Salary , Dept) 
values (  'Pete' , 'Clerk' , 1000 , 3002 ),
('David' , 'Manager' , 2500 , 3002 ),
( 'Micheal' , 'salesman' , 800 , 3001 ),
( 'Ruby' , 'Clerk' , 1500 , 3003 ),
( 'Clinton' , 'Manager' , 1000 , 3006 ),
( 'Julie' , 'Clerk' , 1000 , 3004 ),
('Smith' , 'Clerk' , 1000 , 3003 ),
('Fuler' , 'Clerk' , 1000 , 3004 );

SELECT Name 
from EMPLOYEE
WHERE Dept = (SELECT DID FROM DEPARTMENT WHERE DLocation = 'TEXAS');



UPDATE EMPLOYEE SET Salary = Salary + Salary * 0.1 where Dept = (SELECT DID FROM DEPARTMENT WHERE DRanking = 1);



delete from EMPLOYEE 
where Dept = (select DID from DEPARTMENT where DName = 'FINANCE');


select * from EMPLOYEE 
where Dept IN (select DID from DEPARTMENT where DRanking = 1 or DRanking = 3);

select * from EMPLOYEE 
where Dept NOT IN (select DID from DEPARTMENT where DLocation  = 'TEXAS' or DLocation = 'CALIFORNIA');


create table EMPLOYEEINCALIFORNIA (
EmployeeID int primary key auto_increment,
Name varchar(80),
Position varchar(90),
Salary int,
Dept INT,
foreign key (Dept) references  DEPARTMENT (DID)
);
INSERT INTO EMPLOYEEINCALIFORNIA
SELECT EMPLOYEEID, Name, position, salary, DEPT from employee 
where dept in (select did from department WHERE DLocation= 'California');
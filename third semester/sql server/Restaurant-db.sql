create database Restaurant_Db;
use Restaurant_Db;

create table FoodCat(
Cat_ID int primary key identity,
Cat_Name varchar(100),
);

insert into FoodCat(Cat_Name)
values('Chinese'),('Fast Food'),('Continental')

select*from FoodCat;

create table Foods(
F_ID int primary key identity,
F_Name varchar(100),
price float,
Cat_ID int
foreign key(Cat_ID) references FoodCat(Cat_ID)
);

insert into Foods(F_Name,price,Cat_ID)
values('Shashlik','999',)

create table Orders(
Or_ID int primary key identity,
Cat_ID int,
F_ID int,
Quantity int,
Table_Num varchar(50),
foreign key(Cat_ID) references FoodCat(Cat_ID),
foreign key(F_ID) references Foods(F_ID),
)
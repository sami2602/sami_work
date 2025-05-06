create database KababjeesBakers;
use KababjeesBakers;
-- primary key ,foreign key , unique , check, default ,not null,
create table BakeryItems(
Item_Number int primary key auto_increment,
Item_Name varchar (50),
Item_Price int,
Item_Quantity int
);

insert into BakeryItems (Item_Name, Item_Price, Item_Quantity)
values("Chocolate Biscuit",5,50),
("Ice Cake",400,10),
("Chocolate Cake",350,15),
("Coconut Biscuits",8,20),
("Strawberry Cake",300,5),
("Brownies",15,30),("Pastries",15,40);

SELECT * FROM kababjeesbakers.bakeryitems;
alter table BakeryItems auto_increment = 1001;  -- before inserting data
truncate table bakeryitems;
SELECT * FROM BakeryItems WHERE Item_Price <100;
SELECT Item_Name, Item_Quantity FROM BakeryItems WHERE Item_Price>300;
SELECT * FROM BakeryItems WHERE Item_Quantity<20;
UPDATE BakeryItems SET Item_Quantity = 8 WHERE Item_Name = 'Ice Cake';
UPDATE BakeryItems SET Item_Price = 12 WHERE Item_Name = 'Brownies';
UPDATE BakeryItems SET Item_Price = 6, Item_Quantity = 20 WHERE Item_Name = 'Chocolate biscuit';
UPDATE BakeryItems SET Item_Name = 'Chocolate Pastries' WHERE Item_Number = 1007;
SELECT * FROM BakeryItems WHERE Item_Name LIKE '%e';
SELECT * FROM BakeryItems WHERE Item_Name LIKE '%n%';
SELECT * FROM BakeryItems WHERE Item_Name LIKE 'b%';
DELETE FROM BakeryItems WHERE Item_Quantity < 10;




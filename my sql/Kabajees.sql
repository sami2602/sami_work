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



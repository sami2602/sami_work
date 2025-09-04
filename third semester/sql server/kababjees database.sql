Create database KababjeesBakers;
use KababjeesBakers;

create table Bakeryitems(
Item_Number int primary key identity(1001,1),
Item_Name varchar(50) not null unique,
Item_Price int,
Item_Quantity int,
);
insert into Bakeryitems (Item_Name,Item_Price,Item_Quantity)
values('Chocolate Biscuits',5,50),
('Ice Cake',400,10),
('Chocolate Cake',350,15),
('Coconut Biscuits',8,20),
('Strawberry Cake',300,5),
('Brownie',15,40),
('Pastries',15,30)
select Item_Name , Item_Price from Bakeryitems;

select * from Bakeryitems where Item_Number = 1001;

select * from Bakeryitems where Item_Name = 'Ice cake';

select * from Bakeryitems where Item_Price = 15;

select * from Bakeryitems where Item_Price > 300;

select * from Bakeryitems where Item_Quantity < 100;

select * from Bakeryitems where Item_Price <> 8; -- not equal

select * from Bakeryitems where Item_Quantity <= 50;

select * from Bakeryitems where Item_Price >= 300;
			  
select * from Bakeryitems where Item_Price <= 300 and Item_Name = 'Ice cake';
			  
select * from Bakeryitems where Item_Price >= 300 or Item_Name = 'Ice cake';
			  
select * from Bakeryitems where Item_Price between 200 and 500;
			  
select * from Bakeryitems where Item_Price in (5 , 15 , 8);

select * from bakeryitems;

select * from bakeryitems where Item_Price < 100 ;

select item_name, Item_Quantity FROM Bakeryitems WHERE Item_Price > 300;

select * from bakeryitems where item_quantity < 20;

update Bakeryitems set item_quantity= 8 where item_name = 'Ice Cake';

update bakeryitems set item_price = 8 where item_name = 'brownie';

update bakeryitems set item_price = 6, item_quantity = 20 where item_name = 'choclate biscuits';

update bakeryitems set item_name = 'pastrie' where item_number = 1001;

select * from bakeryitems where item_name like  '%e';

select * from bakeryitems where item_name like  '%n%';

select * from bakeryitems where item_name like  'b%';

delete from bakeryitems where item_quantity < 10 ;
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

# ShoppingListWeb
## About it
This repo is part of project which main part is Android App in repo ShoppingList.
## Start-up
First of all, you have to install XAMPP and then clone this repo in folder htdocs in XAMPP installation directiory. Now, you should use XAMPP and turn on Apache Web Server and MySQL Database.
Secondly, you have to create DB in phpMyAdmin and set name as shopping. The table name has to be "list" and columns should be: "id" ,"product", "quantity", "price".
Next step is check your host ip: ipconfig (MS Windows) or ifconfig (Linux). You need IP address to set connection with DB and Server. In file configDB.php you have to check whether $dbhost has the same address as your. If it isn't You will change it. 
You will set IP address in app ShoppingList if it is different than yours. In variables which name start from "url" you will have to set read IP address.
For WiFi connection by router you should change Apache Web Server port to 8080. If you are connected by mobile WiFi hotstop you can let well alone.
Last but not least, you have to create new user in phpMyAdmin and grants him all rights to "list" database. When you create new user you should remember that set host name as "IP%".
Finally, write in browser your IP address and possibly port (:8080 or :80) then /ShoppingListWeb/. If you are see empty page It will be fine.

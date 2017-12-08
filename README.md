INSTALL:
    Dependencies:
	-server
	-mysql (Database)
	-apache
	-php (for source code)

1. Please install any kind of server that is compatible with your computer.
         For example:
	- WAMP for windows (Download: http://www.wampserver.com/en/)
	- LAMP  for linux
	- MAMP for macintosh
	- XAMPP for all (Download: https://www.apachefriends.org/index.html)
	
         NOTE: we are using WAMP so our instructions are based on that server.

2. After you install the server, Download the zip file of the source code and extract.

3.Copy the extracted file in to the directory of your server.
	If you are using WAMP,
	     1. Go to the folder where you download your wamp. (Most probably it is saved in your root or C:/)
	     2. Then click WAMP >> www.
	     3. paste the extracted file inside www folder.

4.  Turn on your server.
	WAMP,
	     1. click on the wampserver icon in your desktop.
		or,
	         click wampmanager application in your wamp folder.
     	
	  Once the W icon (wamp icon) on the the lower right of your screen turned green it means it is running properly.

5. Click the icon and then click phpmyadmin. It will open in browser. You will need to login.
	Username = root
	Password = 
          If you already setup your server then enter the username and password you set.

6. Importing database 
	- When already logged in,  click NEW at the left side of the phpmyadmin page.
    	- Input on the database name lawfirm then click CREATE.
	- On the menu tab click IMPORT.
	-  click browse >> WAMP >> www >> ilaganlawoffice >> config >> lawfirm.sql
	-  scroll down then click the button GO.





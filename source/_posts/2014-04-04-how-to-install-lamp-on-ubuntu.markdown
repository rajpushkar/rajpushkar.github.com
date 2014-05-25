---
layout: post
title: "How to install LAMP on Ubuntu"
date: 2014-04-04 00:45
comments: true
categories: 
---


To install LAMP on Ubuntu just follow the following easy steps.

Step1. Install Apache
	sudo apt-get install apache2
To verify that apache has been successfully installed or not type in the URL bar of the browser "localhost" and in the output you should see something like:
	It works!
	This is the default web page for this server.
	The web server software is running but no content has been added, yet.
<br>
Step2. Install MySQL on the server
	sudo apt-get install mysql-server
Now start the MySQL service
	sudo service mysql start
<br>
Step3. Install PHP
	sudo apt-get install php5 libapache2-mod-php5
Now to test the PHP installation make a test.php file in /var/www/ directory and copy the following contents in the file and save it
	<?php
	phpinfo();
	?>
Now restart the apache service
	sudo service apache2 restart
and open a browser and type in the URL bar
	localhost/test.php
which should display the information page of the PHP installed on the system.
<br>

Step4. Now if you want to install PHPMyAdmin
	sudo apt-get install phpmyadmin
Configure it as follows:
	*Select apache2 as the web-server
	*Choose yes when asked for whether you want to configure the database for phpmyadmin with dbconfig-common
	* Enter your MySQL password when prompted
	* Enter the password that you want to use to log into phpmyadmin
After the installation completes add the phpmyadmin to the apache2.conf file as follows
	sudo vim /etc/apache2/apache2.conf
and add the following line in the file
	Include /etc/phpmyadmin/apache.conf
Now restart apache
	sudo service apache2 restart
and you are all done!

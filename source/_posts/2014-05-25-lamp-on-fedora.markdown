---
layout: post
title: "LAMP on Fedora"
date: 2014-05-25 22:29
comments: true
categories: 
---
To install LAMP on fedora just follow the following steps and within few minutes you will be ready with the LAMP stack on your system.

Step.1: We must install the updates first:
	sudo yum update
	
Step.2: Installing Apache:
	sudo yum install httpd
The Apache service can be started by running
	sudo service httpd start

Step.3: Installing MySQL:
	sudo yum install mysql mysql-server
To Start MySQL
	sudo service mysqld start

Step.4: Installing PHP
	sudo yum install php php-mysql

To check whether LAMP is correctly installed and working make a file <strong>info.php</strong> inside the /var/www/html directory
	sudo vi /var/www/html/info.php
and paste the following lines into it and save it
	<?php
	phpinfo();
	?>

Now restart the Apache
	sudo service httpd restart
	
Now in the browser enter the URL of your info.php file i.e 
	http://localhost/info.php

You should see the info page on the browser.

The LAMP stack has, now, been installed on your system.

If you want to configure the root password for MySQL run the following command
	sudo /usr/bin/mysql_secure_installation
This prompts you to enter the current root password, just leave it blank by pressing enter as you have just installed MySQL and no root password has been set yet.
Next the prompt asks you whether you want to set a root password, enter y and follow the instructions.
In the next few steps it will ask you the following questions
	Remove anonymous users? [Y/n]
	Disallow root login remotely? [Y/n]
	Remove test database and access to it? [Y/n]
	Reload privilege tables now? [Y/n]
Just enter Y for all the questions.
If all done, you have successfully setup new root password and your MySQL installation is now secure.

Now restart the Apache and Mysql services
	sudo service httpd restart
	sudo service mysqld restart

To run the services on the startup run the following commands(PHP automatically starts when tha Apache starts):
	sudo chkconfig httpd on
	sudo chkconfig mysqld on


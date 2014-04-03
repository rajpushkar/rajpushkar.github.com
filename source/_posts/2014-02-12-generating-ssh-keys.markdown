---
layout: post
title: "Generating SSH keys"
date: 2014-02-12 00:55
comments: true
categories: 
---

First you must look for whether there is already an existing SSH key on your system or not.
To check do the following:
	cd ~/.ssh
	ls -al
Check the listing for a file named <strong>id_rsa.pub</strong> or <strong>id_dsa.pub</strong>. If a file with such name exists then you already have an SSH key for your system and if not then run the following command in the terminal to generate one:
	ssh-keygen -t rsa -C "your_email@example.com"
Now it will prompt you to enter the file name in which to store the key, just press enter and the key will automatically be stored in the default file i.e <strong>~/.ssh/id_rsa.pub</strong>.
<br>
In the next prompt it asks you to enter the passphrase, it's your wish to leave it blank or provide one

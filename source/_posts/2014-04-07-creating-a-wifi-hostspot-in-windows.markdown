---
layout: post
title: "Creating a WiFi Hostspot in Windows"
date: 2014-04-07 23:32
comments: true
categories: 
---

Hi! This post will tell you how to create a WiFI hotspot from your Windows 7 Laptop/PC.
<br>
It is very easy to set up your PC/Laptop as a Virtual Router. First of all you need to check whether your network card support this feature or not. To check run cmd.exe with administrator privileges and type in following command:
	netsh wlan show drivers
If in the output there is a line saying
	Hosted network supported : yes
then you are lucky and all set to go.
<br>

Now in the command prompt run the following command to configure the Virtual Router
	netsh wlan set hostednetwork mode=allow ssid=<network ssid> key=<password> keyusage=persistent
The parameter keyusage which is set to persistent is required so that your system remembers the password set for the network created even after you reboot your system.
<br>
Now to start the network just type in the following command in the command prompt:
	netsh wlan start hostednetwork
and you are done. You have just converted your PC into a Virtual Router.
<br>
To see the information of the Hostednetwork run the following command:
	netsh wlan show hostednetwork
and to stop the hostednetwork:
	netsh wlan stop hostednetwork
You can also change the password of your network by just typing a simple command:
	netsh wlan refresh hostednetwork <newpassword>

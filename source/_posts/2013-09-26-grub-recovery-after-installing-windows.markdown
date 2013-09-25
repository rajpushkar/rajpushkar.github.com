---
layout: post
title: "Grub Recovery after installing Windows"
date: 2013-09-26 02:03
comments: true
categories: 
---

Many of us face the problem to boot to ubuntu when we install Windows over it as the system directly boots to windows on startup.
So what to do this in case?How to recover the grub so that we can boot to the OS we want and not what the system wants.
Here is a simple solution for the problem.

##Step.1##
Insert the Ubuntu Live CD, reboot your computer and at startup set your system to boot from CD and start a live session.<br>
Live USB can also be used for this purpose.

##Step.2##
Open Terminal. Make sure you are connected to the internet.
Now install boot-repair following the below mentioned steps:
	sudo add-apt-repository ppa:yannubuntu/boot-repair
	sudo apt-get update
	sudo apt-get install boot-repair
The boot-repair has successfully been installed to your system now.

##Step.3##
Now run boot-repair. For those who do not know how to run a program in Ubuntu, press super key(windows key is called super key in Ubuntu), a dash menu will appear, type-in boot-repair and run the program.

You can also run it by simply running the command <strong><boot-repair &></strong> in the terminal.

##Step.4##
Now boot-repair menu will appear on the screen click on the <strong>Recommended Repair</strong>, wiat for the process to complete and restart your computer.<br>
Whoa! The GRUB menu has been successfully recovered.

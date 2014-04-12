---
layout: post
title: "The simplest YUM guide"
date: 2014-04-13 02:20
comments: true
categories: 
---

Hi! This post will make you familiar with the YUM utility provided with Fedora.
You can easily download, install or remove any package/module after going through this easy YUM guide.
Taking you directly to the commands, If you want to search for a module:
	yum search <module name>
To get information about a module:
	yum info <module name>
To install a module:
	sudo yum install <module name>
To remove a module:
	sudo yum remove <module name>

To check for updates:
	yum check update

To install updates;
	sudo yum update
	
To update a single module:
	yum update <module name>
	
excluding a module from being updated:
	yum --exclude=package <module name> updated

To find out the dependencies of a module
	yum deplist <module name>
	
<br>

To uninstall a module:
	yum remove <module name>
	or
	yum erase <module name>

To search for a module which can be directly installed using YUM
	yum list | grep <module name>

To find whether a module has been installed or not:
	yum list installed | grep <module name>
If in the output you see the package listed then it is installed else there will be no output.

<br>
<br>
To install a yum group. Say I want to install the group of editors
	yum groupinstall editors

To remove the editors yum group
	yum groupremove editors

To update a yum group:
	yum groupupdate <group name>

To list packages in a YUM group:
	yum groupinfo <group-name>

To list YUM groups:
	yum grouplist | less 

<br>
<br>

To know the kernel-images currently installed:
	rpm -q kernel

To remove old kernels:
	sudo yum remove kernel
Fedora retains the three latest kernels to ensure that there is always a working kernel installed, in case the latest kernel breaks something.
The limit can be changed by changing the value of 'installonly_limit' in the '/etc/yum.conf' file.

To remove a specific kernel:
	sudo yum remove <kernel package>

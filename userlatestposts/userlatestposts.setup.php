<?php
/* ====================

[BEGIN_COT_EXT]
Code=userlatestposts
Name=Recent user posts in forums
Description=Will display the newest post in forums from the user
Version=0.0.2
Date=2009-jan-03
Author=Neocrome & Cotonti Team, dayver, esclkm
Copyright=Partial copyright (c) 2008 Cotonti Team
Notes=BSD License
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
countonpage=01:select:3,5,10,15,20,25,30,35,40:5:Displayed posts on page
ajax=02:radio::1:Turn on AJAX navigation
[END_COT_EXT_CONFIG]
==================== */
defined('COT_CODE') or die('Wrong URL.');
?>
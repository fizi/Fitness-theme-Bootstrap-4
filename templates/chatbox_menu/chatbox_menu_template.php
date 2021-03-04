<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 chatbox_menu Plugin
 *
*/
if ( ! defined('e107_INIT')) {
	exit;
}

//---------------------------------MENU-----------------------------------------

$CHATBOX_MENU_TEMPLATE['menu']['start'] =
'<ul class="chatbox-posts">' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['menu']['item'] 	= '
  <li class="chatbox-post">
    <div class="chatbox-avatar">{CB_AVATAR}</div> 
    <div class="chatbox-user">
	  <div class="chatbox-username">{CB_USERNAME}</div>
      <div class="chatbox-usertime">{CB_TIMEDATE}</div>
    </div>
    <div class="chatbox-message">{CB_MESSAGE}</div>
  </li>' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['menu']['end'] 	= '
</ul>'. PHP_EOL;


//---------------------------------LIST-----------------------------------------

$CHATBOX_MENU_TEMPLATE['list']['start'] =
'<ul class="chatbox-list">' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['list']['item']  = '
  <li class="chatbox-list-item">
    <div class="chatbox-list-avatar">{CB_AVATAR:size=60}</div>
    <div class="chatbox-list-user">
	  <div class="chatbox-list-username">{CB_USERNAME}</div>
	  <div class="chatbox-list- usertime">{CB_TIMEDATE}</div>
    </div>
	<div class="chatbox-list-message">{CB_MESSAGE}</div>
    <div class="row">
	  <div class="col text-left">{CB_BLOCKED}</div>
	  <div class="col text-right">{CB_MOD}</div>
    </div>
  </li>'. PHP_EOL;

$CHATBOX_MENU_TEMPLATE['list']['end']   = '
</ul>'. PHP_EOL;




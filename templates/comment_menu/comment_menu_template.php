<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Comment menu default template
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/comment_menu/comment_menu_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
*/



// Shortcode Wrappers
$COMMENT_MENU_WRAPPER['CM_DATESTAMP'] = ' {---}';
$COMMENT_MENU_WRAPPER['CM_AUTHOR'] = CM_L13.'{---}';
$COMMENT_MENU_WRAPPER['CM_TYPE'] = '<span class="label label-default badge badge-secondary bg-secondary ">{---}</span>';


// Template
$COMMENT_MENU_TEMPLATE['start'] = "
<div class='comment-menu'>
";
	
$COMMENT_MENU_TEMPLATE['item'] = "
  <div class='media pt-3 pb-3'>
    {SETIMAGE: w=50&h=50&crop=1}
    {CM_AUTHOR_AVATAR: class=rounded-circle mr-3 mt-2} 
    <div class='media-body'>
	  <h4 class='comment-menu-item-title mt-0'>{CM_TYPE} {CM_URL_PRE} {CM_HEADING}{CM_URL_POST}</h4>
	  <div class='comment-menu-item-comment'>{CM_COMMENT}</div>
	  <div class='smalltext text-muted'>{CM_AUTHOR} {CM_DATESTAMP}</div>
    </div>
  </div>
";
	
$COMMENT_MENU_TEMPLATE['end'] = "
</div>
";


<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }


// New in v2.x - requires a bootstrap theme be loaded.
// Modifiey by fizi ************************************************************  

//TODO Find a good place to put a {SEARCH} dropdown.

$FORUM_VIEWFORUM_TEMPLATE['caption'] = "";
$FORUM_VIEWFORUM_TEMPLATE['start'] = "
<!--- START -->
<div id='forum-viewforum'>
";

$FORUM_VIEWFORUM_TEMPLATE['header'] = "
  <div class='row'>
    <div class='col-md-12'>{BREADCRUMB}</div>
  </div>
  <div class='row'>
	<div class='col-9'>
      <div class='forum-viewforum-title'><h3>{FORUMIMAGE:h=40}{FORUMTITLE}</h3></div>
    </div>
	<div class='col-3'>
      <div class='forum-viewforum-button text-right'>{NEWTHREADBUTTONX}</div>
    </div>
  </div> 
  <div class='forum-viewforum'> 
  {SUBFORUMS}
";

$FORUM_VIEWFORUM_TEMPLATE['item'] = "
    <div class='forum-viewforum-item'>
      <div class='row'>
        <div class='col-1 forum-viewforum-item-newflag text-center'>{ICON}</div>
        <div class='col-9 col-md-5 text-left'>
          <div class='row'>
            <div class='col-10'>
              <div class='forum-viewforum-item-topictitle'>{THREADNAME}</div>
              <div class='smalltext'>{LAN=FORUM_1004}: {POSTER} {THREADTIMELAPSE}</div>
              <div class='smaltext'>{PAGESX}</div>
            </div>
            <div class='col-2 text-center'>
              <div class='forum-viewforum-item-adminoptions'>{ADMINOPTIONS}</div>
            </div>
          </div>
        </div>
        <div class='col-2 forum-viewforum-item-replies text-center'>{REPLIESX}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-item-views text-center'>{VIEWSX}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-item-lastpost text-center'>
          <div class='smalltext'>{LASTPOSTUSER} {LASTPOSTDATE}</div>
        </div>
      </div>
    </div>  
";


$FORUM_VIEWFORUM_TEMPLATE['item-sticky'] = $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";
$FORUM_VIEWFORUM_TEMPLATE['item-announce'] = $FORUM_VIEWFORUM_TEMPLATE['item'] ; // "<tr><td>{THREADNAME}</td></tr>\n";


$FORUM_VIEWFORUM_TEMPLATE['sub-header']	= "
    <div class='forum-viewforum-caption'>
      <div class='row'>
        <div class='col-10 col-md-6 forum-viewforum-topics text-left'>{LAN=FORUM_1002}</div>
        <div class='col-2 forum-viewforum-replies text-center'>{LAN=FORUM_0003}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-views text-center'>{LAN=FORUM_0002}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-lastpost text-center'>{LAN=FORUM_0004}</div>
      </div>
    </div>  
";

$FORUM_VIEWFORUM_TEMPLATE['sub-item'] = "
    <div class='forum-viewforum-item'>
      <div class='row'>
        <div class='col-1 forum-viewforum-item-newflag text-center'>{NEWFLAG}</div>
        <div class='col-9 col-md-5 forum-viewforum-item-topictitle text-left'>
          {SUB_FORUMIMAGE:h=50}{SUB_FORUMTITLE}
          <div class='smalltext'>{SUB_DESCRIPTION}</div>
        </div>
        <div class='col-2 forum-viewforum-item-replies text-center'>{SUB_REPLIESX}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-item-views text-center'>{SUB_THREADSX}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-item-lastpost text-left'>
          <div class='smalltext'>{SUB_LASTPOSTUSER} {SUB_LASTPOSTDATE}</div>
        </div>
      </div> 
    </div> 
";


$FORUM_VIEWFORUM_TEMPLATE['sub-footer']	= "";		

/* Examples top divider with shortcodes - working
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "<tr><th colspan='2'>{LAN=FORUM_1006} {FORUMTITLE}</th><th class='text-center'>{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";
$FORUM_VIEWFORUM_TEMPLATE['divider-normal']		= "<tr><th colspan='2'>{LAN=FORUM_1007} {FORUMTITLE}</th><th class='text-center' >{LAN=FORUM_0003}</th><th class='hidden-xs text-center'>{LAN=FORUM_1005}</th><th class='hidden-xs'>{LAN=FORUM_0004}</th></tr>";
*/
$FORUM_VIEWFORUM_TEMPLATE['divider-important']	= "
    <div class='forum-viewforum-caption'>
      <div class='row'>
        <div class='col-10 col-md-6 forum-viewforum-topics text-left'>{LAN=FORUM_1006}</div>
        <div class='col-2 forum-viewforum-replies text-center'>{LAN=FORUM_0003}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-views text-center'>{LAN=FORUM_1005}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-lastpost text-center'>{LAN=FORUM_0004}</div>
      </div>
    </div>  
";

$FORUM_VIEWFORUM_TEMPLATE['divider-normal']	= "
    <div class='forum-viewforum-caption'>
      <div class='row'>
        <div class='col-10 col-md-6 forum-viewforum-topics text-left'>{LAN=FORUM_1007}</div>
        <div class='col-2 forum-viewforum-replies text-center'>{LAN=FORUM_0003}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-views text-center'>{LAN=FORUM_1005}</div>
        <div class='d-none d-md-block col-md-2 forum-viewforum-lastpost text-center'>{LAN=FORUM_0004}</div>
      </div>
    </div>  
";

$SC_WRAPPER['VIEWABLE_BY'] = "
    <div class='panel panel-default' style='margin-top:10px'>
      <div class='panel-heading'>{LAN=FORUM_8012}</div>
      <div class='panel-body'>{---}</div>
    </div>
";

$FORUM_VIEWFORUM_TEMPLATE['footer'] = "
  </div>
  <div class='row'>
	<div class='col-9'>
      <div class='forum-viewforum-pages'>{THREADPAGES}</div>
    </div>
    <div class='col-3'>
      <div class='forum-viewforum-button text-right'>{NEWTHREADBUTTONX}</div>
    </div>
  </div>

  <div class='panel panel-default' style='margin-top:50px'>
    <div class='panel-heading'>{LAN=FORUM_8011}</div>
	<div class='panel-body'>
	  {ICONKEY}
	</div>
  </div>
  <div class='viewforum-perms'>{PERMS}</div>
  {VIEWABLE_BY}
";

$FORUM_VIEWFORUM_TEMPLATE['end'] = "
</div>
<!--- END -->
";

// define {ICONKEY}
$FORUM_VIEWFORUM_TEMPLATE['iconkey'] = "
<div class='row' >
	<div class='col-md-3 col-6'>".IMAGE_new_small." ".LAN_FORUM_0039."</div>
	<div class='col-md-3 col-6'>".IMAGE_nonew_small." ".LAN_FORUM_0040."</div>
	<div class='col-md-3 col-6'>".IMAGE_sticky_small." ".LAN_FORUM_1011."</div>
	<div class='col-md-3 col-6'>".IMAGE_announce_small." ".LAN_FORUM_1013."</div>
</div>

<div class='row' >
	<div class='col-md-3 col-6'>".IMAGE_new_popular_small." ".LAN_FORUM_0039." ".LAN_FORUM_1010."</div>
	<div class='col-md-3 col-6'>".IMAGE_nonew_popular_small." ".LAN_FORUM_0040." ".LAN_FORUM_1010."</div>
	<div class='col-md-3 col-6'>".IMAGE_noreplies_small." ".LAN_FORUM_1021."</div>
	<div class='col-md-3 col-6'>".IMAGE_closed_small." ".LAN_FORUM_1014."</div>
</div>
";

$FORUM_VIEWFORUM_TEMPLATE['forum-crumb'] =  $FORUM_CRUMB;

// $FORUM_VIEWFORUM_WRAPPER['THREADNAME']          = "<span class='label label-info'>{---}</span>";






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


$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


// {MODERATORS} {THREADSTATUS}

// New in v2.x - requires a bootstrap theme be loaded.  
// Modified by fizi ************************************************************  

$FORUM_VIEWTOPIC_TEMPLATE['caption'] 	= "";
$FORUM_VIEWTOPIC_TEMPLATE['start'] 	= "
<div id='forum-view-topic'>
  <div class='row'>
    <div>{BACKLINK}</div>
  </div>
  <div class='row'>
	<div class='col-md-9'>
      <div class='forum-viewtopic-title'><h3>{THREADNAME}</h3></div>
    </div>
    <div class='col-md-3'>
      <div class='forum-viewtopic-button text-right'>{TRACK} {BUTTONSX}</div>
    </div>
  </div>	
  {MESSAGE}											
  <ul class='forum-viewtopic unstyled list-unstyled'>
";

$FORUM_VIEWTOPIC_TEMPLATE['thread'] = "
    <li id='post-{POSTID}' class='forum-viewtopic-post'>
      <div class='row'>
        <div class='col-md-3'>
          <div class='forum-viewtopic-userprofil'> 
            <div class='forum-viewtopic-avatar'>
              {SETIMAGE: w=100&h=100&crop=1}
              {AVATAR: class=rounded-circle}
            </div>
            <div class='forum-user-customtitle'>{CUSTOMTITLE}</div>
			{NEWFLAG} {ANON_IP}
            <div class='forum-viewtopic-poster text-center'>{POSTER}</div>
            <div class='forum-viewtopic-level text-center'>{LEVEL=badge}</div>
            <div class='forum-viewtopic-level-icons text-center'>{LEVEL=glyph}</div>
            <div class='forum-viewtopic-poster-posts text-center'>{POSTS}</div>
            <div class='forum-viewtopic-poster-joined text-center'>{JOINED: dateformat=relative}</div>
          </div>
        </div>
        <div class='col-md-9'>
          <div class='forum-viewtopic-userpost'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='forum-viewtopic-postdate'>{THREADDATESTAMP=relative}</div>
              </div>
              <div class='col-md-4'>        
                <div class='forum-viewtopic-lastedit'>{LASTEDIT}&nbsp;&nbsp;{LASTEDITBY}</div>
              </div>
              <div class='col-md-4'>
                <div class='forum-viewtopic-postoptions text-right'>{POSTOPTIONS}</div>
              </div>
            </div>           
            <div class='forum-viewtopic-postmessage'>
              {POLL}
			  {THREAD_TEXT}
			  {ATTACHMENTS: modal=1}
            </div>
            <div class='forum-viewtopic-signature'>{SIGNATURE=clean}</div>
          </div>           
        </div>
      </div>
	</li>
";

$FORUM_VIEWTOPIC_TEMPLATE['end'] = "
  </ul>
  <div class='row'>
    <div class='col-md-4'></div>
	<div class='col-md-4 text-center'>
	  {GOTOPAGES}
	</div>
	<div class='col-md-4'>
	  <div class='forum-viewtopic-button text-right'>{BUTTONSX}</div>
	</div>
  </div>
  <div class='forum-viewtopic-quickreply'>{QUICKREPLY}</div>
  <div class='forum-viewtopic-moderators'>{MODERATORS}</div>
  {THREADSTATUS}
</div>
";

$FORUM_VIEWTOPIC_TEMPLATE['replies'] = $FORUM_VIEWTOPIC_TEMPLATE['thread'];


$FORUM_VIEWTOPIC_TEMPLATE['deleted'] = "
    <li id='post-{POSTID}' class='forum-viewtopic-post'>
      {SETIMAGE: w=100&h=100&crop=1}
      <div class='forum-viewtopic-postdate'>{THREADDATESTAMP=relative}</div>
      <div class='forum-viewtopic-postcontent'>
        <div class='row'>
          <div class='col-sm-2 text-center'>
            <div class='forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
				    {NEWFLAG} {ANON_IP}
            <div class='forum-viewtopic-avatar'>{AVATAR}</div>
					  <div class='forum-viewtopic-level'>
              <div class='smalltext'>{LEVEL=badge}</div>
            </div>
            <div class='forum-viewtopic-level-icons'><small>{LEVEL=glyph}</small></div>
            <div class='visible-xs visible-sm'>{POSTOPTIONS}</div>
            <div class='visible-xs visible-sm col-sm-12'><hr /></div>
          </div>
          <div class='col-sm-10'>
            <div class='row'>
              <div class='col-sm-12 col-md-6 text-muted'>
                <div class='smalltext'>{LASTEDIT}&nbsp;&nbsp;{LASTEDITBY}</div>
              </div>
              <div class='hidden-xs hidden-sm col-md-6 text-right'>{POSTOPTIONS}</div>
            </div>
            <div class='forum-viewtopic-postmessage'>{POSTDELETED}</div>
            <div class='finfobar'>{SIGNATURE=clean}</div>
          </div>
        </div>
      </div>
	</li>
";


$FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'] = "<div class='forum-viewtopic-attachments'>{---}</div>";
$FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'] = "<span class='forum-viewtopic-customtitle'><small>{---}</small></span>";

$FORUM_VIEWTOPIC_WRAPPER['replies']['ATTACHMENTS'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'];
$FORUM_VIEWTOPIC_WRAPPER['replies']['CUSTOMTITLE'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'];


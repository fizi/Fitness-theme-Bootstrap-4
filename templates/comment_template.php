<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (!defined("USER_WIDTH")){ define("USER_WIDTH", "width:100%"); }

global $sc_style;
global $pref, $comrow, $row2, $tp, $NEWIMAGE, $USERNAME, $RATING;

$sc_style['SUBJECT']['pre'] = "";
$sc_style['SUBJECT']['post'] = "";

$sc_style['USERNAME']['pre'] = "";
$sc_style['USERNAME']['post'] = "";

$sc_style['TIMEDATE']['pre'] = "";
$sc_style['TIMEDATE']['post'] = "";

$sc_style['AVATAR']['pre'] = "";
$sc_style['AVATAR']['post'] = "";

$sc_style['COMMENTS']['pre'] = "";
$sc_style['COMMENTS']['post'] = "<br />";

$sc_style['JOINED']['pre'] = "";
$sc_style['JOINED']['post'] = "<br />";

$sc_style['COMMENT']['pre'] = "";
$sc_style['COMMENT']['post'] = "<br />";

$sc_style['RATING']['pre'] = "";
$sc_style['RATING']['post'] = "<br />";

$sc_style['IPADDRESS']['pre'] = "";
$sc_style['IPADDRESS']['post'] = "<br />";

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "<br />";

$sc_style['LOCATION']['pre'] = "";
$sc_style['LOCATION']['post'] = "<br />";

$sc_style['SIGNATURE']['pre'] = "";
$sc_style['SIGNATURE']['post'] = "<br />";



// from e107.org 
$sc_style['REPLY']['pre'] 				= "";
$sc_style['REPLY']['post'] 				= "";

$sc_style['COMMENTEDIT']['pre']  		= '';
$sc_style['COMMENTEDIT']['post'] 		= '';

$sc_style['COMMENT_AVATAR']['pre']  	= '';
$sc_style['COMMENT_AVATAR']['post'] 	= '';

$sc_style['SUBJECT_INPUT']['pre']		= ""; //COMLAN_324
$sc_style['SUBJECT_INPUT']['post']		= "";

$sc_style['AUTHOR_INPUT']['pre']		= ""; // COMLAN_16
$sc_style['AUTHOR_INPUT']['post']		= "";

$sc_style['COMMENT_INPUT']['pre']		= "";// COMLAN_8
$sc_style['COMMENT_INPUT']['post']		= "";

$sc_style['COMMENT_BUTTON']['pre']		= "";
$sc_style['COMMENT_BUTTON']['post']		= "";

$sc_style['COMMENT_SHARE']['pre']		= "";
$sc_style['COMMENT_SHARE']['post']		= "";

$sc_style['COMMENT_RATE']['pre']  		= '';
$sc_style['COMMENT_RATE']['post'] 		= '';

//$sc_style['USER_AVATAR']['pre']  		= '<div class="comment-avatar center">';
//$sc_style['USER_AVATAR']['post'] 		= '</div>';

$sc_style['COMMENT_MODERATE']['pre']	= '';
$sc_style['COMMENT_MODERATE']['post']	= '';

$sc_style['MODERATE']['pre']	= '';
$sc_style['MODERATE']['post']	= '';


$COMMENT_TEMPLATE['form'] = "
<div class='comment-box-textbox'>
  {AUTHOR_INPUT}
  {COMMENT_INPUT}
</div>
<div id='commentformbutton'>
  {COMMENT_BUTTON}
  {COMMENT_SHARE}
</div>
"; 


$COMMENT_TEMPLATE['item'] = '
<div class="row">
  <div class="col">
    <div class="comment-avatar">
      {SETIMAGE: w=50&h=50&crop=1}
      {COMMENT_AVATAR}
      <span class="comment-username">{USERNAME}<span class="comment-date">{TIMEDATE=relative}</span></span>
    </div>
  </div>
  <div class="col">
    <div class="comment-reply">{REPLY}</div>
  </div>
  <div class="w-100"></div>
  <div class="col-12">
    <div class="comment-text" id="{COMMENT_ITEMID}-edit" contentEditable="false">
	  <p>{COMMENT}</p>
    </div>
  </div>
  <div class="w-100"></div>
  <div class="col">
    <span class="comment-status">{COMMENT_STATUS}</span>
    <span class="comment-edit">{COMMENTEDIT}</span>
    <span class="comment-moderate">{COMMENT_MODERATE}</span>
  </div>
  <div class="col">
    <div class="comment-rate">{COMMENT_RATE}</div>
  </div>
</div>
';
	



$COMMENT_TEMPLATE['layout'] = '
<div class="comment-info">
  <div class="row">
    <div class="col">
      {COMMENTS}
    </div>
  </div>
  <div class="row">
    <div class="col">  
      {COMMENTFORM}
    </div>
  </div>
</div>
 
<div style="padding:10px 0px">{MODERATE}</div>
';
										

?>
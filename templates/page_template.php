<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if(!defined('e107_INIT'))
{
	exit;
}

$PAGE_WRAPPER = array();

$PAGE_WRAPPER['default']['CPAGESUBTITLE']   = '<h4>{---}</h4>';
$PAGE_WRAPPER['default']['CPAGEMESSAGE']    = '{---}<div class="clear"><!-- --></div>';
$PAGE_WRAPPER['default']['CPAGEAUTHOR']     = "{---}, ";
$PAGE_WRAPPER['default']['CPAGENAV']        = '<div class="f-right pull-right float-right col-md-3">{---}</div>';


#### default template - BC ####
// used only for parsing comment outside of the page tablerender-ed content
// leave empty if you integrate page comments inside the main page template


$PAGE_TEMPLATE['default']['page'] = '
{PAGE}
';

// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '
<div id="{CPAGESEF}" class="cpage_body cpage-body">
  {CHAPTER_BREADCRUMB}
';

// page body
$PAGE_TEMPLATE['default']['body'] = '
  <div class="cpage-content">
    {CPAGEMESSAGE}
    {CPAGESUBTITLE}
    <div class="cpage-meta">{CPAGEDATE}&nbsp;&nbsp;|&nbsp;&nbsp;{LAN=LAN_THEME_8}&nbsp;{CPAGEAUTHOR}</div>
    {CPAGENAV}
    {CPAGEBODY}
  </div>
  <div class="cpage-rating">
    {CPAGERATING}
  </div>
  <div class="cpage-share">
    {SOCIALSHARE}
  </div>
';

// {CPAGEFIELD: name=image}

$PAGE_WRAPPER['default']['CPAGEEDIT'] = "
  <div class='text-right text-end'>{---}</div>";

// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
<div class="cpage-restrict ">
  {message}
  {form_open}
  <div class="panel panel-default">
	<div class="panel-heading">{caption}</div>
	<div class="panel-body">
	  <div class="form-group">
		<label class="col-sm-3 control-label">{label}</label>
		<div class="col-sm-9">
		  {password} {submit} 
		</div>
	  </div>
	</div>
  </div>
  {form_close}
</div>
	';

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
{text}
';

// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
{text}
';

// always used
$PAGE_TEMPLATE['default']['end'] = '
  {CPAGERELATED: types=page,news&limit=4}
  <div class="cpage-comments">
    <div class="cpage-comments-title"><h2>{LAN=LAN_THEME_80}</h2></div>
    <div class="cpage-comments-body">{PAGECOMMENTS}</div>
  </div>
</div>';

// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated

// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';


$PAGE_TEMPLATE['default']['related']['start'] = '
{SETIMAGE: w=900&h=700&crop=1}
<h2 class="cpage-related-title">{LAN=LAN_RELATED}</h2>
<div class="row">
';

$PAGE_TEMPLATE['default']['related']['item'] = '
  <div class="col-md-3">
    <div class="cpage-related-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div>
    <div class="cpage-related-header">
      <h4 class="cpage-related-caption"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4> 
    </div>
  </div>';
    
$PAGE_TEMPLATE['default']['related']['end'] = '
</div>';

// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';


#### No table render example template ####


$PAGE_TEMPLATE['custom']['start'] = '
<div id="{CPAGESEF}" class="cpage-body">
';

$PAGE_TEMPLATE['custom']['body'] = '';
$PAGE_TEMPLATE['custom']['authorize'] = '
	';

$PAGE_TEMPLATE['custom']['restricted'] = '
	';

$PAGE_TEMPLATE['custom']['end'] = '
</div>
';

$PAGE_TEMPLATE['custom']['tableRender'] = '';


$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '
<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>
';

$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
{CPAGEMESSAGE}
{CPAGESUBTITLE}
<div class="clear"><!-- --></div>
{CPAGENAV|default}
{SETIMAGE: w=320}
{CMENUIMAGE: template=profile}
{CPAGEBODY}
<div class="clear"><!-- --></div>
{CPAGERATING}
{CPAGEEDIT}
';
	
	
	
	







	
	
	

<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
// $NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';


$NEWS_VIEW_TEMPLATE['default']['caption'] = null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
<div class="view-item"> 
  <div class="row">
    <div class="col-md-8">  
      <div class="view-item-body text-justify">
        {NEWS_BODY=body}
      </div> 
      <div class="view-item-extended text-justify">
        {NEWS_BODY=extended}
      </div>
    </div>
    <div class="col-md-4">
      <div class="view-item-author">
        <div class="view-item-author-avatar">	      
          {SETIMAGE: w=90&h=90&crop=1}
          {NEWS_AUTHOR_AVATAR}
        </div>
        <div class="view-item-author-text">                      
	      <h4 class="view-item-author-name">{NEWS_AUTHOR}</h4>
	      <div class="view-item-author-info">{NEWS_AUTHOR_SIGNATURE}</div>
        </div>
      </div>	
      {SETIMAGE: w=1000&h=750&crop=1}
      <div class="row view-item-images">
        <div class="col-md-6">{NEWSIMAGE: item=2}</div>
        <div class="col-md-6">{NEWSIMAGE: item=3}</div>
        <div class="col-md-6">{NEWSIMAGE: item=4}</div>
        <div class="col-md-6">{NEWSIMAGE: item=5}</div>
      </div>
      <div class="row view-item-videos">
        <div class="col-md-6 view-video">{NEWSVIDEO: item=1}</div>
	    <div class="col-md-6 view-video">{NEWSVIDEO: item=2}</div>
	    <div class="col-md-6 view-video">{NEWSVIDEO: item=3}</div>
        <div class="col-md-6 view-video">{NEWSVIDEO: item=4}</div>
      </div>
      <div class="view-item-tags">
        <h3 class="view-item-tags-title">{LAN=LAN_THEME_100}</h3>
        {NEWSTAGS}
      </div>
      <div class="view-item-rate">
        <h3 class="view-item-rate-title">{LAN=LAN_THEME_110}</h3>
        <div class="view-item-rate-body">{NEWS_RATE}</div>
      </div>
    </div>
  </div>  
  <div class="view-item-share">
    {SOCIALSHARE}
  </div>
  <hr class="view-item-selector" />
  {NEWSRELATED: types=news&limit=4}
</div>
<div class="news-view-pagination">
  <div class="row">
    <div class="page-item col-md-4 nav-left d-flex justify-content-start align-items-center">{NEWS_NAV_PREVIOUS}</div>
    <div class="page-item col-md-4 h-100 d-flex justify-content-center align-items-center">{NEWS_NAV_CURRENT}</div>
    <div class="page-item col-md-4 nav-right d-flex justify-content-end align-items-center">{NEWS_NAV_NEXT}</div>
  </div>
</div>
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
$NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '
<div class="media">
  <div class="prev-image"> 
    <a href="{NEWS_URL}">
      {SETIMAGE: w=60&h=60&crop=1}
      {NEWSIMAGE: class=mr-3}
    </a>
  </div>  
  <div class="prev-details media-body">
    <div class="prev-lan">{LAN=LAN_THEME_700}</div> 
    <div class="prev-title"><a href="{NEWS_URL}">{NEWS_TITLE}</a></div>
    </div>
  </a>
</div>';
  
$NEWS_VIEW_TEMPLATE['nav']['current'] = '
<div class="back-to-news"><a class="btn btn-default back text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</a></div>';
  
$NEWS_VIEW_TEMPLATE['nav']['next'] = '
<div class="media">    
  <div class="next-details media-body">
    <div class="next-lan text-right">{LAN=LAN_THEME_701}</div> 
    <div class="next-title text-right"><a href="{NEWS_URL}">{NEWS_TITLE}</a></div> 
  </div>   
  <div class="next-image">
    <a href="{NEWS_URL}">
      {SETIMAGE: w=60&h=60&crop=1}
      {NEWSIMAGE: class=ml-3}
    </a>
  </div>
</div>';


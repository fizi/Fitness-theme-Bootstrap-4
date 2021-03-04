<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



$POPULAR_MENU_TEMPLATE['default']['start'] = "
<div class='popular-news-menu'>";  // set the {NEWSIMAGE} dimensions.

$POPULAR_MENU_TEMPLATE['default']['item'] = '
  <div class="row"> 
    <div class="col-4 popular-image">
      {SETIMAGE: w=400&h=400&crop=1}
      <a href="{NEWS_URL}">{NEWS_IMAGE: item=1&type=tag}</a>
    </div>
    <div class="col-8 popular-body">
      <h4>{NEWS_TITLE: link=1}</h4>
      {NEWS_SUMMARY: limit=50}
      <i class="fas fa-chart-line"></i> {HITS_COUNTER}
    </div>
  </div>
  <hr />';
										
$POPULAR_MENU_TEMPLATE['default']['end'] = "  
</div>";
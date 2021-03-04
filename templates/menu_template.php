<?php
if (!defined('e107_INIT')) { exit; }

#### Panel Template - Used by menu_class.php  for Custom Menu Content.
#### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}

	$MENU_TEMPLATE['default']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
	$MENU_TEMPLATE['default']['body'] 					= '{CMENUBODY}'; 
	$MENU_TEMPLATE['default']['end'] 					= '</div>';

	$MENU_TEMPLATE['button']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
	$MENU_TEMPLATE['button']['body'] 					= '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['button']['end'] 					= '</div>'; 

	$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
	$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>';

	$MENU_TEMPLATE['image-only']['start'] 				= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
	$MENU_TEMPLATE['image-only']['body'] 				= '{CMENUIMAGE}';
	$MENU_TEMPLATE['image-only']['end'] 				= '</div>';

	$MENU_TEMPLATE['image-text-button']['start'] 		= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
	$MENU_TEMPLATE['image-text-button']['body'] 		= '{CMENUIMAGE}{CMENUBODY}{CPAGEBUTTON}';
	$MENU_TEMPLATE['image-text-button']['end'] 			= '</div>';


/* Modified by FIZI ************************************************************/
$MENU_TEMPLATE['home-section-1']['start'] = '
<div class="home-section-1-menu cpage-menu {CMENUNAME}">
';

$MENU_TEMPLATE['home-section-1']['body'] = '
  <div class="home-section-1-menu-body">{CMENUBODY}</div>
  <div class="home-section-1-menu-button">{CPAGEBUTTON}</div>
'; 

$MENU_TEMPLATE['home-section-1']['end'] = '
</div>';

/* Modified by FIZI ************************************************************/
$MENU_TEMPLATE['home-section-2']['start'] = '
<div class="home-section-2-menu cpage-menu {CMENUNAME}">
';

$MENU_TEMPLATE['home-section-2']['body'] = '
  <div class="home-section-2-menu-image">
    {SETIMAGE: w=800&h=600&crop=1}
    {CMENUIMAGE: type=src}
  </div>
  <div class="home-section-2-menu-body">
    <div class="home-section-2-menu-title">{CMENUTITLE}</div>  
    {CMENUBODY}
    <div class="home-section-2-menu-button">{CPAGEBUTTON}</div> 
  </div>
'; 

$MENU_TEMPLATE['home-section-2']['end'] = '
</div>';


/* Modified by FIZI ************************************************************/
$MENU_TEMPLATE['home-section-3']['start'] = '
<div class="home-section-3-menu cpage-menu {CMENUNAME}">
';

$MENU_TEMPLATE['home-section-3']['body'] = '
  <div class="home-section-3-menu-body">{CMENUBODY}</div>
  <div class="home-section-3-menu-button">{CPAGEBUTTON}</div>
';
 
$MENU_TEMPLATE['home-section-3']['end'] = '
</div>';
  

/* Modified by FIZI ************************************************************/
$MENU_TEMPLATE['home-section-4']['start'] = '
<div class="home-section-4-menu cpage-menu {CMENUNAME}">
  <div class="row">
';

$MENU_TEMPLATE['home-section-4']['body'] = '
    <div class="col-md-6">
      {SETIMAGE: w=800&h=600}
      <a href="{CMENUURL}">
        <div class="home-section-4-menu-image matchHeigh">{CMENUIMAGE}</div>
      </a>
    </div> 
    <div class="col-md-6">
      <div class="home-section-4-menu-body matchHeigh">     
        <div class="home-section-4-menu-title">{CMENUTITLE}</div>  
        {CMENUBODY}
        <div class="home-section-4-menu-button">{CPAGEBUTTON}</div> 
      </div>
    </div>        
'; 

$MENU_TEMPLATE['home-section-4']['end'] = '
  </div>
</div>';

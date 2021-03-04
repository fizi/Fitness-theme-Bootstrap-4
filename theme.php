<?php

if(!defined('e107_INIT'))
{
	exit();
}

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected) 

class theme implements e_theme_render {

  public function init() {

    e107::meta('viewport', 'width=device-width, initial-scale=1.0'); // added to <head>
    //  e107::link('rel="preload" href="{THEME}fonts/myfont.woff2?v=2.2.0" as="font" type="font/woff2" crossorigin');  // added to <head>

    //e107::meta('apple-mobile-web-app-capable','yes');
    
    
    $bootswatch = e107::pref('theme', 'bootswatch', false);
    if($bootswatch) {
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
      e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
    }
    
    e107::library("load", "animate.css"); 
    
    e107::css('url', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap');
    e107::css("theme", "css/aos.css"); 
    e107::css("theme", "css/languages.css");     
    

    e107::js("footer-inline", "$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips.  
    e107::js("theme", "js/masonry.pkgd.js");
    e107::js("theme", "js/imagesloaded.pkgd.min.js"); 
    e107::js("theme", "js/jquery.lettering.js");
    e107::js("theme", "js/jquery.matchHeight.js"); 
    e107::js("theme", "js/aos.js"); 
    e107::js("theme", "js/custom.js", "jquery");
    
    /* @example prefetch  */
    //e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));
    
  }


  /**
  * @param string $text
  * @return string without p tags added always with bbcodes
  * note: this solves W3C validation issue and CSS style problems
  * use this carefully, mainly for custom menus, let decision on theme developers
  */

  function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
  {

    $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

	return $text;
  }


  function tablestyle($caption, $text, $mode='', $options = array()) {

	$style = varset($options['setStyle'], 'default');
			
	//this should be displayed only in e_debug mode
			
    echo "\n<!-- tablestyle initial:  style=". $style."  mode=".$mode."  UniqueId=".varset($options['uniqueId'])." -->\n\n";


	if($mode == 'wmessage' OR $mode == 'wm') {
	  $style = 'wmessage';
	}

	switch($style){

	  /*  case 'home':
			echo $caption;
			echo $text;
		  break;
		  case 'menu':
			echo $caption;
			echo $text;
		  break;
		  case 'full':
			echo $caption;
			echo $text;
		  break;
	  */
    
	  case 'nocaption':
	  case 'main':
		echo $text;
	  break;
      
      case 'slider':
        echo $text;
      break;
      
      case "wmessage":
        echo "<div class='wmessage-box' data-aos='fade-right'>
                <div class='wmessage-box-title'>
                  <h4>".SITENAME."</h4>         		                                                      
                  <h2>{$caption}</h2>
                </div>
                <div class='wmessage-box-body'>{$text}</div>
              </div>";
      break;
      
      case "home-section-1":
        echo "<div class='home-section-1-box'>
                <div class='home-section-1-box-title'>  
                  <h4>".SITENAME."</h4>       		                                                      
                  <h2>{$caption}</h2>
                </div>
                <div class='home-section-1-box-body'>{$text}</div>
              </div>";
      break;
      
      case "home-section-2":
        echo "<div class='home-section-2-box'> 
              <div class='home-section-2-box-body'>{$text}</div> 
            </div>";
      break;

	  case "home-section-3":
        echo "<div class='home-section-3-box' data-aos='fade-left'>
                <div class='home-section-3-box-title'>  
                  <h4>".SITENAME."</h4>        		                                                      
                  <h2>{$caption}</h2>
                </div>
                <div class='home-section-3-box-body'>{$text}</div>
              </div>";
      break;
    
      case "home-section-4":
        echo "<div class='home-section-4-box'>
                <div class='home-section-4-box-body'>{$text}</div>
              </div>";
      break;
      
      case "portfolio":
		  echo "<div class='col-md-2'>{$text}</div>";	
	  break;

	  case "main":
		echo "<div class='leftcol-content'>";
		if(!empty($caption)) {
		  echo "<div class='leftcol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='leftcol-content-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      case "leftbottom":
		echo "<div class='leftbottom-content'>";
		if(!empty($caption)) {
		  echo "<div class='leftbottom-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='leftbottom-content-body'>{$text}</div>";
		echo "</div>";
	  break;

	  case "rightcol":
		echo "<div class='rightcol-content'>";
		if(!empty($caption)) {
		  echo "<div class='rightcol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='rightcol-content-body'>{$text}</div>";
		echo "</div>";
	  break;
      
      case "bottomcol":
		echo "<div class='footercol-content'>";
		if(!empty($caption)) {
		  echo "<div class='footercol-content-title'><h2>{$caption}</h2></div>";
		}
		echo "<div class='footercol-content-body'>{$text}</div>";
		echo "</div>";
	  break;

	  default:
        // default style
	    // only if this always work, play with different styles
        if(!empty($caption)) {
		  echo '<div class="my-4">{$caption}</div>';
		}
		echo $text;
      return;
	}

  }

}
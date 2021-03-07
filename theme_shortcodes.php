<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode {
  function __construct(){
		
	}
  
/*----------------------------- 
  LOGIN SHORTCODE 
-----------------------------*/  
	                     
	function sc_bootstrap_usernav($parm='')
	{
		$placement = e107::pref('theme', 'usernav_placement', 'top');

		if($parm['placement'] != $placement){
			return '';
		}

		include_lan(e_PLUGIN."login_menu/languages/".e_LANGUAGE.".php");	
		$tp = e107::getParser();		   
		require(e_PLUGIN."login_menu/login_menu_shortcodes.php"); // don't use 'require_once'.

		$direction = vartrue($parm['dir']) == 'up' ? ' dropup' : '';
		
		$userReg = defset('USER_REGISTRATION');
				   
		if(!USERID){ // Logged Out. 		

			if($userReg==1){
				$text .= '
				<li class="navbar-registration"><a href="'.e_SIGNUP.'"><i class="fa fa-user-plus"></i></a></li>
				'; // Signup
			}

			$socialActive = e107::pref('core', 'social_login_active');

			if(!empty($userReg) || !empty($socialActive)){ // e107 or social login is active.
				$text .= '
				<li class="divider-vertical"></li>
				<li class="navbar-login dropdown">
			    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-sign-in"></i> <b class="caret"></b></a>
			    <div class="dropdown-menu col-sm-12" style="min-width:250px;">				
				    {SOCIAL_LOGIN: size=2x&label=1}
				    '; // Sign In
			}else{
				return '';
			}
			
			if(!empty($userReg)){ // value of 1 or 2 = login okay. 

			//	global $sc_style; // never use global - will impact signup/usersettings pages. 
			//	$sc_style = array(); // remove any wrappers.

				$text .='			
				<form method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8">
				  <p>{LM_USERNAME_INPUT}</p>
				  <p>{LM_PASSWORD_INPUT}</p>
				  <div class="form-group"></div>
				  {LM_IMAGECODE_NUMBER}
				  {LM_IMAGECODE_BOX}	
				  <div class="checkbox">	
				    <label class="string optional" for="autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="autologin" value="1">'.LAN_LOGINMENU_6.'</label>
				  </div>
				  <input class="btn btn-primary btn-block" type="submit" name="userlogin" id="userlogin" value="'.LAN_LOGINMENU_51.'">
				  ';
				
				$text .= '	
				  <a href="{LM_FPW_LINK=href}" class="btn btn-default btn-sm  btn-block"><i class="fa fa-key"></i>&nbsp;&nbsp;'.LAN_LOGINMENU_4.'</a>
				  <a href="{LM_RESEND_LINK=href}" class="btn btn-default btn-sm  btn-block"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;'.LAN_LOGINMENU_40.'</a>
				  ';
								
				/*
				$text .= '
					<label style="text-align:center;margin-top:5px">or</label>
					<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
					<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
				';
				*/
				
				$text .= "<p></p>
				</form>
				</div>				
				</li>
				";			
			}			
			
			return $tp->parseTemplate($text, true, $login_menu_shortcodes);
		}  
		
		// Logged in. 
		//TODO Generic LANS. (not theme LANs) 	
		
		$text = '		
		<li class="dropdown">{PM_NAV}</li>
		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{SETIMAGE: w=20} {USER_AVATAR: shape=circle} '. USERNAME.' <b class="caret"></b></a>
		  <ul class="dropdown-menu">
		    <li>
			    <a href="{LM_USERSETTINGS_HREF}"><span class="glyphicon glyphicon-cog"></span> '.LAN_SETTINGS.'</a>
		    </li>
		    <li>
			    <a class="dropdown-toggle no-block" role="button" href="{LM_PROFILE_HREF}"><span class="glyphicon glyphicon-user"></span> '.LAN_LOGINMENU_13.'</a>
		    </li>
		    ';
		
		if(ADMIN) {
			$text .= '
        <li><a href="'.e_ADMIN_ABS.'"><span class="fa fa-cogs"></span> '.LAN_LOGINMENU_11.'</a></li>';	
		}
		
		$text .= '
		    <li><a href="'.e_HTTP.'index.php?logout"><span class="glyphicon glyphicon-off"></span> '.LAN_LOGOUT.'</a></li>
		  </ul>
		</li>		
		';

		return $tp->parseTemplate($text,true,$login_menu_shortcodes);
	}	
    

  
/*----------------------------- 
  SUBSCRIBE SHORTCODE 
-----------------------------*/    
  function sc_bootstrap_subscribe()
	{
		$pref = e107::pref('core');
		$ns = e107::getRender();

		if(empty($pref['signup_option_class']))
		{
			return false;
		}

		$frm = e107::getForm();
		$text = $frm->open('newsletter','post', e_SIGNUP); 
		$text .= "<div class='input-group input-group-lg'>"; 
		$text .= $frm->text('email','', null, array('placeholder'=>LAN_THEME_401));
		$text .= "<span class='input-group-btn'>";
		$text .= " ".$frm->button('subscribe', 1, 'submit', LAN_THEME_402, array('class'=>'btn-primary'));
		$text .= "</span>";
	  $text .= "</div>";  
		$text .= $frm->close();

		$caption = LAN_THEME_400;

		return $ns->tablerender($caption, $text, 'subscribe', true);
	}
  





/* ------------------------------------------------------------------------------------------------------------------------------------------- */

/*----------------------------- 
  LATEST NEWS SHORTCODE 
-----------------------------*/  
    function sc_fitness_grid_news_latest(){
  
      $template = "
        <!-- News Grid Menu for Latest 4 News -->
        {MENU: path=news/news_grid&limit=4&category=0&source=latest&featured=0&layout=homepage-latestnews}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    return $text;  
  
    } 
 
    
/*------------------------------------------ 
    Shortcode for news on extend news pages 
--------------------------------------------*/       
    /**
     * Will only function on the news page.
     * @example {THEME_NEWS_BANNER: type=date}
     * @example, {THEME_NEWS_BANNER: type=image}
     * @example {THEME_NEWS_BANNER: type=author}
     * @param null $parm
     * @return string|null
     */
    function sc_theme_news_banner($parm=null)
    {
        /** @var news_shortcodes $news */
        $sc = e107::getScBatch('news');
        $news = $sc->getScVar('news_item');

        $ret = '';
        $type = varset($parm['type']);

        switch($type)
        {
            case "title":
                $ret = $sc->sc_news_title();
                break;

            case "date":
                $ret = $sc->sc_news_date();
                break;

            case "comment":
                $ret = $sc->sc_news_comment_count();
                break;
            
            case "category":
                $ret = $sc->sc_newscategory(); 
                break;

            case "author":
                $ret = $sc->sc_news_author();
                break;

            case "image":
            default:
            if(!empty($news['news_thumbnail']))
            {
                $tmp = explode(',', $news['news_thumbnail']);

                $opts = array(
                    'w' => 1800,
                    'h' => null,
                    'crop' => false,
                );

                $ret = e107::getParser()->toImage($tmp[0], $opts);
            }
                // code to be executed if n is different from all labels;
        }

        return $ret;


    }

    
/*------------------------------------------ 
    Shortcode for custom contact 
--------------------------------------------*/  
    
    function sc_fitness_contact_address()
	{
      $contact_shortcodes = e107::getScBatch('contact');                
      return e107::getParser()->parseTemplate("<p>{CONTACT_INFO: type=address}</p>", true, $contact_shortcodes);
    }
    function sc_fitness_contact_phone1()
	{
      $contact_shortcodes = e107::getScBatch('contact');                
      return e107::getParser()->parseTemplate("<p>{CONTACT_INFO: type=phone1}</p>", true, $contact_shortcodes);
    }
    function sc_fitness_contact_email1()
	{
      $contact_shortcodes = e107::getScBatch('contact');                
      return e107::getParser()->parseTemplate("<p>{CONTACT_INFO: type=email1}</p>", true, $contact_shortcodes);
    }
    function sc_fitness_contact_hours()
	{
      $contact_shortcodes = e107::getScBatch('contact');                
      return e107::getParser()->parseTemplate("<p>{CONTACT_INFO: type=hours}</p>", true, $contact_shortcodes);
    }

    
/*------------------------------------------ 
    Shortcode for PAGETITLE 
--------------------------------------------*/ 
    function sc_fitness_pagetitle()
	{
      return e107::title();
    }  
    
    
/*------------------------------------------ 
    Shortcode for LANGUAGE SELECT WIDTH IMAGES 
--------------------------------------------*/     
    function sc_fitness_languagelinks($parm = '')
    {
	  if(!defined('LANGLINKS_SEPARATOR'))
	  {
		define('LANGLINKS_SEPARATOR', '&nbsp;|&nbsp;');
	  }

	  if(is_string($parm))
	  {
		$tmp = explode('|', $parm, 2);
		$parm = $tmp[0];
		$parms = array();
		if(isset($tmp[1])) parse_str($tmp[1], $parms);
	  }

	  // ignore Query string if required by parms or external code, false by default
	  if(!defined('LANGLINKS_NOQUERY'))
	  {
		define('LANGLINKS_NOQUERY', isset($parms['noquery']));
	  }

	  if(!defined('LANGLINKS_HOME'))
	  {
		define('LANGLINKS_HOME', isset($parms['home']));
	  }

	  $slng = e107::getLanguage();

	  if(!empty($parm))
	  {
		$languageList = explode(',', $parm);
	  }
	  else
	  {
		$languageList = $slng->installed();
		sort($languageList);
	  }

	  if(count($languageList) < 2)
	  {
		return;
	  } 
      
      $code = ($slng->convert(e_LANGUAGE));             
      
      $ret[] = "<ul class='navbar-nav sel-lang'>
                  <li class='nav-item dropdown'>
                    <a id='languageDropdown' class='nav-link dropdown-toggle' href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                    <span class='lang-sm lang-lbl' lang='{$code}'></span></a>                    
                    <div class='dropdown-menu' aria-labelledby='languageDropdown'>";     
                  

	  foreach($languageList as $languageFolder)
	  {
		$code = $slng->convert($languageFolder);
		$name = $slng->toNative($languageFolder);
		//$subdom = (isset($cursub[2])) ? $cursub[0] : '';

		if(e107::getPref('multilanguage_subdomain'))
		{
			$code = ($languageFolder == e107::getPref('sitelanguage')) ? 'www' : $code;
			if(LANGLINKS_HOME)
			{
				$link = str_replace($_SERVER['HTTP_HOST'], $code.'.'.e_DOMAIN, SITEURL);
			}
			else
			{
				$link = (!LANGLINKS_NOQUERY)
			        ? str_replace($_SERVER['HTTP_HOST'], $code.'.'.e_DOMAIN, e_REQUEST_URL) // includes query string
			        : str_replace($_SERVER['HTTP_HOST'], $code.'.'.e_DOMAIN, e_REQUEST_SELF); // excludes query string
			}
		}
		else
		{
			// TODO - switch to elan=Language query when possible (now it'll break the old DOT query string format)
			if(LANGLINKS_HOME)
			{
				$link = SITEURL.'?elan='.$code;
			}
			else
			{
				$e_QUERY = str_replace('['.e_MENU.']',"",e_QUERY);
				$link = (!LANGLINKS_NOQUERY) ? e_REQUEST_SELF.'?['.$code.']'.$e_QUERY : e_REQUEST_SELF.'?elan='.$code;
			}
		}  
		
		$class = ($languageFolder == e_LANGUAGE) ? 'languagelink_active' : 'languagelink'; 
        
       
		$ret[] =  "<a class='dropdown-item {$class}' href='{$link}'><span class='lang-sm lang-lbl' lang='{$code}'></span></a>";
	  }
      
      $ret[] .= "</div></li></ul>";                  

	  return implode($ret);
    }
                    
  
} 
 
?>
<?php
GLOBAL $page_title, $page_description, $page_keywords, $page_header, $breadcrumb;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow" /> 
    
    <base href="http://opengate.com.ua/" />
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />
	  <meta name="description" content="<?php echo $page_description; ?>" />
    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" href="css/newstyle.css" type="text/css" />
    <link rel="stylesheet" href="css/std-menu.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/content.css" type="text/css" />

	<script type="text/javascript" src="js/swfobject.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-buttons.css?v=2.0.4" />
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=2.0.4"></script>
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-thumbs.css?v=2.0.4" />
	<script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=2.0.4"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
				Simple image gallery. Uses default settings
			*/
			$('.fancybox').fancybox();
			/*
				Different effects
			*/
		});
	</script>
  
  <script language="javascript">
  function validate_required(field,alerttxt)
  {
  with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false;}
  else {return true}
  }
  }
  
  function validate(form_id,email) {
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     var address = document.forms[form_id].elements[email].value;
     if(reg.test(address) == false) {
        alert('Пожалуйста, укажите верно свой email.');
        return false;
     }
     with (document.forms[form_id])
  	{
  	if (validate_required(name,"Вы забыли ввести свое имя.")==false)
    	{name.focus();return false;}
  	};
  }
  </script>
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15035426-22']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</head>
<body class="inner">

  <div class="wrap">
    <div class="wrapInner">
      <div class="header">

        <div style="float:left;">
          <a href="http://opengate.com.ua" title="Секционные ворота. Автоматика. Монтаж и обслуживание.">
            <img src="images/og_logo3.png" border="0">
          </a>  
		    </div>

<?php
require_once("menu.php");
?>

      </div> <!-- header -->
      <div class="slider">
        <div class="sliderImg">

            <script type="text/javascript" src="js/flash1.js"></script>
	        <div id="flashContent">
	            <img alt="" src="content/N_garage1.jpg">
	        </div>
	        <noscript>
	            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1300" height="235" id="intro">
	                <param name="movie" value="swf/vs_garage.swf" />
	                <param name="quality" value="high" />
					<param name="wmode" value="transparent">
	                <param name="bgcolor" value="#ffffff" />
	                <param name="allowScriptAccess" value="sameDomain" />
	                <param name="allowFullScreen" value="true" />
	                <!--[if !IE]>-->
	                <object type="application/x-shockwave-flash" data="swf/vs_garage.swf" width="1300" height="235">
	                    <param name="quality" value="high" />
	                    <param name="bgcolor" value="#ffffff" />
	                    <param name="allowScriptAccess" value="sameDomain" />
	                    <param name="allowFullScreen" value="true" />
	                <!--<![endif]-->
	                <!--[if gte IE 6]>-->
	                    <img alt="" src="pic/N_garage1.jpg">
	                <!--<![endif]-->
	                    <a href="http://www.adobe.com/go/getflashplayer">
	                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
	                    </a>
	                <!--[if !IE]>-->
	                </object>
	                <!--<![endif]-->
	            </object>
	        </noscript>

        </div> <!-- sliderImg -->
      </div> <!-- slider -->
      <div class="content">
        <div class="contentTop">

          <div class="breadCr" style="height: 14px; ">
            <?php echo $breadcrumb; ?>
          </div>

        </div> <!-- contentTop -->
        <div class="contentBottom">

      <div class="page_title_noline">
  			<a name="sub">
          <span class="catalog_h3"><h4>Стоимость гаражных ворот Черновцы</h4></span>
        </a>  
  		</div>
      <br>
		  <div class="clear"></div>
      
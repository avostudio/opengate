<?php
GLOBAL $page_title, $page_description, $page_keywords, $breadcrumb;
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
           <!-- Start WOWSlider.com BODY section -->
           <link rel="stylesheet" type="text/css" href="wow/style.css" />
            <div id="wowslider-container1">
               <div class="ws_images">
                   <ul>
                       <li><img src="swf/vs_prom/image_23.jpg" id="wows1_0"/></li>
                       <li><img src="swf/vs_prom/image_26.jpg" id="wows1_1"/></li>
                       <li><img src="swf/vs_prom/image_29.jpg" id="wows1_2"/></li>
                       <li><img src="swf/vs_prom/image_32.jpg" id="wows1_3"/></li>
                   </ul>
               </div>
            </div>
            <script type="text/javascript" src="js/wowslider.js"></script>
            <script type="text/javascript" src="js/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
        </div> <!-- sliderImg -->
      </div> <!-- slider -->
      <div class="content">
        <div class="contentTop">

          <div class="breadCr" style="height: 14px; ">
            <?php echo $breadcrumb; ?>
          </div>

        </div> <!-- contentTop -->
        <div class="contentBottom">

          <div id="sidebar-2">
            <div class="sidebar_list">
			  <h3>Характеристики</h3>
				<ul class="menu">
				  <li class="item-673 firstItem">
				    <a href="tipy.promishlenie-vorota.php#tag" title="Типы монтажа">
				      Типы монтажа
				    </a>
				  </li>
				  <li class="item-674">
				    <a href="paneli.promishlenie-vorota.php#tag" title="Типы панелей">
				      Типы панелей
				    </a>
				  </li>
				  <li class="item-675">
				    <a href="prochnost.promishlenie-vorota.php#tag" title="Прочность конструкции">
				      Прочность конструкции
				    </a>
				  </li>
				  <li class="item-676">
				    <a href="anticorrosion.promishlenie-vorota.php#tag" title="Антикоррозийная стойкость">
				      Антикоррозийная стойкость
				    </a>
				  </li>
				  <li class="item-677">
				    <a href="bezopasnost.promishlenie-vorota.php#tag" title="Безопасность эксплуатации">
				      Безопасность эксплуатации
				    </a>
				  </li>
				  <li class="item-678 lastItem">
				    <a href="teplo.promishlenie-vorota.php#tag" title="Высокая теплоизоляция">
				      Высокая теплоизоляция
				    </a>
				  </li>
          <li class="item-678 lastItem">
				    <a href="osobenosti.promishlenie-vorota.php#tag" title="Конструктивные особенности">
				      Конструктивные особенности
				    </a>
				  </li>
          <li class="item-678 lastItem">
				    <a href="upravlenie.promishlenie-vorota.php#tag" title="Виды управления">
				      Виды управления
				    </a>
				  </li>
				</ul>
		    </div>
          </div>

          <div class="page_title">
			<h3>Промышленные ворота</h3>
		  </div>

          <div class="wrapper">

		  <div class="md">
		    <!-- START 'DisplayNews by BK 2.0RC1' -->
			  <ul>
			    <li>
			      <h2>
			        <a href="opisanie.promishlenie-vorota.php" class="md_title_prom1">
			          Описание
			        </a>
			      </h2>
			      <p>Описание промышленных ворот, их применение, достоинства, преимущества и виды конструкции промышленных ворот<br><a href="primenenie.garazhnie-vorota.php" class="readon">Подробнее</a><br>&nbsp;</p>
			      <div style="clear: both;"></div>
			    </li>
			  </ul>
			<!-- END 'DisplayNews by BK 2.0RC1' -->
		  </div> <!-- moduletable_news -->

		  <div class="md">
			<!-- START 'DisplayNews by BK 2.0RC1' -->
			  <ul>
			    <li>
			      <h2>
			        <a href="calculator.prom.php" class="md_title2">
			          Стоимость
			        </a>
			      </h2>
			      <p>Чтобы рассчитать примерную стоимость ворот и монтажа, введите данные высоты и ширины проема для ворот<br><a href="calculator.prom.php" class="readon">Подробнее</a><br>&nbsp;</p>
				  <div style="clear: both;"></div>
				</li>
			  </ul>
			<!-- END 'DisplayNews by BK 2.0RC1' -->
		  </div> <!-- moduletable_news1 -->

		  <div class="md">

			<!-- START 'DisplayNews by BK 2.0RC1' -->
			  <ul>
			    <li>
			      <h2>
			        <a href="photo.promishlenie-vorota.php#tag" class="md_title3">
			          Фотографии
			        </a>
			      </h2>
			      <p>Фотогалерея объектов, а также различных возможных вариантов монтажа промышленных ворот<br><a href="photo.garazhnie-vorota.php" class="readon">Подробнее</a><br>&nbsp;</p>
				  <div style="clear: both;"></div>
				</li>
			  </ul>
			<!-- END 'DisplayNews by BK 2.0RC1' -->
		  </div> <!-- moduletable_news2 -->

		  </div> <!-- wrapper -->

		  <div class="clear"></div>
          <br>
<?php

$str_width = isset($_POST['width']) ? $_POST['width'] : $_GET['width'];
$str_height = isset($_POST['height']) ? $_POST['height'] : $_GET['height'];
$str_peremichka = isset($_POST['peremichka']) ? $_POST['peremichka'] : $_GET['peremichka'];
$color_id = isset($_POST['c']) ? $_POST['c'] : $_GET['c'];
$vtype_id = isset($_POST['v']) ? $_POST['v'] : $_GET['v'];
$ptype_id = isset($_POST['p']) ? $_POST['p'] : $_GET['p'];
$str_delivery = isset($_POST['d']) ? $_POST['d'] : $_GET['d'];
$str_automatics = isset($_POST['a']) ? $_POST['a'] : $_GET['a'];
$str_sum = isset($_POST['sum']) ? $_POST['sum'] : $_GET['sum'];

if ($str_peremichka=="NaN") $str_peremichka = "0";

if ($vtype_id=="0") {
  $str_vtype = "Гаражные ворота STANDARD";
} else if ($vtype_id=="1") {
  $str_vtype = "Гаражные ворота CLASSIC";
} else if ($vtype_id=="2") {
  $str_vtype = "Промышленные ворота";
} 

if ($ptype_id=="0") {
  $str_ptype = "S, M, L гофр";
} else if ($ptype_id=="1") {
  $str_ptype = "Микроволна";
} else if ($ptype_id=="2") {
  $str_ptype = "Филенка";
}

if ($color_id=="0") {
  $str_color = "Белый (стандартный)";
} else if ($color_id=="1") {
  $str_color = "Слоновая кость (стандартный)";
} else if ($color_id=="2") {
  $str_color = "Пурпурно-красный (стандартный)";
} else if ($color_id=="3") {
  $str_color = "Синий (стандартный)";
} else if ($color_id=="4") {
  $str_color = "Зеленый (стандартный)";
} else if ($color_id=="5") {
  $str_color = "Коричневый (стандартный)";
} else if ($color_id=="6") {
  $str_color = "Антрацит (стандартный)";
} else if ($color_id=="8") {
  $str_color = "Серебристый металик (стандартный)";
} else if ($color_id=="9") {
  $str_color = "Золотой дуб (дерево)";
} else if ($color_id=="10") {
  $str_color = "Темный дуб (дерево)";
} else if ($color_id=="11") {
  $str_color = "Вишня (дерево)";
} else if ($color_id=="12") {
  $str_color = " по каталогу RAL";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
      .text {
        font: normal 16px Arial, Helvetica, sans-serif;
      }
      .small {
        font: normal 12px Arial, Helvetica, sans-serif;
      }
    </style>
    
    <title>Печать: Стоимость гаражных ворот от OpenGATE</title>
    
    <script Language="Javascript">
      function printit(){
        if (parent.window.print) {
          parent.window.print() ;
        } else {
          var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
          document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
          WebBrowser1.ExecWB(6, 2); //Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = "";
        }
      }
    </script>
  </head>
  
  <body onload="printit();">  
        <div class="certContent cat">
          <div class="certContentBlock">
            
            <br>
            <div style="width:300px;float:left;">
              <img src="images/oglogo3_bw.gif" />
            </div>
            <div style="width:400px;float:left;font: normal 16px Verdana;">
              <br>
              Телефон +38 067 372 2610
              <br>
              Монтаж-сервис +38 095 579 4021
              <br>
              www.opengate.com.ua
            </div>
            <br><br>
            
						<form action="order.php" method="post" id="form">
							<table width="720">
								<tr valign="top">
									<td width="380">
										<table class="text" width="480">
											<tr>
												<td width="400px;">
                          <br><br>
                          Ширина ворот: <b><?php echo $str_width; ?></b> мм
                        </td>
											</tr>
											<tr>
												<td width="150">Высота ворот: <b><?php echo $str_height; ?></b> мм</td>
											</tr> 
                      <tr>
												<td>Высота перемычки: <b><?php echo $str_peremichka; ?></b> мм</td>
											</tr>                    
											<tr>
												<td>Тип ворот: <b><?php echo $str_vtype; ?></b></td>
											</tr>
                      <?php
                      if ($vtype_id<>"2") { 
                      ?>
                      <tr>
												<td>Тип панели: <b><?php echo $str_ptype; ?></b></td>
											</tr>
                      <?php
                      }
                      ?>
                      <tr>
												<td>Цвет ворот: <b><?php echo $str_color; ?></b></td>
											</tr>
											<tr>
												<td colspan="2">
													<br />
												</td>
											</tr>
                      <?php
                      if ($str_automatics=="yes") {
                      ?>
											<tr>
												<td><img src="img/g.png" /> Автоматический привод NICE</td>
											</tr>
                      <?php
                      }
                      ?>
                      <?php
                      if ($str_delivery=="yes") {
                      ?>
											<tr>
												<td><img src="img/g.png" /> Доставка и монтаж</td>
											</tr> 
                      <?php
                      }
                      ?>
                      <tr>
												<td>
                          <br />
      										<br />
      										<h3>Cтоимость*: <?php echo $str_sum; ?> €</h3> 
                          <br><br>
                          <span class="small">
                          * Стоимость является приблизительной, согласно предварительно введенных данных клиентом. 
                          Точная стоимость будет определена после вызова замерщика OpenGATE и подсчета всех дополнительных деталей.
                          </span>
                        </td>
											</tr>
										</table>
						
									</td>               
                  
									<td style="padding: 4px; text-align: left" width="240">
                    <br><br>
                    <img src="img/2print.jpg" id="img" width="234" height="147" alt="" />
                  </td>
								</tr>
							</table>
						</form>          
                     
          </div>
        </div>

    
         <div class="clear"></div>
         <br>

        </div> <!-- contentBottom -->
      </div> <!-- content -->

  </body>
  </html>
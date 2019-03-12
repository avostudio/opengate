<?php

$mes = isset($_POST['m']) ? $_POST['m'] : $_GET['m'];
$s_email = isset($_POST['email']) ? $_POST['email'] : $_GET['email'];
$s_phone = isset($_POST['phone']) ? $_POST['phone'] : $_GET['phone'];
$s_message = isset($_POST['message']) ? $_POST['message'] : $_GET['message'];

$page_title = "Электропривод ROAD для откатных ворот в Черновцах: автоматика для ворот Nice Черновцы - OpenGATE";
$page_description = "Характеристики электропривода ROAD. OpenGATE подберет необходимую автоматику для откатных ворот в Черновцах, установка автоматики на откатные ворота. ";
$page_keywords = "распашные ворота автоматика";

$breadcrumb = '
            <a href="catalog.php" title="Каталог автоматики Nice">
              Каталог автоматики
            </a>»
            <a href="1002-otkatnye-vorota.php" title="Распашные ворота">
              Откатные ворота
          	</a>»
            <a href="1202-road.php" title="Электропривод ROAD для распашных ворот">
              Электропривод ROAD
          	</a>';

include_once("header.avtomatika.php");

?>

        <div id="container">        
          <div class="left">
            <div class="groups">
              <ul>
                <li>
                  <a href="http://opengate.com.ua/1001-raspashnye-vorota.php">
                    Распашные ворота
                  </a>
                </li>
                <li>
                  <a href="http://opengate.com.ua/1002-otkatnye-vorota.php">Откатные ворота</a>
                  <ul class="group_open">
                    <li>
                      <a href="http://opengate.com.ua/1201-accessories.php">Аксессуары</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1202-road.php" class="group_active">ROAD</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1203-robo.php">ROBO</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1204-robus.php">ROBUS</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1205-run.php">RUN</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1206-thor.php">THOR</a>
                    </li>
                    <li>
                      <a href="http://opengate.com.ua/1207-tub.php">TUB</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="http://opengate.com.ua/1003-sekcionnye-vorota.php">Секционные ворота</a>
                </li>
                <li>
                  <a href="http://opengate.com.ua/1004-shlagbaumy.php">Шлагбаумы</a>
                </li>
                <li>
                  <a href="http://opengate.com.ua/1501-sistema-upravleniya-opera.php">
                    Система управления автоматикой Opera
                  </a>
                </li>
                <!--
                <li>
                  <a href="http://opengate.com.ua/1005-sistemy-upravleniya.php">Системы управления</a>
                </li>
                -->
              </ul>
            </div> 
                      
          </div>
          
          <div class="catcontent center"> 
            <div class="productlist">
    
            <h1>Электропривод ROAD для откатных ворот в Черновцах</h1>
            
            <div style="float:left; ">
              <img src="store/otkatnye/road1.jpg" /> 
            </div>
            <div class="clear"></div>
            <div style="float:left;">              
            </div>

            <div class="clear"></div>
  
            <h4>Технические характеристики:</h4>
			
            <div class="catalog-item-offers">
            			
      				<table>
      					<thead>
      						<tr><th>&nbsp;</th>
      													<th>RD400KCE</th>
      											</tr></thead>
      					<tbody>
      					
      					<tr><td class="left"><strong>Общие электрические параметры:</strong></td></tr>
      							<tr><td class="model_attributes_name">Питание (В пер.тока, 50 Гц)</td><td>230</td></tr><tr><td class="model_attributes_name">Потребление (А)</td><td>1,1</td></tr><tr><td class="model_attributes_name">Мощность (Вт)</td><td>210</td></tr>					
                    <tr><td class="left"><strong>Рабочие характеристики:</strong></td></tr>		
      							<tr><td class="model_attributes_name">Скорость (м/с)</td><td>0,25</td></tr><tr><td class="model_attributes_name">Усилие (Н)</td><td>400</td></tr><tr><td class="model_attributes_name">Рабочий цикл (циклов/час)</td><td>20</td></tr>							
      					<tr><td class="left"><strong>Общие данные и размеры:</strong></td></tr>		
      							<tr><td class="model_attributes_name">Класс защиты (IP)</td><td>44</td></tr><tr><td class="model_attributes_name">Рабочая температура (°C min/max)</td><td>-20/+50</td></tr><tr><td class="model_attributes_name">Размеры (мм)</td><td>277x195x330 h</td></tr><tr><td class="model_attributes_name">Масса (кг)</td><td>8</td></tr>										
      					</tbody>
      				</table>
      			
      			</div>
      			
            
            <div class="clear"></div>
            <br>
            <h4>Схема монтажа:</h4>
            <br>
            <img src="store/otkatnye/scheme_road.jpg" width="600" height="280" alt="Схема монтажа электропривода откатных ворот ROAD">
            <br>
            <br>
            <h2><a name="q">Задать</a> вопрос / заказать продукцию</h2>
            <?php if ($mes<>"") {
              if ($s_email<>"") {
                $val_email = $s_email;
                $val_phone = $s_phone;
                $val_message = $s_message;
              } else {
                $val_email = "Ваш e-mail";
                $val_phone = "Контактный телефон";
                $val_message = "Вопрос о ROAD: ";
              }
            ?>
            <br>
            <span class="red"><b><?php echo $mes; ?></b></span>
            <br><br>
            <?php
            } else {
            $val_email = "Ваш e-mail";
            $val_phone = "Контактный телефон";
            $val_message = "Вопрос о ROAD: ";
            };
            ?>
            
              <div class="feedBlock">
              
                <form name="feedback" action="send_order.php" method="POST" id="form_id" onsubmit="javascript:return validate('form_id','email');">
                    <input type="hidden" name="return" value="1202-road.php" />
                    <span>
                    <img src="/img/star.gif"> 
                    <input type="text" onblur="if(this.value=='') this.value='Ваш e-mail';" onclick="if(this.value=='Ваш e-mail') this.value='';" value="<?php echo $val_email; ?>" class="inp" size="25" name="email">
                    </span>
                    <br>
                    <span>
                    <img src="/img/star.gif"> 
                    <input type="text" onblur="if(this.value=='') this.value='Контактный телефон';" onclick="if(this.value=='Контактный телефон') this.value='';" value="<?php echo $val_phone; ?>" class="inp" size="25" name="phone">
                    </span>
                    <br>
                    <p><img src="/img/star.gif"> Ваше сообщение</p>
                    
                    <textarea name="message"><?php echo $val_message; ?></textarea>
                    <br>
                    <table border="0" cellspacing="0" cellpadding="3">
                  		<tbody><tr>
                  			<td rowspan="2"><img id="captcha" src="securimage_show.php" alt="CAPTCHA Image"></td>
                  			<td>
                  			&nbsp;</td>
                  		</tr>
                  		<tr>
                  			<td><a href="#" onclick="document.getElementById('captcha').src = 'securimage_show.php?' + Math.random(); return false">
                  			<img border="0" src="img/refresh.gif" width="16" height="16"></a></td>
                  		</tr>
                  	</tbody></table>
                		<p>Введите символы с картинки</p>
                		<span>
                      <input type="text" name="captcha_code" size="30" maxlength="50" value="" class="inputtext">
                		</span>     
                  <p>Поля, помеченные звездочкой, обязательны к заполнению</p>
                  
                  <div class="clear"></div>
                  <input type="submit" value="Отправить сообщение" class="sbm2">
                </form> 
               
             </div> <!-- feedBlock -->
         
         
         
            </div>
          </div>
          <div class="clear"></div>
        </div>  

         <div class="clear"></div>
         <br>

        </div> <!-- contentBottom -->
      </div> <!-- content -->

      <div class="clear"></div>
      
<?php

include_once("footer.php");

?>
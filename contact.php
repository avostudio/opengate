<?php

$page_title = "Контактная информация: телефон и адрес компании OpenGATE";
$page_description = "Контактнные данные компании OpenGATE";
$page_keywords = "контактная информация";
$page_header = "Контакты";

$breadcrumb = '
            <a href="contact.php" title="Контактная информация">
              Контактная информация
            </a>';

include_once("header.general.php");

?>
		  <div class="certContent cat">
			<div class="certContentBlock">
			  <div class="rsidebar_contact">
          <h2>Форма обратной связи</h2>
          <br>
          <div class="feedBlock">
          
            <form name="feedback" action="send.php" method="POST" id="form_id" onsubmit="javascript:return validate('form_id','email');">
                <span>
                <img src="/img/star.gif">&#32;
                <input type="text" onblur="if(this.value=='') this.value='Ваше имя и фамилия';" onclick="if(this.value=='Ваше имя и фамилия') this.value='';" value="Ваше имя и фамилия" class="inp" size="25" name="name">
                </span>
                <br>
                <span>
                <img src="/img/star.gif">&#32;
                <input type="text" onblur="if(this.value=='') this.value='Ваш e-mail';" onclick="if(this.value=='Ваш e-mail') this.value='';" value="Ваш e-mail" class="inp" size="25" name="email">
                </span>
                <br>
                <span>
                <img src="/img/star.gif">&#32;
                <input type="text" onblur="if(this.value=='') this.value='Контактный телефон';" onclick="if(this.value=='Контактный телефон') this.value='';" value="Контактный телефон" class="inp" size="25" name="phone">
                </span>
                <br>
                <p><img src="/img/star.gif">&#32;Ваше сообщение</p>
                
                <textarea name="message"> </textarea>
                <br>
                <table border="0" cellspacing="0" cellpadding="3">
              		<tr>
              			<td rowspan="2"><img id="captcha" src="securimage_show.php" alt="CAPTCHA Image" /></td>
              			<td>
              			&nbsp;</td>
              		</tr>
              		<tr>
              			<td><a href="#" onclick="document.getElementById('captcha').src = 'securimage_show.php?' + Math.random(); return false">
              			<img border="0" src="img/refresh.gif" width="16" height="16"></a></td>
              		</tr>
              	</table>
            		<p>Введите символы с картинки</p>
            		<span>
                  <input type="text" name="captcha_code" size="30" maxlength="50" value="" class="inputtext">
            		</span>     
              <p>Поля, помеченные звездочкой, обязательны к заполнению</p>
              </span>
              <div class="clear"></div>
              <input type="submit" value="Отправить сообщение" class="sbm2">
            </form> 
           
         </div>
        </div>

        <h2>Монтаж-сервис +38 067 374 0100</h2> 
        <br> 
        <div style="width:525px;">
          <p>Компания OpenGATE (ФОП Царь) является авторизированным сервисным центром концерна Alutech в Черновцах и области.</p>
          <p>Мы устанавливаем и производим дальнейшее обслуживание автоматических секционных ворот в Черновцах, по всей Черновицкой обл. и за ее пределами.</p> 
        </div>
        <iframe width="525" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.ua/?ie=UTF8&amp;hq=&amp;hnear=%D0%A7%D0%B5%D1%80%D0%BD%D0%BE%D0%B2%D1%86%D1%8B,+%D0%A7%D0%B5%D1%80%D0%BD%D0%BE%D0%B2%D0%B8%D1%86%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&amp;ll=48.287762,25.96344&amp;spn=0.36962,0.617294&amp;t=m&amp;z=11&amp;output=embed"></iframe>         
				  
			  </div> <!-- certContentBlock -->
			</div> <!-- certContent -->

         <div class="clear"></div>
         <br>

        </div> <!-- contentBottom -->
      </div> <!-- content -->

      <div class="clear"></div>
      
<?php

include_once("footer.php");

?>
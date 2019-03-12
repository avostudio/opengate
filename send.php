<?php

session_start();

include_once 'securimage.php';

$securimage = new Securimage();

$your_name = $_POST["name"];
$your_email = $_POST["email"];
$your_phone = $_POST["phone"];
$message = trim($_POST["message"]);

$page_title = "Контактная информация: телефон и адрес компании OpenGATE";
$page_description = "Контактнные данные компании OpenGATE";
$page_keywords = "контактная информация";

$breadcrumb = '
            <a href="contact.php" title="Контактная информация">
              Контактная информация
            </a>';

include_once("header.general.php");


if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // handle the error accordingly with your other error checking

  // or you can do something really basic like this
  
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
            		<br>
                <span style="color:red; font-weight:bold;">Вы ввели неправильный код. <a href="javascript:history.back(1)" style="text-decoration:none; color:red; font-weight:bold;">Вернуться назад и ввести еще раз.</a></span>
                <br><br>
                <img id="captcha" src="securimage_show.php" alt="CAPTCHA Image" />
            		<p>Введите символы с картинки</p>
            		<span>
            		<img src="/img/star.gif">&#32;
                <input type="text" name="captcha_code" size="30" maxlength="50" value="" class="inputtext">
            		</span>     
              <p>Поля, помеченные звездочкой, обязательны к заполнению</p>
              </span>
              <div class="clear"></div>
              <input type="submit" value="Отправить сообщение" class="sbm2">
            </form> 
           
         </div>
        </div>

			  <h2>Телефон +38 067 374 0100</h2>
        <br>          
				<br>
        <div style="width:525px;">
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

<?php  
  
  die();
}

function unicod($str) {
    $conv=array();
    for($x=128;$x<=143;$x++) $conv[$x+112]=chr(209).chr($x);
    for($x=144;$x<=191;$x++) $conv[$x+48]=chr(208).chr($x);
    $conv[184]=chr(209).chr(145); #ё
    $conv[168]=chr(208).chr(129); #Ё
    $conv[179]=chr(209).chr(150); #і
    $conv[178]=chr(208).chr(134); #І
    $conv[191]=chr(209).chr(151); #ї
    $conv[175]=chr(208).chr(135); #ї
    $conv[186]=chr(209).chr(148); #є
    $conv[170]=chr(208).chr(132); #Є
    $conv[180]=chr(210).chr(145); #ґ
    $conv[165]=chr(210).chr(144); #Ґ
    $conv[184]=chr(209).chr(145); #Ґ
    $ar=str_split($str);
    foreach($ar as $b) if(isset($conv[ord($b)])) $nstr.=$conv[ord($b)]; else $nstr.=$b;
    return $nstr;
}

if ($message=="") {

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
                <span style="color:red; font-weight:bold;">Вы не ввели самого сообщения. <a href="javascript:history.back(1)" style="text-decoration:none; color:red; font-weight:bold;">Вернуться назад.</a></span>
                <br><br>
                <p><img src="/img/star.gif">&#32;Ваше сообщение</p>
                
                <textarea name="message"> </textarea>
                <br>
            	  <br>
                <img id="captcha" src="securimage_show.php" alt="CAPTCHA Image" />
            		<p>Введите символы с картинки</p>
            		<span>
            		<img src="/img/star.gif">&#32;
                <input type="text" name="captcha_code" size="30" maxlength="50" value="" class="inputtext">
            		</span>     
              <p>Поля, помеченные звездочкой, обязательны к заполнению</p>
              </span>
              <div class="clear"></div>
              <input type="submit" value="Отправить сообщение" class="sbm2">
            </form> 
           
         </div>
        </div>

			  <h2>Телефон +38 067 372 2610</h2>
				<br>
        <h2>Монтаж-сервис +38 095 579 4021</h2> 
        <br>          
				<br>
        <div style="width:525px;">
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

<?php
	    die();
} else {

$subject = "сообщение c cайта OpenGATE";
$subject="From ".$your_name ;
$headers= "From: ".$your_email ."\n";
$headers.='Content-type: text/html; charset=utf-8';
$message_body = "
<html>
<head>
 <title>Ваше сообщение принято</title>
</head>
<body>
Имя: ".$your_name."
<br>
<br>
Email: ".$your_email."
<br>
<br>
Phone: ".$your_phone."
<br>
<br>
<br>".$message."
</body>
</html>";
 
// Транслитерация строк. 
function rus2translit($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}

$your_name_trns = rus2translit($your_name);
$your_message_trns = rus2translit($message);

$message_sms = "
 zakaz na saite:
 tel: ".$your_phone."
 imya: ".$your_name_trns."
 soobsh: ".$your_message_trns;

mail("380673722610@sms.kyivstar.net", $subject, $message_sms, $headers);
mail("tsar.opengate@gmail.com", $subject, $message_body, $headers);
mail("avostudio@gmail.com", $subject, $message_body, $headers);

$the_date = date('d.m.Y');
$coded_name = stripslashes(unicod($your_name));
$coded_message = stripslashes(unicod($message));

}
?>

  <div class="certContent cat">
			<div class="certContentBlock">
			  <div class="rsidebar_contact">
          <h2>Форма обратной связи</h2>
          <br>
          <div class="feedBlock">
            <span style="color:red; font-weight:bold;">Ваше сообщение было успешно отправлено!</span></a></span>
            <br>
            <form name="feedback" action="send.php" method="POST" onsubmit="javascript:return validate('form_id','email');">
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
                <br>
                <img id="captcha" src="securimage_show.php" alt="CAPTCHA Image" />
            		<p>Введите символы с картинки</p>
            		<span>
            		<img src="/img/star.gif">&#32;
                <input type="text" name="captcha_code" size="30" maxlength="50" value="" class="inputtext">
            		</span>     
              <p>Поля, помеченные звездочкой, обязательны к заполнению</p>
              </span>
              <div class="clear"></div>
              <input type="submit" value="Отправить сообщение" class="sbm2">
            </form> 
           
         </div>
        </div>

			  <h2>Телефон +38 067 372 2610</h2>
				<br>
        <h2>Монтаж-сервис +38 095 579 4021</h2> 
        <br>          
				<br>
        <div style="width:525px;">
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



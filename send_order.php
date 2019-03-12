<?php

session_start();

include_once 'securimage.php';

$securimage = new Securimage();

$str_return = $_POST["return"];
$your_email = $_POST["email"];
$your_phone = $_POST["phone"];
$message = trim($_POST["message"]);

if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // handle the error accordingly with your other error checking

  // or you can do something really basic like this
  
  $str_message_out = "Вы ввели неправильно защитный код. Введите, пожалуйста, еще раз код.";
   
  header('Location: http://opengate.com.ua/'.$str_return.'?email='.$your_email.'&phone='.$your_phone.'&message='.$message.'&m='.$str_message_out.'#q');  
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

$subject = "сообщение c cайта OpenGATE";
$subject="From ".$your_email ;
$headers= "From: ".$your_email ."\n";
$headers.='Content-type: text/html; charset=utf-8';
$message_body = "
<html>
<head>
 <title>Ваше сообщение принято</title>
</head>
<body>
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

$your_message_trns = rus2translit($message);

$message_sms = "
 zakaz na saite:
 tel: ".$your_phone."
 soobsh: ".$your_message_trns;

mail("380673722610@sms.kyivstar.net", $subject, $message_sms, $headers);
mail("tsar.opengate@gmail.com", $subject, $message_body, $headers);
mail("avostudio@gmail.com", $subject, $message_body, $headers);    

$the_date = date('d.m.Y');
$coded_name = stripslashes(unicod($your_name));
$coded_message = stripslashes(unicod($message));

$str_message_out = "Ваше сообщение успешно отправлено!";
header('Location: http://opengate.com.ua/'.$str_return.'?m='.$str_message_out.'#q');

?>
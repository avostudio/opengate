<?php

$page_title = "Стоимость промышленных ворот Черновцы (калькулятор) узнать цену на промышленные ворота в Черновцах - OpenGATE";
$page_description = "Какова цена промышленных ворот в Черновцах? Калькулятор позволит произвести расчет стоимости промышленных ворот от OpenGATE в режиме онлайн.";
$page_keywords = "Калькулятор, стоимость промышленных ворот";

$breadcrumb = '
            <a href="#" title="Воротные системы">
              Ворота
            </a>»
            <a href="primenenie.garazhnie-vorota.php" title="Гаражные ворота">
              Гаражные ворота
          	</a>»
            <a href="nadezhnost.garazhnie-vorota.php" title="Калькулятор, расчет стоимости промышленных ворот от OpenGATE">
              Калькулятор стоимости
          	</a>';

include_once("header.calculator.prom.php");

?>
        <div class="certContent cat">
          <div class="certContentBlock">
          
<p>
 Калькулятор расчета стоимости ворот позволяет узнать какая <b>цена ворот</b>, необходимых для Вас. 
 Необходимо ввести лишь данные и выбрать нужные опции. Вы можете рассчитать цену на промышленные ворота в Черновцах, 
 а также узнать цену гаражных ворот.
</p>          
          

<script src="js/grid_standard_gfr.js"></script>
<script src="js/grid_classic_gfr.js"></script>
<script src="js/grid_standard_fln.js"></script>
<script src="js/grid_classic_fln.js"></script>
<script src="js/grid_promyshlenye.js"></script>
           
           
<script language="javascript">

var priceResult = 0;
var price = 0;
var priv = "";			

var options = new Array(new Array("2", 10, true, "Изменение цвета под дерево (maple, brown, cherry) 10%"), 
new Array("3", 127, false, "Монтаж,  доставка по России"), 
new Array("4", 5, true, "Низкий подъем (барабан сзади) от 150 до 350 мм"), 
new Array("5", 0, true, "Повышенный подъем от 500 мм"), 
new Array("6", 0, true, "Вертикальный, наклонный подъем (высота проема+500мм)"), 
new Array("7", 412, false, "Калитка встроенная ОБЫЧНАЯ в комплекте с замком, доводчиком и ручками "), 
new Array("8", 115, false, "Ручной цепной привод в комплекте с натяжным роликом"), 
new Array("10", 89, false, "Комплект замка одностороннего для промышленных ворот"), 
new Array("11", 90, false, "Устройство защиты от обрыва троса "), 
new Array("12", 87, false, "Устройство  защиты от разрыва пружины "), 
new Array("14", 64, false, "Окно акриловое прямоугольное 607х202мм"),
new Array("15", 76, false, "Окно акриловое прямоугольное под филенку 452х302мм"), 
new Array("17", 18, false, "задвижка (дополнительная)"), 
new Array("19", 87, false, "панорамное остекление за 1 м.кв. к стоимости ворот по таблице)"));


function Calculate()
						{
 							// убираем сообщение
							document.getElementById("message").innerHTML = "";
 							var widthSearch  = parseInt(document.getElementById("txtWidth").value);
							var heightSearch = parseInt(document.getElementById("txtHeight").value);
              var peremichkaSearch = parseInt(document.getElementById("txtPeremichka").value);
							priceResult = 0;
							price = 0;
							// не укзаны размеры
							if (!widthSearch || !heightSearch)
 							{
								document.getElementById("resultx").innerHTML = priceResult;
								return;
							}
              
              var vType = document.getElementById("drdType").value;
              var panelType = document.getElementById("panelType").value;
              var colType = parseInt(document.getElementById("colorType").value);

              litWMin = 2000;
              litHMin = 2000;
              
              //проверка, чтоб перемычка не была больше за высоту ворот
              
              if (peremichkaSearch > heightSearch) {
                document.getElementById("drdType").options[0].selected=false;
                document.getElementById("drdType").options[1].selected=false;
                document.getElementById("drdType").options[2].selected=true;
                vType = 2;
              }
                           
              // недопустимые размеры
							if (widthSearch > 7000 || heightSearch > 5335 || widthSearch < litWMin || heightSearch < litHMin)
							{
								document.getElementById("message").innerHTML = "Недопустимые размеры. Проверьте введеные данные. Размеры от 2м до 7м ширины, и от 2м до 5м высоты."
 								return; 
 							}  else if (widthSearch > 5000 && heightSearch < 5336) {
                  document.getElementById("drdType").options[0].selected=false;
                  document.getElementById("drdType").options[1].selected=false;
                  document.getElementById("drdType").options[2].selected=true;
                  vType = 2;
              }  else if (heightSearch > 3085 && heightSearch < 5336) {
                  document.getElementById("drdType").options[0].selected=false;
                  document.getElementById("drdType").options[1].selected=false;
                  document.getElementById("drdType").options[2].selected=true;
                  vType = 2;
              } else if (widthSearch > 3500 && heightSearch < 3001 && document.getElementById("drdType").options[0].selected) {
                  document.getElementById("drdType").options[0].selected=false;
                  document.getElementById("drdType").options[1].selected=true;
                  document.getElementById("drdType").options[2].selected=false;
                  vType = 1;                  
              }
              
              if (panelType == 0) {
                   document.getElementById("img2").src = "img/gofr.gif";
                   pType = 0;
                } else if (panelType == 1) {
                   document.getElementById("img2").src = "img/microwave.gif";
                   pType = 0;
                } else if (panelType == 2) {
                   document.getElementById("img2").src = "img/filenka.gif";
                   pType = 1;
                }
							
							// определяем размеры
						
              if (vType == 0 && pType == 0) {
              
              	for (i = 0; i < grid_standard_gfr.length; i++)
   							{
  								var width = grid_standard_gfr[i][0];
  								var height = grid_standard_gfr[i][1];
  								var pr = grid_standard_gfr[i][2];
  								// нашли необходимый размер
  								if (height >= heightSearch && width >= widthSearch)
  								{
  									price = parseInt(pr);
   									priceResult = price;
                    if (price == 0) {
                      document.getElementById("drdType").options[0].selected=false;
                      document.getElementById("drdType").options[1].selected=true;
                      document.getElementById("drdType").options[2].selected=false;
                      vType = 1; 
                    }
                    //document.getElementById("litWMax").innerHTML = "3500";
                    //document.getElementById("litHMax").innerHTML = "3085";
  									break;
  								}
  							}
     
              } if (vType == 1 && pType == 0) {
                
              	for (i = 0; i < grid_classic_gfr.length; i++)
   							{
  								var width = grid_classic_gfr[i][0];
  								var height = grid_classic_gfr[i][1];
  								var pr = grid_classic_gfr[i][2];
  								// нашли необходимый размер
  								if (height >= heightSearch && width >= widthSearch)
  								{
  									price = parseInt(pr);
   									priceResult = price; 
                    //document.getElementById("litWMax").innerHTML = "5000";
                    //document.getElementById("litHMax").innerHTML = "3085";
  									break;
  								}
  							}
                
              } 
              if (vType == 0 && pType == 1) {
                
              	for (i = 0; i < grid_standard_fln.length; i++)
   							{
  								var width = grid_standard_fln[i][0];
  								var height = grid_standard_fln[i][1];
  								var pr = grid_standard_fln[i][2];
  								// нашли необходимый размер
                  
                  if (heightSearch > 2990) {
                    document.getElementById("drdType").options[0].selected=false;
                    document.getElementById("drdType").options[1].selected=true;
                    document.getElementById("drdType").options[2].selected=false;
                    vType = 1;
                    break;
                  }
                  
  								if (height >= heightSearch && width >= widthSearch)
  								{
  									price = parseInt(pr);
   									priceResult = price;
                    if (price == 0) {
                      document.getElementById("drdType").options[0].selected=false;
                      document.getElementById("drdType").options[1].selected=true;
                      document.getElementById("drdType").options[2].selected=false;
                      vType = 1; 
                    }
                    //document.getElementById("litWMax").innerHTML = "3500";
                    //document.getElementById("litHMax").innerHTML = "2990";
  									break;
  								}
  							}
                
              } if (vType == 1 && pType == 1) {
                
              	for (i = 0; i < grid_classic_fln.length; i++)
   							{
  								var width = grid_classic_fln[i][0];
  								var height = grid_classic_fln[i][1];
  								var pr = grid_classic_fln[i][2];
                  
                  if (heightSearch > 3000) {
                      document.getElementById("drdType").options[0].selected=false;
                      document.getElementById("drdType").options[1].selected=false;
                      document.getElementById("drdType").options[2].selected=true;
                      vType = 2; 
                    }
                  
  								// нашли необходимый размер
  								if (height >= heightSearch && width >= widthSearch)
  								{
  									price = parseInt(pr);
   									priceResult = price;
                    //document.getElementById("litWMax").innerHTML = "5000";
                    //document.getElementById("litHMax").innerHTML = "3000";
  									break;
  								}
  							}
                
              } if (vType == 2) {
                
              	for (i = 0; i < grid_promyshlenye.length; i++)
   							{
  								var width = grid_promyshlenye[i][0];
  								var height = grid_promyshlenye[i][1];
  								var pr = grid_promyshlenye[i][2];
                  
  								// нашли необходимый размер
  								if (height >= heightSearch && width >= widthSearch)
  								{
  									price = parseInt(pr);
   									priceResult = price;
                    //document.getElementById("litWMax").innerHTML = "7000";
                    //document.getElementById("litHMax").innerHTML = "5335";
  									break;
  								}
  							}
                
              } 
              
              //  проверяем отображать ли тип панели
              
              if (vType==2) {
                document.getElementById("panelType").disabled = true;
                document.getElementById("img2").src = "img/empty230x100.gif";
              } else {
                document.getElementById("panelType").disabled = false;
              }
                
              // проверяем перемычку
              
              if (vType == 0) {
                if (peremichkaSearch > 135) {
                   priceResult = price+((price/100)*7);
                }              
              } else if (vType == 1) {
                if (pType==0) {
                  if (peremichkaSearch < 210) {
                    priceResult = price+((price/100)*5);
                  } else if (peremichkaSearch > 500) {
                    priceResult = price+((price/100)*7);
                  } 
                } else if (pType == 1) {
                  if (peremichkaSearch < 230) {
                    priceResult = price+((price/100)*5);
                  } else if (peremichkaSearch > 500) {
                    priceResult = price+((price/100)*7);
                  }
                }
              } else if (vType == 2) {
                if (peremichkaSearch < 410) {
                   priceResult = price+((price/100)*5);
                } else if (peremichkaSearch > 900) {
                   priceResult = price+((price/100)*10);
                }              
              }
              
              if (colType == 9 || colType == 10 || colType == 11) {
                priceResult = priceResult+((price/100)*10);                
              } else if (colType == 12) {    
                var price_plus = (heightSearch/1000 * widthSearch/1000)*26;
                priceResult = priceResult+price_plus;                   
              }

              
                          
              // доставка, монтаж
              
              if(document.getElementById("chkDostavka") != null && document.getElementById("chkDostavka").checked) {
                if (vType == 0 || vType == 1) {
                  priceResult += 100;
                } else if (vType == 2) {
                  priceResult += 150;
                } 
              }

							// проверяем опции
							for (i = 0; i < options.length; i++)
							{
								var id = options[i][0];
								if (document.getElementById("chk" + id) != null && document.getElementById("chk" + id).checked)
								{
									var value = parseInt(options[i][1]);
									var isPercent = options[i][2];
									priceResult += isPercent ? (price * value /100) : value;
 								}
 							}

							priv = "";

							var square = heightSearch * widthSearch / 1000000;
							var e = document.getElementById("drdType");
							var type = e.options[e.selectedIndex].value;
							var drd = document.getElementById("drdTypePrivod");

							if(document.getElementById("chkPrivod") != null && document.getElementById("chkPrivod").checked)
							{
								if (square <= 6)
								{						
									priceResult += 195; //SPIN11 KCE
                  document.getElementById("img3").src = "img/nice195.jpg";
								}
								else if (square > 6 && square <= 8.4 )
								{
                  priceResult += 246; // SPIN6031
                  document.getElementById("img3").src = "img/nice246.jpg";
								}
                else if (square > 8.4 && square <= 13.6 )
								{
                  priceResult += 321; // SPIN6041
                  document.getElementById("img3").src = "img/nice321.jpg";
								}
                else if (square > 13.6 && square <= 20 )
								{
                  priceResult += 448; // SO 2000
                  document.getElementById("img3").src = "img/nice448.jpg";
								}
                else if (square > 20 && square <= 35 )
								{
                  priceResult += 490; // SU 2010
                  document.getElementById("img3").src = "img/nice490.jpg";
								}
                else if (square > 35 )
								{
                  priceResult += 500; // ???
                  document.getElementById("img3").src = "img/nice500.jpg";
								}
                
							}

							else
							{
								document.getElementById("img3").src = "img/empty230x100.gif";
							}        
             
              //priceResult = price-((price/100)*10); // -10%
              
							document.getElementById("resultx").innerHTML = Math.ceil(priceResult);
              
              if (colType == 0) {
                document.getElementById("img4").src = "img/ral_white.gif";
              } else if (colType == 1) {
                document.getElementById("img4").src = "img/ral_elephant.gif";
              } else if (colType == 2) {
                document.getElementById("img4").src = "img/ral_purple_red.gif";
              } else if (colType == 3) {
                document.getElementById("img4").src = "img/ral_blue.gif";
              } else if (colType == 4) {
                document.getElementById("img4").src = "img/ral_green.gif";
              } else if (colType == 5) {
                document.getElementById("img4").src = "img/ral_brown.gif";
              } else if (colType == 6) {
                document.getElementById("img4").src = "img/ral_antracit.gif";
              } else if (colType == 8) {
                document.getElementById("img4").src = "img/ral_silver.gif";
              } else if (colType == 9) {
                document.getElementById("img4").src = "img/colors_goldenoak.gif";
              } else if (colType == 10) {
                document.getElementById("img4").src = "img/colors_darkoak.gif";
              } else if (colType == 11) {
                document.getElementById("img4").src = "img/colors_chery.gif";
              } else if (colType == 12) {
                document.getElementById("img4").src = "img/ral_all.gif";
              }  
              
						}

						// переходим на страницу заказа
						
            function Order(button) 
						{

							Calculate();

							if (priceResult == 0 || price == 0)

							{
								document.getElementById("message").innerHTML = "Сумма заказа должна быть больше 0.";
								return false;
							} 
							var url = "print.php?width=" + parseInt(document.getElementById("txtWidth").value) + "&height=" + parseInt(document.getElementById("txtHeight").value) + "&peremichka=" + parseInt(document.getElementById("txtPeremichka").value);
              // проверяем опции  
							for (i = 0; i < options.length; i++)   
							{                                     
								var id = options[i][0];             
								if (document.getElementById("chk" + id) != null && document.getElementById("chk" + id).checked)   
								{              
									var value = options[i][1];      
									var isPercent = options[i][2];   
									var val = isPercent ? (price * value/100) : value; 
									url += "&id_" + id + "=" + Math.ceil(val);    
								}                                            
							} 
              
            var vType = document.getElementById("drdType").value;
            var panelType = document.getElementById("panelType").value;
            var colType = parseInt(document.getElementById("colorType").value); 
            
            if (document.getElementById("chkPrivod") != null && document.getElementById("chkPrivod").checked) {
                var s_automatics = "yes";
            } else {
                var s_automatics = "no";
            } 
            
            if (document.getElementById("chkDostavka") != null && document.getElementById("chkDostavka").checked) {
                var s_delivery = "yes";
            } else {
                var s_delivery = "no";
            }
                                                   
                url += "&sum=" + Math.ceil(priceResult);       
								url += "&v=" + vType;
                url += "&p=" + panelType;  
                url += "&c=" + colType;
                url += "&a=" + s_automatics;
                url += "&d=" + s_delivery;                  
							  
                newWindow = window.open(url, "Print", "width=750,height=495,scrollbars=no,resizable=no"); 
							return false;  
						}                 
						// устанавливает картинку 
						function SetImage(imgFileName)
						{
							document.getElementById("img").src = "img/" + imgFileName;
						}
            function SetPrintImage(imgFileName)
						{
							document.getElementById("pimg").src = "img/" + imgFileName;
						}
            
            </script>       
            
            <span id="message" style="color: red; font-weight: bold; padding-bottom: 10px; display: block"></span>
						<form action="order.php" method="post" id="form">
							<table width="100%">
								<tr valign="top">
									<td>
										<table class="text" width="500">
											<tr onMouseOver="SetImage('width.gif')" onMouseOut="SetImage('vorota.gif')">
												<td width="350px;"><b><a name="print">Ширина</a> ворот (мм) <!--(мм, от <span id="litWMin">2000</span> до <span id="litWMax">3500</span>)</b>--></td>
												<td align="right">
													<input type="text" style="width: 150px;" name="txtWidth" id="txtWidth" value="2000" class="input" onChange="Calculate()" />
												</td>
											</tr>
											<tr onMouseOver="SetImage('height.gif')" onMouseOut="SetImage('vorota.gif')">
												<td width="150"><b>Высота ворот (мм) <!--(мм, от <span id="litHMin">2000</span> до <span id="litHMax">3085</span>)</b>--></td>
												<td align="right">
													<input type="text" style="width: 150px;" name="txtHeight" id="txtHeight" value="2000" class="input" onChange="Calculate()" />
												</td>
											</tr> 
                      <tr onMouseOver="SetImage('peremichka.gif')" onMouseOut="SetImage('vorota.gif')">
												<td><b>Высота перемычки (мм)</b></td>
												<td align="right">
													<input type="text" style="width: 150px;" name="txtPeremichka" id="txtPeremichka" value="100" class="input" onChange="Calculate()" />
												</td>
											</tr>                    
											<tr>
												<td>Тип ворот</td>
												<td align="right">
													<select id="drdType" name="drdType" style="width: 170px;" class="input" onChange="Calculate()">
                            <option value="0">Гаражные STANDARD</option>
                            <option value="1">Гаражные CLASSIC</option>
                            <option value="2" selected>Промышленные</option>
                          </select>
												</td>
											</tr>
                      <tr>
												<td>Тип панели</td>
												<td align="right">
													<select id="panelType" name="panelType" style="width: 170px;" class="input" onChange="Calculate()">
                            <option value="0">S, M, L Гофр</option>
                            <option value="1">Микроволна</option>
                            <option value="2">Филенка</option>
                          </select>
												</td>
											</tr>
                      <tr>
												<td>Цвет</td>
												<td align="right">
													<select id="colorType" name="colorType" style="width: 170px;" class="input" onChange="Calculate()">
                            <option value="0">Белый</option>
                            <option value="1">Слоновая кость</option>
                            <option value="2">Пурпурно красный</option>
                            <option value="3">Синий</option>
                            <option value="4">Зеленый</option>
                            <option value="5">Коричневый</option>
                            <option value="6">Антрацит</option>
                            <option value="8">Серебристый металик</option>
                            <option value="9">Золотой дуб (дерево)</option>
                            <option value="10">Темный дуб (дерево)</option>
                            <option value="11">Вишня (дерево)</option>
                            <option value="12">Любой другой по к. RAL</option>
                          </select>
												</td>
											</tr>
                      <tr>
												<td>Автоматика</td>
												<td align="right"><label for="chkPrivod"></label><input type="checkbox" id="chkPrivod" name="chkPrivod"  OnClick="Calculate()" /></td>
											</tr>
                      <tr>
												<td>Доставка, монтаж</td>
												<td align="right"><label for="chkDostavka"></label><input type="checkbox" id="chkDostavka" name="chkDostavka"  OnClick="Calculate()" /></td>
											</tr>
											<tr>
												<td colspan="2">
													<br />
													<br />
												</td>
											</tr>                              
										</table>
									</td>               
                  <td style="padding: 4px; text-align: center" width="320">                
                    <img src="img/empty230x100.gif" id="img3" width="230" height="100" alt="" />
                    <br><br>
                    <img src="img/empty230x100.gif" id="img2" width="230" height="100" alt="" /> 
                    <br><br>
                    <img src="img/empty230x100.gif" id="img4" width="230" height="100" alt="" />                   
                  </td>
									<td style="padding: 4px; text-align: center" width="320">
										<img src="img/vorota.gif" id="img" width="234" height="147" alt="" />
										<br />
										<br />
										<br />
										<h3>Стоимость: <span id="resultx">0</span> €</h3>
                      <br />
                      <a href="calculator.prom.php#"><img onClick="javascript:Order();" border="0" src="img/printbtn.gif" id="pimg" onMouseOver="SetPrintImage('printbtn_on.gif')" onMouseOut="SetPrintImage('printbtn.gif')" /></a>                            										
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

      <div class="clear"></div> 
      
<?php

include_once("footer.php");

?>  
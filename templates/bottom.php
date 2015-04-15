<?php
	require_once ("config/config.php");
?>
<div class="col-md-2">
		<!--pogoda.by-->
		<!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->
		<div class="widget">
			<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
			<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
			</td></tr>
			<tr><td>
			<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
			<tr><td>
			<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
			</td></tr>
			</table>
			</td></tr>
			<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
			</td></tr>
			</table>
		</div>
		<!--kursy-->
		<div class="widget">
			<table border='0' cellspacing='0' cellpadding='3' style='border-color: #000000; border-width: 1px; border-style: solid;BACKGROUND-COLOR: #FFFFFF;color:#000000;'>
			<tr style='BACKGROUND-COLOR: #FFFFFF;' align='center'>
				<td colspan='3'>
					<span style='text-decoration:none;font-size:9px;font-weight: bold;color:#000000;BACKGROUND-COLOR: #FFFFFF;'>Курс Валют Информер</span>
				</td>
			</tr>
			<tr align='center'>
				<td valign='top' colspan='2' align='left'>
					<a href='http://time-clock.biz/kursy/byr' id='interchange_link_1427482005'><span class='small_1427482005' >Белорусских рублей</span></a>
				</td>
				<td><a href='http://time-clock.biz/kursy/byr'><img src='http://time-clock.biz/img/BYR.gif' width='20' height='14' border='0' alt='Белорусский рубль валюта Белоруссии'></a><tr align='center' title=''><td><img src='http://time-clock.biz/img/RUB.gif' width='20' height='14' border='0' alt=''></td><td class='norm_1427482005'>(RUB)</td><td class='txt_1427482005'><b id='insert_rate_RUB_1427482005'>//-//</b></td></tr><tr align='center' title=''><td><img src='http://time-clock.biz/img/UAH.gif' width='20' height='14' border='0' alt=''></td><td class='norm_1427482005'>(UAH)</td><td class='txt_1427482005'><b id='insert_rate_UAH_1427482005'>//-//</b></td></tr><tr align='center' title=''><td><img src='http://time-clock.biz/img/EUR.gif' width='20' height='14' border='0' alt=''></td><td class='norm_1427482005'>(EUR)</td><td class='txt_1427482005'><b id='insert_rate_EUR_1427482005'>//-//</b></td></tr><tr align='center' title=''><td><img src='http://time-clock.biz/img/CNY.gif' width='20' height='14' border='0' alt=''></td><td class='norm_1427482005'>(CNY)</td><td class='txt_1427482005'><b id='insert_rate_CNY_1427482005'>//-//</b></td></tr><tr align='center' title=''><td><img src='http://time-clock.biz/img/USD.gif' width='20' height='14' border='0' alt=''></td><td class='norm_1427482005'>(USD)</td><td class='txt_1427482005'><b id='insert_rate_USD_1427482005'>//-//</b></td></tr></td>
			</tr>
			<tr align='center'>
				<td colspan='3'>
					<span id='rate_echo_kurs_insert_html_1427482005'></span>
					<script language='JavaScript' src='http://fast.time-clock.biz/script.php?go=get_informer&id=158237'>
			</script>
				</td>
			</tr>
			</table>
		</div>
	</div>
</div>
<br clear="both">
<footer>
	<a href="mailto:a_sidorik@mail.ru">&copy; a_sidorik<span>@</span>mail.ru</a>
</footer>

</body>
</html>
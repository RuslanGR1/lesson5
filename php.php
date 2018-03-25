<?php
	function main_function(string $str) { 
		if(preg_match('/[\S]{10,}/', $str))
			if(!preg_match('/((\d{4,})|([a-z]{4,})|([A-Z]{4,})|([%$#_*]{4,}))/', $str))
				if(preg_match('/(?<=[0-9]).*?(?=[0-9])/', $str) and
					preg_match('/(?<=[a-z]).*?(?=[a-z])/', $str) and
					preg_match('/(?<=[A-Z]).*?(?=[A-Z])/', $str) and
					preg_match('/(?<=[%$#_*]).*?(?=[%$#_*])/', $str))
						{ echo 'Сильный пароль'; exit(0); }
				else echo 'В пароле содержится менее двух спец. символов.'; 
			else echo 'Пароль содержит более трех символов одной группы подряд.'; 
		else echo 'Минимальная длина пароля 10 символов.';
		echo '<br/>';
		include("index.html");
	}
	if(isset($_POST['_area']))
		main_function($_POST['_area']);
	else include("index.html");
?>
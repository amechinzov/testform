
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
</head>
<body>
<style>
    .main-wrapper{
        text-align: center;
    }
    #map{
        width: 500px;
        height: 500px;
        margin: 15px auto;
    }
    input{
        display: block;
        margin: 15px auto;
        padding: 5px;
        width: 500px;
    }
</style>
<div class="main-wrapper">
	<h1>form</h1>
	<form action="#">
		
		<label for="name">Имя:</label><input id="name" name="name" placeholder="Введите имя" type="text">
		<label for="phone">Телефон (обязательное):</label><input id="phone" name="phone" placeholder="Введите телефон (обязательное)" required type="tel">
		<label for="address">Адрес (обязательное):</label><input id="address" name="address" placeholder="Введите адрес (обязательное)" required type="text">
		<input type="hidden" name="address2" id="address2">
		<div id="submit">Отправить</div>
		<div id="map"></div>
	</form>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=953afa9d-f992-4ee2-b032-9d71213aae0c" type="text/javascript"></script>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/imask/dist/imask.min.js"></script>
<script src="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="/js/map.js"></script>
<script src="/js/script.js"></script>
<script src="/js/mask.js"></script>
</body>
</html>
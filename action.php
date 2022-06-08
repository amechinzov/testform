<?php
function validate ($type, $elem){
	switch ($type){
		case 'name':
			if ($elem != ''){
				if (strlen($elem) > 25 || !preg_match("/[a-zA-Zа-яА-Я\-]+/", $elem)){
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}
		case 'phone':
			$digits = str_replace(array('(',')','-','+'), '', $elem);
			if (preg_match('/[0-9]{10,11}/', $digits)){
				return true;
			}else{
				return false;
			}
		default:
			return true;
	}
}

$response = array();
$result = array();
$status = true;

foreach ($_REQUEST as $key => $value){
	$response[$key]['msg'] = 'Все ок!';
	$response[$key]['status'] = 2;
	
	if ($value == '' && $key !== 'name'){
		if ($key == 'address_map'){
			$response[$key]['msg'] = 'Выберите метку на карте';
		} else {
			$response[$key]['msg'] = 'Заполните поле ' . $key;
		}
		$response[$key]['status'] = 0;
		$status = false;
	}
	
	if (!validate($key,$value)){
		$response[$key]['msg'] = 'Проверьте правильность заполнения поля '.$key;
		$response[$key]['status'] = 1;
		$status = false;
	}
	
	if ($status){
		$result[$key] = addslashes($value);
	}
}

if ($status){
	$result['IP'] = $_SERVER['REMOTE_ADDR'];
	file_put_contents('logform.txt',print_r($result,true),FILE_APPEND);
}

print_r(json_encode($response));
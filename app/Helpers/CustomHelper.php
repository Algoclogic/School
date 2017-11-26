<?php

/*
 * These are custom helpers. You can call them anywhere. 
*/
function divisions($key=null){
	
	$divisions=[
		'1' => 'jammu',
		'2' => 'kashmir',
		'3' => 'leh'
	];

	if(!empty($key)){
		return $divisions[$key];
	}else{
		return $divisions;
	}
}

function districtList($key){
	
	$one=[
		'10' => 'doda',
		'12' => 'jammu',
		'13' => 'kathua',
		'14' => 'kishtwar',
		'15' => 'poonch',
		'16' => 'rajouri',
		'17' => 'ramban',
		'18' => 'reasi',
		'19' => 'samba',
		'11' => 'udhampur',
	];

	$two=[
		'20' => 'anantnag',
		'21' => 'bandipora',
		'22' => 'baramulla',
		'23' => 'budgam',
		'24' => 'ganderbal',
		'25' => 'kulgam',
		'26' => 'kupwara',
		'27' => 'pulwama',
		'28' => 'shopian',
		'29' => 'srinagar',
	];

	$three=[
		'30' => 'kargil',
		'31' => 'bandipora',
	];

	if(!empty($key)){

		switch ($key) {
			case '1':
				return $one;
				break;
			case '2':
				return $two;
				break;
			case '3':
				return $three;
				break;	
		}
	}
}

function jammuDistricts($key=null){
	
	$jammuDistricts=[
		'doda' => 'doda',
		'jammu' => 'jammu',
		'kathua' => 'kathua',
		'kishtwar' => 'kishtwar',
		'poonch' => 'poonch',
		'rajouri' => 'rajouri',
		'ramban' => 'ramban',
		'reasi' => 'reasi',
		'samba' => 'samba',
		'udhampur' => 'udhampur',
	];

	if(!empty('_'.$key)){
		return $jammuDistricts[$key];
	}else{
		return $jammuDistricts;
	}
}

function kashmirDistricts($key=null){
	
	$kashmirDistricts=[
		'anantnag' => 'anantnag',
		'bandipora' => 'bandipora',
		'baramulla' => 'baramulla',
		'budgam' => 'budgam',
		'ganderbal' => 'ganderbal',
		'kulgam' => 'kulgam',
		'kupwara' => 'kupwara',
		'pulwama' => 'pulwama',
		'shopian' => 'shopian',
		'srinagar' => 'srinagar',
	];

	if(!empty($key)){
		return $kashmirDistricts[$key];
	}else{
		return $kashmirDistricts;
	}
}

function ladakhDistricts($key=null){
	
	$ladakhDistricts=[
		'kargil' => 'kargil',
		'leh' => 'bandipora',
	];

	if(!empty($key)){
		return $ladakhDistricts[$key];
	}else{
		return $ladakhDistricts;
	}
}


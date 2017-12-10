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

function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}


<?php
function sezar($text) {
$text = trim($text);
$search = array
(
	'!',
	' ',
	'^',
	'#',
	'$',
	'%',
	'½',
	'&',
	'{',
	'/',
	'[',
	'(',
	')',
	']',
	'=',
	'}',
	'?',
	'é',
	'@',
	'q',
	'w',
	'e',
	'r',
	't',
	'y',
	'u',
	'ı',
	'o',
	'p',
	'ğ',
	'ü',
	';',
	'i',
	'ş',
	'l',
	'k',
	'j',
	'h',
	'g',
	'f',
	'd',
	's',
	'a',
	'>',
	'<',
	'|',
	'z',
	'x',
	'c',
	'v',
	'b',
	'n',
	'm',
	'ö',
	'ç',
	'.',
	':',
	'æ',
	'€',
	'ß',
	'0',
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'9'
);
$replace = array
(
	'0',
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'9',
	'!',
	' ',
	'^',
	'#',
	'$',
	'%',
	'½',
	'&',
	'{',
	'/',
	'[',
	'(',
	')',
	']',
	'=',
	'}',
	'?',
	'é',
	'@',
	'q',
	'w',
	'e',
	'r',
	't',
	'y',
	'u',
	'ı',
	'o',
	'p',
	'ğ',
	'ü',
	';',
	'i',
	'ş',
	'l',
	'k',
	'j',
	'h',
	'g',
	'f',
	'd',
	's',
	'a',
	'>',
	'<',
	'|',
	'z',
	'x',
	'c',
	'v',
	'b',
	'n',
	'm',
	'ö',
	'ç',
	'.',
	':',
	'æ',
	'€',
	'ß'
);
$new_text = str_replace($search,$replace,$text);
return $new_text;
} 
?>
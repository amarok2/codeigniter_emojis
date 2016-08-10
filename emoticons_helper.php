<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
This helper class is using the unicode emoji icons standards in order to display a large variety of emoticons.
https://github.com/amarok2/codeigniter_emojis/
Made by Nicolas PERE for the community.
*/


function _initialize() {
	// '(shortcut)' => 'xxxxx',
	$emoticons = array(
		";-)" => '1F609',
		"^^" => '1F60A',
		":-)" => '1F60A',
		":)" => '1F60A',
		":D" => '1F604',
		":-D" => '1F604',
		":p" => '1F61C',
		":-p" => '1F61C',
		":*" => '1F618',
		":-*" => '1F618',
		"/!\\" => '26A0',
		
		":-)" => '1F609',
		":)" => '1F609',
		
		":-D" => '1F609',
		":d" => '1F609',
		
		":-O" => '1F609',
		":o" => '1F609',
		
		":-P" => '1F609',
		":p" => '1F609',
		
		";-)" => '1F609',
		";)" => '1F609',
		
		":-(" => '1F609',
		":(" => '1F609',
		
		":-S" => '1F609',
		":s" => '1F609',
		
		":-l" => '1F609',
		":l" => '1F609',
		
		":'(" => '1F609',
		
		":-$" => '1F609',
		":$" => '1F609',
		
		"(H)" => '1F609',
		"(h)" => '1F609',
		
		":-@" => '1F609',
		":@" => '1F609',
		
		"(A)" => '1F609',
		"(a)" => '1F609',
		
		"(6)" => '1F609',
		":-#" => '1F609',
		"8ol" => '1F609',
		"8-l" => '1F609',
		"^o)" => '1F609',
		":-*" => '1F609',
		"+o(" => '1F609',
		":^)" => '1F609',
		"*-)" => '1F609',
		"<:o)" => '1F609',
		"8-)" => '1F609',
		"l-)" => '1F609',
		
		"(c)" => '1F609',
		"(C)" => '1F609',
		
		"(Y)" => '1F609',
		"(y)" => '1F609',
		
		"(N)" => '1F609',
		"(n)" => '1F609',
		
		"(B)" => '1F609',
		"(b)" => '1F609',
		
		"(D)" => '1F609',
		"(d)" => '1F609',
		
		"(L)" => '1F609',
		"(l)" => '1F609',
		
		"(U)" => '1F609',
		"(u)" => '1F609',
		
		"(K)" => '1F609',
		"(k)" => '1F609',
		
		"(G)" => '1F609',
		"(g)" => '1F609',
		
		"(F)" => '1F609',
		"(f)" => '1F609',
		
		"(*)" => '1F609',
		"(sn)" => '1F40C',
		"(co)" => '1F609',
		"(yn)" => '1F609'
	);
	
	
	return $emoticons;
	} // end of _initialize


if ( ! function_exists('parse_emoticons')) {
	/**
	 * Parse Emoticons
	 *
	 * Takes a string as input and swaps any contained emoticons for the actual image
	 *
	 * @param	string	the text to be parsed
	 * @return	string
	 */

	function parse_emoticons($str, $size = '16pt') {
		$emoticons = _initialize();
		$size = ($size) ? 'style="font-size:'.$size.'"' : '';
		foreach ($emoticons as $key => $val) {
			$str = str_replace($key, '<span '.$size.'>&#x'.$val.';</span>', $str);
			}
		return $str;
		}
} // end of parse_emoticons


/* End of file emoticons_helper.php */
/* Location: ./application/helpers/emoticons_helper.php */

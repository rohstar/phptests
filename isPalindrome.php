<?php


/*
A palindrome is a word, phrase, verse, or sentence that reads the same backward or forward. Only the order of English alphabet letters (A-Z and a-z) should be considered, other characters should be ignored. Write a function that returns true if a given sentence is a palindrome; false otherwise.

For example, Palindrome::isPalindrome(‘Noel sees Leon.’) should return true as spaces, period, and case should be ignored resulting with 'noelseesleon' which is a palindrome since it reads same backward and forward.
*/

class Palindrome
{
	public static function isPalindrome($str)
	{
        
		$str_array = str_split(trim($str));
		$cleaned = '';
		foreach($str_array as $letter){
			if(ctype_alpha($letter)){
				$cleaned .= strtolower($letter);		
			}
		} 
		$size = strlen($cleaned);

			$half1 = substr($cleaned, 0, $size/2);
			$half2 = substr($cleaned, $size/2, $size);
			if($half1 == strrev($half2)){ 
				return true; 
			} else {
				return false;
           }
			return false;
		}
	}
// For testing purposes (do not submit uncommented):

echo Palindrome::isPalindrome('Noel sees Leon');


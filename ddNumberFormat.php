<?php
/**
 * ddNumberFormat
 * @version 1.0 (2013-07-11)
 * 
 * @desc Format a number with grouped thousands.
 * 
 * @param $number {float} — The number being formatted. @required
 * @param $thousandsSep {string} — The thousands separator. Default: ' '.
 * 
 * @link http://code.divandesign.biz/modx/ddnumberformat/1.0
 * 
 * @copyright 2013 DivanDesign {@link http://www.DivanDesign.biz }
 */

if (isset($number)){
	$thousandsSep = isset($thousandsSep) ? $thousandsSep : ' ';
	
	return preg_replace('/(\d)(?=(\d{3})+\D|(\d{3})+$)/', '$1'.$thousandsSep, $number);
}
?>
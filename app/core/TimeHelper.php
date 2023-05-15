<?php
namespace app\core;

use IntlDateFormatter;
use DateTimeZone;
use DateTime;
use Exception;

class TimeHelper{
	//the output is gonna be formatted in the local language
	public static function DTOutput($s_datetime){
		//create a datetime object in the timezone of reference for DB data
		$datetime = new DateTime($s_datetime, new DateTimeZone('UTC'));
		global $tz;
		global $lang;
		$fmt = new IntlDateFormatter(
			$lang,
			IntlDateFormatter::MEDIUM,//date format
			IntlDateFormatter::MEDIUM,//time format
			$tz
		);
		return $fmt->format($datetime);
	}

	public static function DTInput($s_datetime){
		//create a datetime object in the local timezone
		try{
			global $tz;
			$datetime = new DateTime($s_datetime, new DateTimeZone($tz));
			//change the timezone to UTC
			$datetime->setTimezone(new DateTimeZone('UTC'));
			//return to a standard string format
			return $datetime->format('Y-m-d H:i:s');
		}catch(Exception $e){
			return '';
		}
	}

	//the output is gonna be formatted in the numeric format
	public static function DTOutBrowser($s_datetime){
		//create a datetime object in the local timezone
		global $tz;
		$datetime = new DateTime($s_datetime, new DateTimeZone('UTC'));
		//change the timezone to UTC
		$datetime->setTimezone(new DateTimeZone($tz));
		//return to a standard string format
		return $datetime->format('Y-m-d H:i:s');
	}

	public static function ServerTimeInput(){
		//create a datetime object in the local timezone
		try{

			$tz = date_default_timezone_get();
			$datetime = new DateTime('', new DateTimeZone($tz));
			//change the timezone to UTC
			$datetime->setTimezone(new DateTimeZone('UTC'));
			//return to a standard string format
			return $datetime->format('Y-m-d H:i:s');
		}catch(Exception $e){
			return '';
		}
	}
}
<?php

namespace App\Custom;

class Method
{

	public static function login_time_calculator($time){

		$time = strtotime($time);
		//return date("Y-m-d h:i:s", $time);
		return date("Y-m-d h:i:s",$time+ 30*60);

		/*$present = date('Y-m-d H:i:s');
		$cuont = date_diff($time, $present);
		return $cuont;*/
	}
}
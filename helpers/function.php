<?php
	// 浏览器友好的变量输出
	if (!function_exists('dump')) {
	    function dump($var){
	    	echo '<pre>';
	       	var_dump($var);
	    	echo '</pre>';
	    	die;
	    }
	}
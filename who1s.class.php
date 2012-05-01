<?php
defined("1DEVS") or die("Access Denied!");

class who1s {
	
	public $hostnames;
	
	public function who1s($whois_servers){
		$this->hostnames = $whois_servers;
	}
	
	public function sanitize_url($url){
		return preg_replace('#^(https?://)?(www.)?#i', '', $url);
	}
	
	public function is_domain($domain){
		return preg_match('#^[a-z0-9]+([-]?[a-z0-9]+)*[\.-]?[a-z0-9]+([-]?[a-z0-9]+)*([\.-]?[a-z]{2,})*(\.[a-z]{2,5})+$#i',$domain);
	}
	
	public function is_hostname($server,$arr){
		$ret = false;
		foreach($arr as $key=>$val){
			$hostname_arr = is_array($val)?$val:$arr;
			in_array($server, $hostname_arr) and $ret = true;
		}
		return $ret;
	}
	
	public function get_tld($domain){
		return @strtolower(array_pop(explode('.',$domain)));
	}
	
	public function valid_tld($tld,$arr){
		return array_key_exists($tld, $arr);
	}
	
	public function connect($hostname,$timeout){
		global $err_no, $err_str;
		return fsockopen($hostname, 43, $err_no, $err_str, $timeout);
	}
	
	public function push($handler, $domain){
		return fwrite($handler, "$domain\r\n");
	}
	
	public function pull($handler){
		$text='';
		while(!feof($handler)){
			$text .= fgets($handler);
		}
		return $text;
	}
	
	public function disconnect($handler){
		fclose($handler);
	}
}
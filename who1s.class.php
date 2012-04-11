<?php
defined("1DEVS") or die("Access Denied!");

class who1s {
	
	public $hostnames = array (
		'com'	=>	'whois.internic.com',
		'net'	=>	'whois.internic.com',
		'org'	=>	'whois.internic.com',
		'ir'	=>	'whois.nic.ir'	// TODO: To be extended...
	);
	
	public function sanitize_url($url){
		return preg_replace('#^(https?://)?(www.)?#i', '', $url);
	}
	
	public function is_domain($domain){
		return preg_match('#^[a-z0-9]+([-]?[a-z0-9]+)*[\.-]?[a-z0-9]+([-]?[a-z0-9]+)*([\.-]?[a-z]{2,})*(\.[a-z]{2,5})+$#i',$domain);
	}
	
	public function is_hostname($server,$arr){
		return in_array($server,$arr);
	}
	
	public function get_tld($domain){
		return strtolower(array_pop(explode('.',$domain)));
	}
	
	public function valid_tld($tld,$arr){
		return array_key_exists($tld, $arr);
	}
	
}
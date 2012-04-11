<?php
define("1DEVS",1);

require_once("who1s.class.php");

$domain = $_GET['url'] or die('Invalid url address');
$server = $_GET['server'] or die('Invalid server address');

$who1s = new who1s;
$hostnames = $who1s->hostnames;

$who1s->is_domain($domain) or die('Invalid url address');
$who1s->is_hostname($server, $hostnames) or die('Invalid server address');

$tld = $who1s->get_tld($domain);
$who1s->valid_tld($tld, $hostnames) or die('Invalid top-level domain address');

$socket = fsockopen($server, 43, $err_no, $err_str, 15) or die("Error #{$err_no}: {$err_str}");
fwrite($socket, "$domain\r\n");

$text = '';
while(!feof($socket)){
	$text .= fgets($socket);
}

echo '<pre>';
echo $text;
fclose($socket);
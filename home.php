<?php
define("1DEVS",1);

require_once("./whois-servers-list/whois-servers-list.php");
require_once("./who1s.class.php");

$domain = $_GET['url'] or die('Invalid url address');
$server = $_GET['server'] or die('Invalid server address');
$err_no=$err_str='';

$who1s = new who1s($WHOIS_SERVERS_LIST);

$domain = $who1s->sanitize_url($domain);
$server = $who1s->sanitize_url($server);

$who1s->is_domain($domain) or die('Invalid url address');
$who1s->is_hostname($server, $who1s->hostnames) or die('Invalid server address');

$tld = $who1s->get_tld($domain);
$who1s->valid_tld($tld, $who1s->hostnames) or die('Invalid top-level domain address');

$socket = $who1s->connect($server, 15) or die("Error #{$err_no}: {$err_str}");
$who1s->push($socket, $domain);

$text = $who1s->pull($socket);

include_once("./template.php");

$who1s->disconnect($socket);
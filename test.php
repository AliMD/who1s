<?php
echo "<pre>";

$ip = gethostbyname("apple.com");		// Returns IPv4 address
echo($ip)."\n";
/*
	17.149.160.49
*/

$ips = gethostbynamel("apple.com");		// Returns an array of IPv4 addresses
print_r($ips)."\n";
/*
	Array
	(
		[0] => 17.149.160.49
		[1] => 17.172.224.47
	)
*/

$dns_rec = dns_get_record("apple.com");	// Returns DNS Resource Records associated with the given hostname.
print_r($dns_rec);
/*
	Array
	(
		[0] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 10
				[target] => mail-in14.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[1] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 10
				[target] => mail-in15.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[2] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 20
				[target] => mail-in21.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[3] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 20
				[target] => mail-in22.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[4] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 20
				[target] => mail-in23.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[5] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 20
				[target] => mail-in24.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[6] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 20
				[target] => mail-in25.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[7] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 100
				[target] => mail-in3.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[8] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 10
				[target] => mail-in11.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[9] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 10
				[target] => mail-in12.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[10] => Array
			(
				[host] => apple.com
				[type] => MX
				[pri] => 10
				[target] => mail-in13.apple.com
				[class] => IN
				[ttl] => 2067
			)
	
		[11] => Array
			(
				[host] => apple.com
				[type] => A
				[ip] => 17.149.160.49
				[class] => IN
				[ttl] => 2463
			)
	
		[12] => Array
			(
				[host] => apple.com
				[type] => A
				[ip] => 17.172.224.47
				[class] => IN
				[ttl] => 2463
			)
	
		[13] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver.euro.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
		[14] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver.asia.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
		[15] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver4.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
		[16] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver2.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
		[17] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
		[18] => Array
			(
				[host] => apple.com
				[type] => NS
				[target] => nserver3.apple.com
				[class] => IN
				[ttl] => 23158
			)
	
	)
*/
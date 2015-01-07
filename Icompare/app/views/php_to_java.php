<?php
$host = "tcp://localhost";
$port = 6789;
$data = "Hallo Anny\n" . PHP_EOL;  //Adding PHP_EOL was the other part of the solution
$errstr = '';
$errno = '';

if ( ($fp = fsockopen($host, $port, $errno, $errstr, 3) ) === FALSE)
	echo "$errstr ($errno)";
else {
	print 'SUCCESS!<br />';
	fwrite($fp, $data);
	while (! feof($fp)) {
		echo fgets($fp, 4096);
	}
	fclose($fp);
	outToClient.writeBytes(capitalizedSentence);
	connectionSocket.close();
}
?>
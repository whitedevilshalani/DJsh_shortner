#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
        echo $echo." --> ";
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo $green."
White_Devil@Devilshalani
Url Shortener\n";
echo $blue."
Author  : DJshalani
Contributer : SpeedX
Github  : http://github.com/DJshalani/
YouTube : https://m.youtube.com/channel/UCnoOQFgTMTB8dtOR2WO81Hw
Version : 2020.3\n";
echo $red."=========================== DJshalani ))=====(@)>".$green."\n";
if(isset($argv[1])) {
        $url=$argv[1];
} else {
        echo "Usage : php shalani.php www.example.com\n";
        die();
}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://bit.do/mod_perl/url-shortener.pl');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "action=shorten&url=".urlencode($url)."&url2=+site2+&url_hash=&url_stats_is_private=0&permasession=1577162546%7C8m90u102n7x0dx0a");

$headers = array();
$headers[] = 'Host: bit.do';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Origin: https://bit.do';
$headers[] = 'Dnt: 1';
$headers[] = 'Connection: close';
$headers[] = 'Referer: https://bit.do/';
$headers[] = 'Cookie: permasession=1577162546|8m90u102n7';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
}
$shurl=getStr2($result,'"url_hash":"','"}');
if(strlen($shurl)<5) {
        echo "Error Occured!!!!";
        } else {
                echo "Link   : ".$url."\n";
                echo "Result : http://bit.do/".$shurl."\n";
                }
echo $red."=========================== DJshalani ))=====(@)>".$green."\n";

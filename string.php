<?php 
$text="1. Ketika suami menikah lagi, dan perempuan berusaha menerima (karena alasan ekonomi atau agama atau alasan apapun), ia akan duduk sendiri di setiap malam dalam gelap kamar saat suaminya tengah mendekap mesra seorang perempuan lain di ranjang lain. Ia akan (mungkin) menangis karena terluka, tapi demi anak-anak ia akan berusaha menerimanya dengan sabar.";
echo strlen($text)."<br/>";
$e=floor(5/2);
echo $e."<br/>";
$i=9;
$i+=$i;
echo $i."<br/>";
$input = "Alien";
echo str_pad($input, 0)."<br/>";                   // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT)."<br/>";  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH)."<br/>";   // produces "__Alien___"
echo str_pad($input, 6 , "___")."<br/>"; 

date_default_timezone_set('Asia/Jakarta');
$date = "09:08 PM";
$newdate = date("H:i", strtotime($date));
echo $newdate."<br>";
$t=time();
echo $t."<br>";
echo date("H:i",$t).'<br>';

echo strtolower($input).'<br>';
echo strtoupper($input).'<br>';
echo ucwords(strtolower($input));
?>
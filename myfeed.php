<?
$url = "http://search.twitter.com/search.atom?q=kebetu+sunu2012+-NonAu3Mandats";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
echo $curl_scraped_page;
?>

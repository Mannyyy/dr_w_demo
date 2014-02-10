<?php

$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match("/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine
|htc|iemobile|iphone|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|
panasonic|philips|phone|playbook|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus
|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i",$useragent))

{
header( 'Location: mobile.html' );
} else {
header( 'Location: desktop.html' );
}
if (preg_match("/(ipad)/i",$useragent))
{
header( 'Location: desktop.html' );
}
?>
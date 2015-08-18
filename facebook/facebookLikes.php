<?php 
$facebook = "http://graph.facebook.com/kathrynjanicek1";
$facebook_likes = json_decode(file_get_contents($facebook))->{'likes'};
 ?>
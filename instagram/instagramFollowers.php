<?php 
$instagram = "https://api.instagram.com/v1/users/11354869/?access_token=11354869.98cb60b.065cccadc50c4019b24bb5a3057c8d54";
$instagram_follows = json_decode(file_get_contents($instagram))->data->counts->followed_by;
global $instagram_follows;
 ?>
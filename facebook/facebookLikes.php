<?php 
$map_url="https://api.facebook.com/method/fql.query?query=select%20%20like_count%20from%20link_stat%20where%20url=%22http://facebook.com/kathrynjanicek1%22";
if (($response_xml_data = file_get_contents($map_url))===false){
    echo "Error fetching XML\n";
} else {
   libxml_use_internal_errors(true);
   $data = simplexml_load_string($response_xml_data);
   if (!$data) {
       echo "Error loading XML\n";
       foreach(libxml_get_errors() as $error) {
           echo "\t", $error->message;
       }
   } else {
      $facebook_likes = $data->link_stat->like_count;
   }
}
 ?>
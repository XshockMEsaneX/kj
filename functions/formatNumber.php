<?php 
function format_number($number) {
	 if($number >= 1000) {
       return round($number/1000, 1) . "k";   // NB: you will want to round this
    }
    else {
        return $number;
    }
}

 ?>
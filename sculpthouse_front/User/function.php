<?php 
function debug($variable){
    echo '<pre>'.print_r($variable,true). '</pre>';
}

function str_random($length){
$alpha = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN7894561230";
return substr( str_shuffle( str_repeat($alpha , $length)),0,$length);

}











































?>
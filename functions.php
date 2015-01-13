<?php

function strlimit($string, $limit, $after='...') {
	if( strlen($string) > $limit ) : return substr($string, 0, strrpos( substr($string, 0, $limit), ' ') ) . $after;
	else : return $string;
	endif;
}


function include_allfiles($folder){
    foreach (glob("{$folder}/*.php") as $filename)
    {
        include("$filename");
    }
}






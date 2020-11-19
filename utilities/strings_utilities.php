<?php
	function endsWith( $string, $suffix ) {
	    $length = strlen( $suffix );
	    if( !$length ) {
	        return true;
	    }
	    return substr( $string, -$length ) === $suffix;
	}
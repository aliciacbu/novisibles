<?php 
function check_doc_mime( $tmpname ) {
	// MIME types: http://filext.com/faq/office_mime_types.php
	$finfo = finfo_open( FILEINFO_MIME_TYPE );
	$mtype = finfo_file( $finfo, $tmpname );
	finfo_close( $finfo );
	if( $mtype == ( "application/vnd.ms-excel" ) ||
		$mtype == ( "application/vnd.ms-office" ) ) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}
?>
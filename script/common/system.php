<?php
/**
 * Site: https://yiiman.ir
 * AuthorName: gholamreza beheshtian
 * AuthorNumber:+989353466620 | +17272282283
 * AuthorCompany: YiiMan
 *
 *
 */

function getFileList( $dir ) {
	// array to hold return value
	$retval = [];

	// add trailing slash if missing
	if ( substr( $dir, - 1 ) != "/" ) {
		$dir .= "/";
	}

	// open pointer to directory and read list of files
	try{

		$d = @dir( $dir );
		if (empty($d))return null;
	}catch (Exception $e){
		return null;
	}
	while ( false !== ( $entry = $d->read() ) ) {
		// skip hidden files
		if ( $entry[0] == "." ) {
			continue;
		}
		if ( is_dir( "{$dir}{$entry}" ) ) {
			$retval[] = [
				'name'    => "{$entry}",
				'type'    => filetype( "{$dir}{$entry}" ),
				'size'    => 0,
				'lastmod' => filemtime( "{$dir}{$entry}" )
			];
		} elseif ( is_readable( "{$dir}{$entry}" ) ) {
			$retval[] = [
				'name'    => "{$entry}",
				'type'    => mime_content_type( "{$dir}{$entry}" ),
				'size'    => filesize( "{$dir}{$entry}" ),
				'lastmod' => filemtime( "{$dir}{$entry}" )
			];
		}
	}
	$d->close();

	return $retval;
}

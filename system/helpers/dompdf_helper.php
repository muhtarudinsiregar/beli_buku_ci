<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function pdf_create($html, $filename='', $stream=TRUE) 
{
	require_once("dompdf/dompdf_config.inc.php");

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	if ($stream) {
		$dompdf->stream($filename.".pdf");
	} else {
		return $dompdf->output();
	}
}



	/* End of file dompdf_helper.php */
/* Location: .//C/wamp/www/beli_buku1/system/helpers/dompdf_helper.php */
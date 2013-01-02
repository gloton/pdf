<?php
require_once("dompdf_config.inc.php");
$html =
'<html><body>'.
'<p>Foo</p>'.
'</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);

$dompdf->render();

// The next call will store the entire PDF as a string in $pdf

$pdf = $dompdf->output();

// You can now write $pdf to disk, store it in a database or stream it
// to the client.

file_put_contents("saved_pdf.pdf", $pdf);

?>
<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf;
$dompdf->loadhtml('HAI NAMA SAYA SYAVIRA APRILIANTI');
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream('report.php');
?>
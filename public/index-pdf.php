<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->WriteHTML('$html_content');
$mpdf->Output();

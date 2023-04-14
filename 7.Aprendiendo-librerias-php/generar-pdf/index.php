<?php
require '../vendor/autoload.php';

use spipu\html2pdf\html2pdf;

$html2pdf = new HTML2PDF();

// Recoger la vista a imprimir
ob_start();
require_once './pdf_para_generar.php';
$html = ob_get_clean();
        
$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');

<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);
ob_clean();

// Redimensionar
$thumb->resize(150, 150);

// Recortar
$thumb->cropFromCenter(100, 50);

// Mostrar y guardar
$thumb->show();
$thumb->save($guardar_en);
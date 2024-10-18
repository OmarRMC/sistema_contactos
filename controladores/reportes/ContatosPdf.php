<?php
// composer require setasign/fpdf
session_start(); 
require_once '../../vendor/autoload.php';
require '../../controladores/Contacto.php';
require '../../modelos/ContactoModel.php';

$ListaContactos = Contacto::listarContactos();

$pdf = new FPDF("P", "mm", [220, 280]);
$pdf->AddPage();

$pdf->SetFont('Arial', 'BU', 16);
$pdf->Cell(0, 7, 'LISTADO DE CONTACTOS', 0, 1, 'C');
$pdf->Ln(3);

# CABECERA DE LA TABLA
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(7, 8, '#', 1, 0, 'C');
$pdf->Cell(42, 8, 'NOMBRE', 1, 0, 'C');
$pdf->Cell(38, 8, 'APELLIDO', 1, 0, 'C');
$pdf->Cell(38, 8, 'TELEFONO', 1, 0, 'C');
$pdf->Cell(50, 8, 'NOTA', 1, 0, 'C');
$pdf->Cell(25, 8, 'ESTADO', 1, 1, 'C');

#impresión de datos 
$pdf->SetFont('Arial', '', 10);

foreach ($ListaContactos as $key => $contacto) {
    $pdf->Cell(7, 8, ($key + 1), 1, 0, 'C');
    $pdf->Cell(42, 8, utf8_decode($contacto['nombre']), 1, 0, 'L');
    $pdf->Cell(38, 8, utf8_decode($contacto['apellido']), 1, 0, 'L');
    $pdf->Cell(38, 8, utf8_decode($contacto['telefono']), 1, 0, 'L');
    $pdf->Cell(50, 8, utf8_decode($contacto['nota']), 1, 0, 'L');
    $pdf->Cell(25, 8, $contacto['estado'], 1, 1, 'C');
}


$pdf->Output();

?>
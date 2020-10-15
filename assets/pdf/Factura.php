<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(0, 5, utf8_decode("Centro de Diseño y Metrologia"), 0, 0, 'C');
        // $this->Image('https://avatars1.githubusercontent.com/u/63875496?s=60&v=4', 270, 0, 25, 25, 'png');
        $this->Ln(15);
    }


    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage('LANDSCAPE', 'A4');
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetTextColor(16, 87, 97);
$pdf->Cell(0, 5, 'Factura N° 193783', 0, 0, 'C');
$pdf->SetDrawColor(61, 174, 233);
$pdf->SetLineWidth(1);
$pdf->line(111, 32, 185, 32);


$pdf->Ln(30);
$pdf->SetTextColor(40, 40, 40);
$pdf->SetFont('Arial', 'B', 6);
$pdf->SetFontSize(10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(30, 6, 'Producto', 0, 0, 'C', 1);
$pdf->Cell(80, 6, 'Cantidad', 0, 0, 'C', 1);
$pdf->Cell(70, 6, 'Precio', 0, 0, 'C', 1);
$pdf->SetDrawColor(61, 174, 233);
$pdf->SetLineWidth(1);
$pdf->line(10, 65, 287, 65);

$pdf->Ln(11);



foreach ($this->model_producto->listar_productos() as $lista) :
    $pdf->SetFont('Arial', '', 6);
    $pdf->SetFillColor(240, 240, 240);
    $pdf->SetFontSize(10);
    $pdf->SetDrawColor(255, 255, 255);
    $pdf->Cell(30, 10, $lista['producto'], 1, 0, 'C', 1);
    $pdf->Cell(80, 10, $lista['cantidad'], 1, 0, 'L', 1);
    $pdf->Cell(70, 10, $lista['precio'], 1, 0, 'C', 1);
endforeach;

//Usamos la función outpout para generar el PDF
$pdf->Output();

//Forma apra descargar directamente sin visualizar 
//$pdf->Output('D', 'Fatura 193783.pdf');

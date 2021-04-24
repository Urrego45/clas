<?php
require('../../assets/librerias/fpdf/fpdf.php');
require('../../Config/conexion.php');
include_once '../../Controller/controllInformes.php';
session_start();


class PDF extends FPDF
{
    

    // Cabecera de página
    function Header(){
        // Arial bold 15
        $this->SetFont('Arial','B',11);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        if($_SESSION['tiempo'] == 1){
            $this->Cell(70,10,'Reporte de insumo dia',0,0,'C');
        }elseif($_SESSION['tiempo'] == 2){
            $this->Cell(70,10,'Reporte de insumo semana',0,0,'C');
        }else{
            $this->Cell(70,10,'Reporte de insumo mes',0,0,'C');
        }
        // Salto de línea
        $this->Ln(20);

        $this->Cell(9, 10, 'Id', 1, 0, 'C', 0);
        $this->Cell(11, 10, 'Proveedor', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Nombre', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Precio', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Vencimiento', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Stock Inicial', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Stock', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Entradas', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'perdidas', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Estado', 1, 1, 'C', 0);

    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
} 


$CNX = conexion::conectar();



if($_SESSION['tiempo'] == 1){

    $query = "SELECT * FROM insumo";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',7);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(11, 10, $row['idProveedor'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['nombre'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['vencimiento'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['stockInicial'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['stock'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['entradas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['perdidas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['estado'], 1, 1, 'C', 0);
    }
    
    $pdf->Output(); 

}elseif ($_SESSION['tiempo'] == 2) {
    $query = "SELECT * FROM insumo";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',7);

    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(11, 10, $row['idProveedor'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['nombre'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['vencimiento'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['stockInicial'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['stock'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['entradas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['perdidas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['estado'], 1, 1, 'C', 0);
    }
    
    $pdf->Output(); 
}else{
    $query = "SELECT * FROM insumo";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',7);

    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(11, 10, $row['idProveedor'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['nombre'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['vencimiento'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['stockInicial'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['stock'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['entradas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['perdidas'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['estado'], 1, 1, 'C', 0);
    }

    $pdf->Output(); 
}








?>

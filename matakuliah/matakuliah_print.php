<?php
require ('../fpdf/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN SEMUA DATA MATAKULIAH', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 6, 'No.', 1, 0);
$pdf->Cell(70, 6, 'Kode Matakuliah', 1, 0);
$pdf->Cell(70, 6, 'Nama Matakuliah', 1, 0);
$pdf->Cell(20, 6, 'SKS', 1, 0);
$pdf->Cell(30, 6, 'Semester', 1, 0);
$pdf->SetFont('Arial', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($conn, "SELECT * FROM matakuliah");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, "", 0, 1);
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(70, 6, $data['kode_matkul'], 1, 0);
    $pdf->Cell(70, 6, $data['nama_matkul'], 1, 0);
    $pdf->Cell(20, 6, $data['sks'], 1, 0);
    $pdf->Cell(30, 6, $data['semester'], 1, 0);
}
$pdf->Output();
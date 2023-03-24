<?php
require("./fpdf/fpdf.php");
class PDF extends FPDF
{
    /* Page header */
    function Header()
    {

        $this->SetFont('Arial', 'B', 15);
        /* Move to the right */
        $this->Cell(40);

        $this->Cell(100, 10, 'APPLIED JOBS ', 1, 0, 'C');
        $this->Ln(20);

    }
    /* Page footer */
    function Footer()
    {
        /* Position at 1.5 cm from bottom */
        $this->SetY(-15);
        /* Arial italic 8 */
        $this->SetFont('Arial', 'I', 8);
        /* Page number */
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

/* Instanciation of inherited class */
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->SetLeftMargin(18);
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell(40, 10, 'Index No', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Job title', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Salary', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Comapny', 1, 1, 'C', true);
session_start();
$id = $_SESSION['sid'];
$count = 0;
$conn = new mysqli("localhost", "root", "", "minor_project");
$query = "SELECT jobdetails.j_title,jobdetails.sal,company.c_name,jobdetails.s_date FROM jobdetails INNER JOIN company ON company.c_id=jobdetails.userid INNER JOIN apply on apply.jobdetail_id=jobdetails.j_id where apply.status=1 and apply.student_id=$id";
$record = $conn->query($query);
while (($row = $record->fetch_array()) == true) {
    $pdf->Cell(40, 10, ++$count, 1, 0, 'C');
    $pdf->Cell(40, 10, $row['j_title'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['sal'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['c_name'], 1, 1, 'C');
}
$pdf->Output();

?>
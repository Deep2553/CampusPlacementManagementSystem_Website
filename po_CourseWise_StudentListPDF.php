<?php
require("./fpdf/fpdf.php");

//$title = $id . "Selected Student List";
class PDF extends FPDF
{
    public $title;
    //public $id;
/* Page header */
    function Header()
    {

        $this->title = $_POST['sd'] . " Selected Student List";

        $this->SetFont('Arial', 'B', 15);
        /* Move to the right */
        $this->Cell(40);

        $this->Cell(100, 10, $this->title, 1, 0, 'C');
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
$pdf->SetLeftMargin(26);
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell(40, 10, 'student name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Degree Name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Company name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Job Title', 1, 1, 'C', true);
$id = $_POST['sd'];
$conn = new mysqli("localhost", "root", "", "minor_project");
$query = "SELECT company.c_name,jobdetails.j_title,jobdetails.j_type,student.s_name,student.s_degname,apply.status FROM jobdetails INNER JOIN company  ON jobdetails.userid=company.c_id INNER JOIN student ON student.s_degname=jobdetails.j_type INNER JOIN apply ON apply.jobdetail_id= jobdetails.j_id WHERE apply.status=2 and student.s_degname='$id' and student.s_id=apply.student_id";
$record = $conn->query($query);
while (($row = $record->fetch_array()) == true) {
    $pdf->Cell(40, 10, $row['s_name'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['s_degname'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['c_name'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['j_title'], 1, 1, 'C');
}
$pdf->Output();

?>
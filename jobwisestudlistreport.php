


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

        $this->Cell(100, 10, 'Applied Students', 1, 0, 'C');
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
$pdf->SetLeftMargin(55);
$pdf->SetFont('Times', '', 12);
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell(20, 10, 'Index No', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Student Name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Student Degree', 1, 1, 'C', true);

session_start();
$id=$_POST['jid'];
$count = 0;
$conn = new mysqli("localhost", "root", "", "minor_project");
$conn = new mysqli("localhost", "root", "", "minor_project");
$query = "SELECT student.s_name,s_degname,jobdetails.j_id, apply.jobdetail_id FROM student INNER JOIN apply  on apply.student_id=student.s_id  INNER JOIN jobdetails on jobdetails.j_id=apply.jobdetail_id where jobdetails.j_id=$id and  apply.status=1";
$record = $conn->query($query);
while (($row = $record->fetch_array()) == true) {
    $pdf->Cell(20, 10, ++$count, 1, 0, 'C');
    $pdf->Cell(30, 10, $row['s_name'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['s_degname'], 1, 1, 'C');
    
}
$pdf->Output();

?>
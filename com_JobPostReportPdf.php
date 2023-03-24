
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

        $this->Cell(100, 10, 'All Post Jobs ', 1, 0, 'C');
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
$pdf->Cell(40, 10, 'Job Title', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Status', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Post Date', 1, 1, 'C', true);
session_start();
$id = $_SESSION['userid'];
$count = 0;
$conn = new mysqli("localhost", "root", "", "minor_project");
$query = "select * from jobdetails where userid=$id";
$record = $conn->query($query);
while (($row = $record->fetch_array()) == true) {
    $pdf->Cell(40, 10, ++$count, 1, 0, 'C');
    $pdf->Cell(40, 10, $row['j_title'], 1, 0, 'C');
    if ($row['joba_status'] == 0)
        $pdf->Cell(40, 10, 'pending', 1, 0,'C');
    else if ($row['joba_status'] == 1)
        $pdf->Cell(40, 10, 'Approve', 1, 0,'C');
    else
        $pdf->Cell(40, 10, 'reject', 1, 0,'C');
    $pdf->Cell(40, 10, $row['p_date'], 1, 1, 'C');
}
$pdf->Output();

?>
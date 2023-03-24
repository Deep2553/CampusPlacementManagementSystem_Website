
<?php
require("./fpdf/fpdf.php");
class PDF extends FPDF
{
/* Page header */
function Header()
{
    
    $this->SetFont('Arial','B',15);
    /* Move to the right */
    $this->Cell(40);
  
    $this->Cell(100,10,'APPROVE COMPANY LIST',1,0,'C');
    $this->Ln(20);
    
}
/* Page footer */
function Footer()
{
    /* Position at 1.5 cm from bottom */
    $this->SetY(-15);
    /* Arial italic 8 */
    $this->SetFont('Arial','I',8);
    /* Page number */
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

/* Instanciation of inherited class */
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// $pdf->SetLeftMargin(18);
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell(20, 10, 'No', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Email', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Person Name', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Person Number', 1, 1, 'C', true);
$count=0;
$conn =mysqli_connect("localhost","root","","minor_project");
$query="select * from company where a_status=1 and status=1";
$records= mysqli_query($conn,$query);
while (($row = $records->fetch_array()) == true) {
    $pdf->Cell(20, 10, ++$count , 1, 0,'C'); 
    $pdf->Cell(40, 10, $row['c_name'], 1, 0,'C');  
    $pdf->Cell(40, 10, $row['c_email'],1, 0,'C');
    $pdf->Cell(40, 10, $row['c_pname'], 1, 0,'C');
    $pdf->Cell(40, 10, $row['c_pcontact'], 1, 1,'C');
}
$pdf->Output();

?>
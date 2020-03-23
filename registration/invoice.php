<?php
require('fpdf.php');

class invoicePDF extends FPDF {

    function header() {

        $this -> Image('../images/ppp-logo-150px.jpg');
        $this -> SetFont('Arial','B',24);
        $this -> Cell(300, -50, 'Invoice', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(287, -68, '1234 Industrial Way', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(300, -95, 'Missoula, MT', 0,0, 'C');
        $this -> Ln(20);
        $this -> SetFont('Arial','B',12);
        $this -> Cell(300, -122, '123-456-7890', 0,0, 'C');

    }

    function headerTable() {
        $this -> Ln(0);

        $this -> SetFont('Arial','B',12);
        $this -> Cell(60, 10, 'First Name', 1,0, 'C');
        $this -> Cell(60, 10, 'Last Name', 1,0, 'C');
        $this -> Cell(60, 10, 'Email Address', 1,0, 'C');
    }

    function inputs($firstName, $lastName, $emailAddress) {
        $this -> Ln(20);

        $this -> SetFont('Arial','B',12);
        $this -> Cell(60, 10, $firstName, 1,0, 'C');
        $this -> Cell(60, 10, $lastName, 1,0, 'C');
        $this -> Cell(60, 10, $emailAddress, 1,0, 'C');
    }

}

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$emailAddress = $_POST["emailAddress"];

$pdf = new invoicePDF();
$pdf->AddPage();
$pdf->headerTable();
$pdf->inputs($firstName, $lastName, $emailAddress);
$pdf->Output();

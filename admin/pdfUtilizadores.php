<?php
session_start();
    include '../include/connection.php';


  if(isset($_SESSION['user'])){
    $first_name = "";
    $last_name = "";
    $idCond = 0;

    // get user's name
    $sql = "SELECT full_name, idCond FROM parcelas WHERE idParcela = " . $_SESSION['user'];
    //para poupar latin
    $row = mysqli_fetch_array(mysqli_query($conn, $sql));

    $full_name = $row['full_name'];
    $idCond = $row['idCond'];
    $name_count = str_word_count($full_name);

    // decide either to split the string or just use it right away
  }
  else
  {
    header("Location: ../login.php"); 
  }
  $_SESSION['idCond'] = $idCond;

    $idCond = $_SESSION['idCond'];
    $idParcela = $_SESSION["user"];
require('../FPDF/fpdf.php');
$x = 0;
$SQL = "SELECT * FROM parcelas WHERE idCond = '$idCond'";
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$run = mysqli_query($conn, $SQL);
  $pdf->Cell(190, 10, "Utilizadores",0,1,"C");

  $pdf->Cell(47.5, 10, "Nome",1,0,"C");
  $pdf->Cell(47.5, 10, "Email",1,0,"C");
  $pdf->Cell(47.5, 10, utf8_decode("Código"),1,0,"C");
  $pdf->Cell(47.5, 10, "Andar",1,1,"C");
  
  $pdf->SetFont('Arial','',12);
while($row = mysqli_fetch_array($run)){
	$pdf->Cell(47.5, 10, $row['full_name'],1,0,"C");
	$pdf->Cell(47.5, 10, $row['email'],1,0,"C");
	$pdf->Cell(47.5, 10, $row['codigo'],1,0,"C");
	$pdf->Cell(47.5, 10, $row["andar"] . " " . $row["organizacao"],1,1,"C");
}
$pdf->Output();
?>
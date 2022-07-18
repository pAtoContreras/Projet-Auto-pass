<?php
ob_clean();
require("fpdf/fpdf.php");
require("models/connexion.php");
if(isset($_SESSION['numero_de_plaque'])){ 
    $immatriculation = ($_SESSION['numero_de_plaque']);
    $consulta = ("SELECT  Vehicule.numero_de_plaque,Vehicule.numero_chassis, Vehicule.kilometrage,Vehicule.km_entretien,Vehicule.date_entretien,Vehicule.details_maintenance, Vehicule.modelo, Vehicule.marque, Vehicule.carburant, Vehicule.date_circulation_debut, Vehicule.maitenance_vehicule
    from Vehicule where numero_de_plaque = '$immatriculation'");
    $resultado = $conn->query($consulta);
    }

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','BU',24);
    // Movernos a la derecha
    $this->Cell(135);
    // cambiar el color
    
    $this->SetDrawColor(123, 36, 28 );
    $this->SetFillColor(123, 36, 28 );
    // Título
    $this->Cell(70,10,'AUTO-PASS',0,1,'L');

    //salto de linea
    $this->Ln(15);

    $this->SetTextColor(0,0,0);
    $this->Cell(120);  
    $this->SetFont('Arial','',9);
    $this->cell(0,2,"Numero d'indentification:",0,1,'L');
    
    $this->Cell(156);  
    $this->SetFont('Arial','b',8);
    $this->cell(0,-1,"54345L44TY",0,0,'L');
    $this->Ln(3);

    $this->SetTextColor(0,0,0);
    $this->Cell(60);  $this->Cell(60);
    $this->SetFont('Arial','',9);
    $this->cell(0,2,"Validite:",0,1,'L');
    
    $this->Cell(145);  
    $this->SetFont('Arial','b',8);
    $this->cell(0,-2,"10/12/2023",0,0,'L');
    $this->Ln(3);

    $this->SetTextColor(0,0,0);
    $this->Cell(120);  
    $this->SetFont('Arial','',9);
    $this->cell(0,2,"Prix (TTC):",0,1,'L');   

    $this->Cell(140);  
    $this->SetFont('Arial','b',8);
    $this->cell(0,-2,"...",0,0,'L');
 

    $this->Ln(7);
    $this->Cell(5);
    $this->Cell(180,0,'',1,1,'R',1);

    $this->Cell(0);
     
     // Salto de línea
     $this->Ln(18);
    
}
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

}

$pdf = new PDF();
$pdf ->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','b',12);
$pdf->Image( "temp/client.png" ,  140 ,  78, 40, 40 ,  "png" );
$pdf->Image( "public/img/fotobody.png" ,  5 ,  2, 40, 35,  "png" );


while($row = $resultado->fetch_assoc()){

     // matriculation
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7,"Numero d'immatriculation:", 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['numero_de_plaque'], 1, 1,'C', 0);
    //plus info qr 
    $pdf->SetFont('Arial','I',7);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(130);
    $pdf->Cell(0, 0,"Pour plus d'info scannes le code QR", 0, 1,'', 0);

    // date debut circulation
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7,"Premiere mise en circulation:", 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['date_circulation_debut'], 1, 1,'C', 0);

    // marque
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7,'Marque:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['marque'], 1, 1,'C', 0);
    // model
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7,'Model:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['modelo'], 1, 1,'C', 0);
    // carburant
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7, 'Carburant:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['carburant'], 1, 1,'C', 0);

    // kilometrage
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7, 'Kilometrage:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['kilometrage'], 1, 1,'C', 0);

    // chassis
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7, 'Numero de chassis:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['numero_chassis'], 1, 1,'C', 0);


  
       // etat vehicule
    $pdf->SetFont('Arial','Bu',10);
    $pdf->SetTextColor(0, 0,0);
    $pdf->Cell(55, 7, 'Etat apparent vehicule:', 0, 0,'', 0);
    $pdf->SetFont('Arial','B',11);
    $pdf->SetTextColor(68,78,78);
    $pdf->Cell(40, 7, $row['maitenance_vehicule'], 1, 0,'C', 0);
    $pdf->Ln(35);
    
  

    //tabla de km y datos 
    $pdf->SetFont('Arial','B',12);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetDrawColor(123, 36, 28 );
    $pdf->SetFillColor(123, 36, 28 );
    

   //aca comienzan las celdas de la cabeza
    $pdf->Cell(26,10,'Garage',0 ,0,'R',0);
    $pdf->Cell(30,10,'Adresse',0 ,0,'R',0);
    $pdf->Cell(40,10,'Km',0 ,0,'R',0);
    $pdf->Cell(40,10,'Date',0,0, 'C', 0,);
   
    $pdf->Cell(36,10,'Type de entretien',0,0, 'C', 0,);
    $pdf->MultiCell(180,0,'',0,0,0);
    //aca comienza las celdas de los datos de km y fecha
    $pdf->SetFont('Arial','I',8);
     //primera linea de la tabla 
    
     $pdf->SetFont('Arial','',10);
     $pdf->Cell(24,22,'Citroen', 0,0,'R',0);
     $pdf->Cell(40,22, '9 Rue Robert Maffre', 0,0,'R',0);
     $pdf->Cell(34,22, $row['km_entretien'], 0,0,'R',0);
     $pdf->Cell(36,22, $row['date_entretien'],0,0, 'C', 0,);
     $pdf->Cell(38,22, $row['details_maintenance'],0,0, 'C', 0,);
     $pdf->MultiCell(0,0,'',0,0,0);
    //fin de la tabla 
    $pdf->MultiCell(190,60,'',1,1,0);
    //tabla de abajo
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(190,30,'Plus de Details', 1,1,'C',0);
}

$pdf->Output();
?>
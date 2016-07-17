<?php

 require('pdf/fpdf.php');
 
$productos = array(
    array( 
        'Producto'  =>  'Impresora',  
        'Precio'    => '200.00',      
        'Stock'     =>  '100'),
    array( 
        'Producto' =>  'Teclado',    
        'Precio' =>  '40.00',       
        'Stock' =>  '100'),
    array( 
        'Producto' =>  'Mouse',      
        'Precio' =>  '20.00',       
        'Stock' =>  '100'),
    array( 
        'Producto' =>  'Monitor',    
        'Precio' =>  '200.00',      
        'Stock' => '100'));
		
	$pdf=new FPDF();                         
	$pdf->AliasNbPages();                 
	$pdf->AddPage();                      
	 
	$pdf->SetFont('Arial','B',6);           
	$pdf->SetXY(5,10);                      
	$pdf->SetFillColor(236,235,236);        
	$pdf->Cell(100,4,'Productos',1,0,'L',1);
	$pdf->Cell(50,4,'Precio',1,0,'R',1);    
	$pdf->Cell(50,4,'Stock',1,0,'R',1);
	
	$pos_y  =   14;
 
		foreach ($productos as $producto)
		{
			$pdf->SetFont('Arial','B',6);
			$pdf->SetXY(5,$pos_y);
			$pdf->SetFillColor(999,999,999);
			$pdf->Cell(100,4,$producto['Producto'],1,0,'L',1);
			$pdf->Cell(50,4, $producto['Precio'],1,0,'R',1);
			$pdf->Cell(50,4, $producto['Stock'],1,0,'R',1);
			$pos_y+=4;
		}
  $pdf->Output('hola_ejemplo.pdf','F'); 
?>
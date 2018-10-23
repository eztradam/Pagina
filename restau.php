<?php
$sopa=$_POST['sopa'];
$plato=$_POST['plato'];
$bebida=$_POST['bebida'];
$postre=$_POST['postre'];

$cants=$_POST['cants'];
$cantf=$_POST['cantf'];
$cantb=$_POST['cantb'];
$cantp=$_POST['cantp'];

$credencial=$_POST['credencial'];


$preciototal=0;

switch ($sopa) {
	case 'codito':
		$precios=40;
		echo "Sopa: Coditos sobre crema de verduras <br>";
		echo "Precio: $". $precios. "<br>";
		echo "Cantidad: ". $cants. "<br>";
		$totals=$precios*$cants;
	break;
		
	case 'crema':
		$precios=45;	 
		echo "Sopa: Crema de champiñones<br>";
		echo "Precio: $". $precios. "<br>";
		echo "Cantidad: ". $cants. "<br>";
		$totals=$precios*$cants;
	break;
			
	case 'azteca':
		$precios=48; 
		echo "Sopa: Sopa azteca <br>";
		echo "Precio: $". $precios. "<br>";
		echo "Cantidad: ". $cants. "<br>";
		$totals=$precios*$cants;
	break;

	case 'arroz':
		$precios=35;	 
		echo "Sopa: Arroz blanco <br>";
		echo "Precio: $". $precios. "<br>";
		echo "Cantidad: ". $cants. "<br>";
		$totals=$precios*$cants;
	break;
	
	default:
		# code...
	break;
}


switch ($plato) {
	case 'filete':
		echo "Plato: Filete miñon gallego <br>";
		$preciof=120;	
		echo "Precio: $". $preciof. "<br>";
		echo "Cantidad: ". $cantf. "<br>";
		$totalf=$preciof*$cantf;
	break;

	case 'cerdo':
		echo "Plato: Machaca con lengua de cerdo <br>";
		$preciof=85;
		echo "Precio: $". $preciof. "<br>";
		echo "Cantidad: ". $cantf. "<br>";
		$totalf=$preciof*$cantf;
	break;
	
	case 'espaldilla':
		echo "Soopa: Salpicon de espaldilla <br>";
		$preciof=100;	
		echo "Precio: $". $preciof. "<br>";
		echo "Cantidad: ". $cantf. "<br>";
		$totalf=$preciof*$cantf;		
	break;
				
	case 'enchilada':
		$preciof=95;
		echo "Plato: Enchiladas de pollo con mole";
		echo "Precio: $". $preciof. "<br>";
		echo "Cantidad: ". $cantf. "<br>";
		$totalf=$preciof*$cantf;
	break;
}


switch ($bebida) {
	case 'refresco':
		$preciob=25;
		echo "Bebida: Refresco <br>";
		echo "Precio: $". $preciob. "<br>";
		echo "Cantidad: ". $cantb. "<br>";
		$totalb=$preciob*$cantb;
	break;
	
	case 'agua':
		$preciob=30;
		echo "Bebida: Agua de sabor <br>";	
		echo "Precio: $". $preciob. "<br>";
		echo "Cantidad: $". $cantb. "<br>";
		$totalb=$preciob*$cantb;	
	break;
	
	case 'clara':
		$preciob=45;
		echo "Bebida: Cerveza clara <br>";
		echo "Precio: $". $preciob. "<br>";
		echo "Cantidad: ". $cantb. "<br>";
		$totalb=$preciob*$cantb;
	break;
				
	case 'oscura':
		$preciob=50;
		echo "Bebida: Cerveza oscura";
		echo "Precio: $". $preciob. "<br>";
		echo "Cantidad: ". $cantb. "<br>";
		$totalb=$preciob*$cantb;
	break;
}

switch ($postre) {
	case 'leche':
		$preciop=28;
		echo "Postre: Arroz con leche <br>";
		echo "Precio: $". $preciop. "<br>";
		echo "Cantidad: ". $cantp. "<br>";
		$totalp=$preciop*$cantp;
	break;
	
	case 'flan':
		$preciop=35;
		echo "Postre: Flan napolitano <br>";
		echo "Precio: $". $preciop. "<br>";	
		echo "Cantidad: ". $cantp. "<br>";
		$totalp=$preciop*$cantp;	
	break;
	
	case 'helado':
		$preciop=30;
		echo "Postre: Helado <br>";
		echo "Precio: $". $preciop. "<br>";
		echo "Cantidad: ". $cantp. "<br>";
		$totalp=$preciop*$cantp;
	break;
				
	case 'pastel':
		$preciop=50;
		echo "Postre: Pastel";
		echo "Precio: $". $preciop. "<br>";
		echo "Cantidad: ". $cantp. "<br>";
		$totalp=$preciop*$cantp;
	break;
}

if($cantp>1 && $postre=='pastel'){
	if($cantp%2==0){
		$totalp=($cantp*$preciop)*0.75;
		echo "Promocion 2x1 y medio <br> total Promo: $".$totalp. "<br>";
	}else{
		$cantp=$cantp-1;
		$totalp=(($cantp*$preciop)*0.75)+$preciop;
		echo "Promocion 2x1 y medio<br> total Promo: $".$totalp. "<br>";
	}
}

$total=$totals+$totalf+$totalb+$totalp;

if($credencial=='no'){
	if($cants==1&&$cantf==1&&$cantb==1&&$cantp==1){
		if($sopa=='crema'&&$plato=='enchilada'&&$bebida=='refresco'&&$postre=='helado'){
			echo "Promocion Total a pagar $100";
		}else{
			echo "Total a pagar $". $total;
		}

	}else{
		echo "Total a pagar $". $total;	
	}		
}else{
	if($cants==1&&$cantf==1&&$cantb==1&&$cantp==1){
		if($sopa=='crema'&&$plato=='enchilada'&&$bebida=='refresco'&&$postre=='helado'){
			echo "Promocion Total a pagar $100";
		}
	}else{
		$descuento=$total*0.05;
		echo "Descuento del 5%<br>Total a pagar $". ($total-$descuento);	
	}	
	
}


?>
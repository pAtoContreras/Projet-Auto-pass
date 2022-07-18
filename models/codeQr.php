<?php 
ob_start();
if(isset($_SESSION['numero_de_plaque'])== 'numero_de_plaque' ) {
 
	//Agregamos la libreria para genera códigos QR
	require "phpqrcode/qrlib.php";    
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'client.png';

        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = '"'.$_SESSION['numero_de_plaque'].'"'; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
        //Mostramos la imagen generada
    header("location: index.php?action=validQr");
	} ?>


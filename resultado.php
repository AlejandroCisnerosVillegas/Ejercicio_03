<?php

	$primeranota = $_POST['CajaNota1'];
	$segundanota = $_POST['CajaNota2'];
	$terceranota = $_POST['CajaNota3'];
	$media = round(($primeranota+$segundanota+$terceranota)/3,0);
	$mensaje = "";
	
	if(($media>=0) && ($media<=5))
	{
		$mensaje = "Muy mal";
	} else if (($media>=6) && ($media <=11))
	{
		$mensaje = "Mal";
	}else if (($media>=12) && ($media <=14))
	{
		$mensaje = "Regular";
	}else if (($media>=15) && ($media <=17))
	{
		$mensaje = "Bueno";
	}else if (($media>=18) && ($media <=20))
	{
		$mensaje = "Excelente";
	}

		echo "La primera nota fue: <b>$primeranota</b><br>";
		echo "La segunda nota fue: <b>$segundanota</b><br>";
		echo "La tercera nota fue: <b>$terceranota</b><br>";
		echo "La media de las tres notas es: <b>$media - $mensaje</b>";

?> 
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com

	// Datos de la base de datos
	$usuario = "claudiop_admin";
	$password = "4E(fY5t5*rUw";
	$servidor = "localhost";
	$basededatos = "claudiop_pagos";
  //clave bd claudiop_bd 4E(fY5t5*rUw , usuario claudiop_admin
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario) or die ("No se ha podido conectar al servidor de Base de datos");

	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.

  ?>

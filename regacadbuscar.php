<!DOCTYPE html>
<html>
<head>
	<title>INGOnline-Registro Académico-Buscar</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="style/style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<table id="tabl_ra">
		<tr>
			<td>
				<div class="icon-bar">
				  <a href="regacadagre1.php"><i class="fa fa-file"></i> Agregar</a> 
				  <a class="active" ><i class="fa fa-search"></i> Buscar</a> 
				  <a href="regacadmodeli.php"><i class="fa fa-edit"></i> Mod/Elim</a> 
				  <a href="regacadimp.php"><i class="fa fa-print"></i> Imprimir</a>
				  <a href="index2.html"><i class="fa fa-close "></i> Salir</a> 
				</div>
			</td>
			<td>
				<div>
					<img src="images/img_hd_regacad.jpg" border="1" alt="INGOnline" width=93% height=150px>	
				</div></td>
		</tr>
		<tr>
		<td>
		</td>
		<th>
		<div class="divDat">
		<form>
 			<fieldset>
 				<legend>Buscar</legend> 				
 				<table>
 					<tr>
 						<td>
 						<input type="radio" name="buscar" value="nie" checked>NIE
						<input type="radio" name="buscar" value="ape">Apellidos
						<input type="radio" name="buscar" value="nom">Nombres<br><br>
						<input a type="text" maxlength="55" size="55">
					</td>
 						<td>
 					<button class="button" onclick="location.href='buscar.php'"><i class="fa fa-search"></i> Iniciar búsqueda</button>
 						</td> 
 					</tr>							
  				</table>		
  				<br>
 			</fieldset>
 			<br><br>
 			<fieldset>
 				<legend>Resultados</legend> 				
 				<a href="imp_hoja_datos.php">Imprimir hoja de datos</a>
 				<a href="ver_hoja_datos.php">Ver hoja de datos</a>
  				<br>
 			</fieldset>
		</form	
		</div>
		</th>
		</tr>	
	</table>
</body>
</html>
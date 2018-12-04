<!DOCTYPE html>
<html>
<head>
	<title>INGOnline-Registro Académico-Imprimir</title>
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
				  <a href="regacadbuscar.php"><i class="fa fa-search"></i> Buscar</a> 
				  <a href="regacadmodeli.php"><i class="fa fa-edit"></i> Mod/Elim</a> 
				  <a class="active"><i class="fa fa-print"></i> Imprimir</a>
				  <a href="index2.html"><i class="fa fa-close "></i> Salir</a> 
				</div>
			</td>
			<td><div>
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
 				<legend>Buscar para Imprimir</legend> 				
 				<table>
 					<tr>
 						<td>Bachillerato:</td>
					<td>
						<select name="bach"> 						
  						<option value="tecnico">Técnico</option>
  						<option value="general">General</option>	
						</select>
					</td>
					<td>Opción</td>
					<td>
						<select name="opci"> 						
  						<option value="contable">Contable</option>
  						<option value="dessoft">Desarrollo de Software</option>
  						<option value="mecau">Mecánica automotriz</option>
  						<option value="logya">Logística y aduana</option>
  						<option value="turis">Turismo</option>
  						<option value="agrop">Agropecuario</option>	
  						<option value="dinfo">Dip. informática</option>
  						<option value="dingl">Dip. inglés</option>	
						</select>
					</td>
					<td>Sección:</td>
					<td><select name="secc"> 						
  						<option value="a">"A"</option>
  						<option value="b">"B"</option>	
						</select></td>
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
 			    <a href="imp_list.php">Imprimir listado,</a>
 				<a href="ver_list.php">Ver Listado</a>
  				<br>
 			</fieldset>


		</form	
	</div>
	</th>
</tr>
<tr>
	</th>
<tr>
</table>
</body>
</html>
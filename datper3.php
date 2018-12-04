<!DOCTYPE html>
<html>
<head>
	<title>INGOnline-Ingreso de datos</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<center>
	<h2>Pre Inscripción - Matrícula 2019</h2>
<div class="divNav">
<ul>
  <li><a href="datper1.php">Datos Personales</a></li>
  <li><a href="datper2.php">Datos de Residencia</a></li>
  <li><a class="active" href="datper3.php">Datos Familiares</a></li>
  <li><a href="datper4.php">Otros</a></li>
</ul>
</div>
<div class="divDat">
<form>
 			<fieldset>
 				<legend>Datos del Padre</legend> 				
 				<table>
 					<tr>
 						<td>Nombres: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 					</tr>
 					<tr>
 						<td>Primer Apellido </td>
 						<td><input type="text" maxlength="25" size="25"></td>
 						<td>Segundo Apellido: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>
 					<tr>
 						<td>DUI: </td>
 						<td><input type="text" maxlength="10" size="10"></td>
 						<td>Teléfono: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>

 						<td>Profesión: </td>
 						<td><input a type="text" maxlength="20" size="20"></td> 
 						<td>Lugar de trabajo: </td>
 						<td><input a type="text" maxlength="30" size="30"></td> 
						</td>
					<tr>
						<td>Dirección: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 						<td><input type="checkbox" name="responsables" value="res"> Responsable
 						</td>
 						</tr> 							  				
  				</table>		
  				<br>
 			</fieldset>
 			<br><br>
<fieldset>
 				<legend>Datos de la Madre</legend> 				
 				<table>
 					<tr>
 						<td>Nombres: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 					</tr>
 					<tr>
 						<td>Primer Apellido </td>
 						<td><input type="text" maxlength="25" size="25"></td>
 						<td>Segundo Apellido: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>
 					<tr>
 						<td>DUI: </td>
 						<td><input type="text" maxlength="10" size="10"></td>
 						<td>Teléfono: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>

 						<td>Profesión: </td>
 						<td><input a type="text" maxlength="20" size="20"></td> 
 						<td>Lugar de trabajo: </td>
 						<td><input a type="text" maxlength="30" size="30"></td> 
						</td>
					<tr>
						<td>Dirección: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 						<td><input type="checkbox" name="responsables" value="res"> Responsable
 						</td>
 						</tr> 							  				
  				</table>		
  				<br>
 			</fieldset>
 			<br><br>
<fieldset>
 				<legend>Datos del/la Responsable</legend> 				
 				<table>
 					<tr>
 						<td>Nombres: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 					</tr>
 					<tr>
 						<td>Primer Apellido </td>
 						<td><input type="text" maxlength="25" size="25"></td>
 						<td>Segundo Apellido: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>
 					<tr>
 						<td>DUI: </td>
 						<td><input type="text" maxlength="10" size="10"></td>
 						<td>Teléfono: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>

 						<td>Profesión: </td>
 						<td><input a type="text" maxlength="20" size="20"></td> 
 						<td>Lugar de trabajo: </td>
 						<td><input a type="text" maxlength="30" size="30"></td> 
						</td>
					<tr>
						<td>Dirección: </td>
 						<td colspan="2"><input a type="text" maxlength="50" size="50"></td> 
 						</td>
 						</tr> 							  				
  				</table>		
  				<br>
 			</fieldset>



	</form></th>
		<button class="button" onclick="location.href='index2.html'">Salir sin guardar</button> 
		<button class="button" onclick="location.href='datper4.php'">Guardar y continuar</button> 




</center>


</body>
</html>
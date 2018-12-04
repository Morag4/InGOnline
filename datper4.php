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
  <li><a href="datper3.php">Datos Familiares</a></li>
  <li><a class="active" href="datper4.php">Otros</a></li>
</ul>
</div>


<div class="divDat">
<form>
 			<fieldset>
 				<legend>Datos del Padre</legend> 				
 				<table>
 					<tr>
 						<td>Nº de miembros de la familia: </td>
 						<td><input a type="text" maxlength="2" size="2"></td> 
 						<td>Trabaja</td>
 						<td><input type="radio" name="trabaja" value="si" > Si
						   <input type="radio" name="trabaja" value="no"checked> No 							
 						</td> 					
 					</tr>
 					<tr>
 						<td>Oficio que desempeña: </td>
 						<td><input type="text" maxlength="10" size="10"></td>
 						<td>Tiene hijos</td>
 						<td><input type="radio" name="thijos" value="si" > Si
						   <input type="radio" name="thijos" value="no"checked> No 							
 						</td> 					
 						<tr>
 						<td>Con quien vive: </td>
 						<td><select name="quienvive"> 						
  						<option value="pym">Padre y Madre</option>
  						<option value="sma">Solo Madre</option>
  						<option value="spa">Solo Padre</option>
  						<option value="par">Pariente</option>
  						<option value="prt">Particular</option>
              <option value="sol">Solo</option>
						</select>
 						</td>  						
 					</tr>
 						</td> 					
 						<tr>
 						<td>De quien depende económicamente: </td>
 						<td><select name="depeco"> 						
  						<option value="dpym">Padre y Madre</option>
  						<option value="dsma">Solo Madre</option>
  						<option value="dspa">Solo Padre</option>
  						<option value="dpar">Pariente</option>
  						<option value="daut">Autosostiene</option>
  						<option value="dprt">Particular</option>
						</select>
 						</td>  						
 					</tr>						  				
  				</table>		
  				<br>
 			</fieldset>
 			<br><br>
<fieldset>
 				<legend>Estado de Salud</legend> 				
 				<table>
 					<tr>
 						<td>Enfermedades o alergías que padece: </td>
 						<td><input a type="text" maxlength="90" size="90"></td> 
 					</tr>
 					<tr>
 						<td>Medicamentos prescritos permanentemente </td>
 						<td><input type="text" maxlength="90" size="90"></td> 						
 					</tr>
 					<tr>
 						<td>Medicamentos a los que es alérgico/a: </td>
 						<td><input type="text" maxlength="90" size="90"></td> 						
 					</tr>
 						<td>En caso de emergencia llamar a:</td>
 						<td><input a type="text" maxlength="90" size="90"></td>  						
					<tr>
						<td>Teléfono en caso de emergencias</td>
 						<td><input a type="text" maxlength="9" size="9"></td>  						
 						</td>
 						</tr> 							  				
  				</table>		
  				<br>
 			</fieldset>
 			<br><br>
	</form></th>
		<button class="button" onclick="location.href='index2.html'">Salir sin guardar</button> 
		<button class="button" onclick="location.href='finreg.html'">Guardar y Finalizar</button> 

</center>


</body>
</html>
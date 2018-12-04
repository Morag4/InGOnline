<!DOCTYPE html>
<html>
<head>
	<title>INGOnline-Ingreso de datos</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
	<h2>Pre Inscripción - Matrícula 2019</h2>
<div class="divNav">
<ul>
  <li><a href="datper1.php">Datos Personales</a></li>
  <li><a class="active" href="datper2.php">Datos de Residencia</a></li>
  <li><a href="datper3.php">Datos Familiares</a></li>
  <li><a href="datper4.php">Otros</a></li>
</ul>
</div>
<div class="divDat">
<form>
 			<fieldset>
 				<legend>Datos de Residencia</legend> 				
 				<table>
 					<tr>
 						<td>Dirección: </td>
 						<td><input a type="text" maxlength="45" size="45"></td> 
 					</tr>
 					
 					<tr>
 						<td>Departamento: </td>
 						<td><select name="dept"> 						
  						<option value="mor">Morazán</option>
  						<option value="smiguel">San Miguel</option>
  						<option value="usulu">Usulután</option>
  						<option value="launion">La Unión</option>
						</select>
 						</td> 
 					</tr>
 					<tr>
 						<td>Municipio: </td>
 						<td><select name="mun">
  						<option value="sfg">San Francisco Gotera</option>
  						<option value="sc">San Carlos</option>
  						<option value="os">Osicala</option>
  						<option value="del">Delicias de Concepción</option>
  						<option value="cap">Cacaopera</option>
  						<option value="lolo">Lolotiquillo</option>
  						<option value="yolo">Yoloaiquin</option>
  						<option value="ss">San Simón</option>
						</select>
 						</td> 				
 						<td>Teléfono: </td>
 						<td><input a type="text" maxlength="9" size="9"></td> 
 					</tr>
 					<tr><td>Celular: </td>
 						<td><input a type="text" maxlength="9" size="9"></td> 
						</td>
						<td>E-Mail: </td>
 						<td><input a type="text" maxlength="25" size="25"></td> 
 						</tr>	  				
  				</table>		
  				<br>
 			</fieldset>
		</form></th>
		<button class="button" onclick="location.href='index2.html'"><i class="fa fa-close"> </i> Salir sin guardar</button> 
		<button class="button" onclick="location.href='datper3.php'"><i class="fa fa-save"></i> Guardar y continuar</button> 
</center>


</body>
</html>
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
  <li><a class="active" href="datper1.php">Datos Personales</a></li>
  <li><a href="datper2.php">Datos de Residencia</a></li>
  <li><a href="datper3.php">Datos Familiares</a></li>
  <li><a href="datper4.php">Otros</a></li>
</ul>
</div>
<div class="divDat">
<form>
 			<fieldset>
 				<legend>Datos Personales</legend> 				
 				<table>
 					<tr>
 						<td>Nombres: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>
 					
 					<tr>
 						<td>Primer Apellido </td>
 						<td><input type="text" maxlength="25" size="25"></td>
 					</tr>
 					<tr>
 						<td>Segundo Apellido: </td>
 						<td><input a type="text" maxlength="25" size="25" align="left"></td> 
 					</tr>
 					<tr>
 						<td>Fecha de Nacimiento </td>
 						<td><input type="date" ></td>
 						<td>Edad:</td>
 						<td><input a type="text" maxlength="2" size="2"></td>
 					</tr>
          <tr>
            <td>Bachillerato:</td>
          <td>
            <select name="bach">            
              <option value="tecnico">Técnico</option>
              <option value="general">General</option>  
            </select>
          </td>
          <td>Opción:</td>
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
          
          </tr>
 					<tr>
 						<td>NIE: </td>
 						<td><input a type="text" maxlength="10" size="10"></td> 
 					</tr>
 					<tr>
 						<td>Centro Escolar de Procedencia: </td>
 						<td><input a type="text" maxlength="40" size="40"></td> 
 					</tr>
 					<tr>
 						<td>Género </td>
 						<td><select name="sexo">
  						<option value="Femenino">Femenino</option>
  						<option value="Masculino">Masculino</option>
						</select>
 						</td> 
 					</tr>
 					<tr>
 						<td>Estado Civil: </td>
 						<td><select name="estadocivil">
  						<option value="Solt">Soltero/a</option>
  						<option value="Acomp">Acompañado/a</option>
  						<option value="Casad">Casado/a</option>
  						<option value="Divor">Divorciado/a</option>
						</select>
 						</td> 				
 						<td>Nacionalidad: </td>
 						<td><input a type="text" maxlength="15" size="15"></td> 
 					</tr>
 					<tr><td>Transporte: </td>
 						<td><select name="transp">
  						<option value="aPie">A pie.</option>
  						<option value="enBus">En Bus.</option>
  						<option value="vehiP">Vehículo propio.</option>
						</select>
						</td>
						<td>Distancia recorrida (km): </td>
 						<td><input a type="text" maxlength="3" size="3"></td> 
 						</tr>	  				
  				</table>		
  				<br>
 			</fieldset>
		</form></th>
		<button class="button" onclick="location.href='index2.html'">Salir sin guardar</button> 
		<button class="button" onclick="location.href='datper2.php'">Guardar y continuar</button> 
</div>

</center>


</body>
</html>
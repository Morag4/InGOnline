<!DOCTYPE html>
<html>
<head>
	<title>INGOnline-Registro Académico-Agregar</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<table id="tabl_ra">
		<tr>
			<td>
      <div class="icon-bar">
          <a class="active"><i class="fa fa-file"></i> Agregar</a> 
          <a href="regacadbuscar.php"><i class="fa fa-search"></i> Buscar</a> 
          <a href="regacadmodeli.php"><i class="fa fa-edit"></i> Mod/Elim</a> 
          <a href="regacadimp.php"><i class="fa fa-print"></i> Imprimir</a>
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
  <div class="divNav">
<ul>
  <li><a class="active">Datos Personales</a></li>
  <li><a  href="regacadagre2.php"> Datos de Residencia</a></li>
  <li><a href="regacadagre3.php">Datos Familiares</a></li>
  <li><a href="regacadagre4.php">Otros</a></li>
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
		</form>
		<button class="button" onclick="location.href='regacadinicio.html'"><i class="fa fa-close"></i> Salir sin guardar</button> 
		<button class="button" onclick="location.href='regacadagre2.php'"><i class="fa fa-save"></i> Guardar y continuar</button> 
</div>
	
</tr>


</table>
</body>
</html>
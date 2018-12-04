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
  <li><a href="regacadagre1.php">Datos Personales</a></li>
  <li><a  href="regacadagre2.php"> Datos de Residencia</a></li>
  <li><a href="regacadagre3.php">Datos Familiares</a></li>
  <li><a class="active">Otros</a></li>
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
  </form>
  <button class="button" onclick="location.href='regacadinicio.html'"><i class="fa fa-close"></i> Salir sin guardar</button> 
    <button class="button" onclick="location.href='regacadinicio.html'"><i class="fa fa-save"></i> Guardar y Finalizar</button>  		 
	</div>
</tr>
</table>
</body>
</html>
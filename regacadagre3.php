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
  <li><a href="regacadagre2.php"> Datos de Residencia</a></li>
  <li><a class="active" >Datos Familiares</a></li>
  <li><a href="regacadagre4.php">Otros</a></li>
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

    </form>
    <button class="button" onclick="location.href='regacadinicio.html'"><i class="fa fa-close"></i> Salir sin guardar</button> 
    <button class="button" onclick="location.href='regacadagre4.php'"><i class="fa fa-save"></i> Guardar y continuar</button>  
  </div>
</tr>


</table>
</body>
</html>
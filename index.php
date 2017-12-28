<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Document</title>
</head>
<body>
	<form>
		<table cellspacing="10">
			
			<!-- tr -> Filas -->
			<!-- td -> columnas o celdas  -->
				<tr id="tr1">
					<td colspan="6" class ="td1"><input type="text"  value="0" id="textopantalla"/></td>
				</tr>
				<tr id="tr2">
					<td colspan="2" class="td2"><input type="button" value="RETR" onclick = "retro()"/></td>
					<td colspan="2" class="td2"><input type="button" value="CE" onclick="borrado()"/></td>
					<td colspan="2" class="td2"><input type="button" value="C"/ onclick = "borradototal()"></td>
					
				</tr>
				<tr id="tr3" >
					<td class="td3"><input type="button"  value="7" onclick="numero('7')" /></td>
					<td class="td3"><input type="button" value="8" onclick="numero('8')" /></td>
					<td class="td3"><input type="button" value="9" onclick="numero('9')" /></td>
					<td class="td3"><input type="button" value="/" onclick="opepar('/')" /></td>
					<td colspan="2" class="td3"><input type="button" value="RAIZ" onclick="raizc()"/></td>
				</tr>
				<tr id="tr4">
					<td class="td4"><input type="button" value="4" onclick="numero('4')"/></td>
					<td class="td4"><input type="button" value="5" onclick="numero('5')"/></td>
					<td class="td4"><input type="button" value="6" onclick="numero('6')"/></td>
					<td class="td4"><input type="button" value="*" onclick="opepar('*')"/></td>
					<td colspan="2" class="td4"><input type="button" value="%" onclick="porcent()"/></td>
				</tr>
				<tr id="tr5">
					<td class="td5"><input type="button" value="1" onclick="numero('1')"/></td>
					<td class="td5"><input type="button" value="2" onclick="numero('2')"/></td>
					<td class="td5"><input type="button" value="3" onclick="numero('3')"/></td>
					<td class="td5"><input type="button" value="-" onclick="opepar('-')"/></td>
					<td colspan="2" class="td5"><input type="button" value="1/x" onclick="inve()"/></td>
				</tr>
				<tr id="tr6">
					<td class="td6"><input type="button" value="0" onclick="numero('0')"/></td>
					<td class="td6"><input type="button" value="+/-" onclick="opuest()"/></td>
					<td class="td6"><input type="button" value="." onclick="numero('.')"/></td>
					<td class="td6"><input type="button" value="+" onclick="opepar('+')"/></td>
					<td colspan="2" class="td6"><input type="button" value="=" onclick="igualar()"/></td>
				</tr	


	</form>
		>
			
		</table>
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>
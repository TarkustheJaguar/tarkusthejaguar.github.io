<html>
<head>
<link href="Style1.css?Version1" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="Functionality.js"></script>
</head>
<body>
<br> <br>
	<table style="Width:50%">
		<tr>
				<th> Begin </th>
				<th> Challenges </th>
				<th> Options </th>
				<th> Feedback </th>
		</tr>
	</table> <br>
<table class="main">
	<table class="Hope6" id="hopetable">
		<tr><td colspan="2">Hope</td></tr>
        <tr><td colspan="2" id="hope"><div id="Hope"><form><input type="text" id="number" value="6" readonly /></form></td></tr>
		<tr><td><button id="minus" type="button" onclick="decrementValue();EnDisM();HopeCheck()">-1</button></td>
			<td><button id="plus" type="button" onclick="incrementValue();EnDisM();HopeCheck()">+1</button></td></tr>
    </table>
	<div id="Back">
		<table class="Table2 CIA">
			<tr><th colspan="2"> Operators </th></tr>
			<tr><td><button type="button" onclick="ToggleTest2()">Vanguard</button></td>
				<td><button type="button" onclick="ToggleTest2()">Guard</button></td></tr>
			<tr><td><button type="button" onclick="ToggleTest2()">Defender</button></td>
				<td><button type="button" onclick="ToggleTest2()">Medic</button></td></tr>
			<tr><td><button type="button" onclick="ToggleTest2()">Sniper</button></td>
				<td><button type="button" onclick="ToggleTest2()">Caster</button></td></tr>
			<tr><td><button type="button" onclick="ToggleTest2()">Supporter</button></td>
				<td><button type="button" onclick="ToggleTest2()">Specialist</button></td></tr>		
			<tr><td colspan="2"><button type="button" onclick="ToggleTest2()">All</button></td></tr>
		</table>
	</div>
	<div id="Vanguard" hidden>
		<table class="Table2 TableVG">
			<tr><th colspan="2">Vanguards</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('VGres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button" onclick="disRB()" disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="VGres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Guard" hidden>
		<table class="Table2 TableG">
			<tr><th colspan="2">Guards</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('Gres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"disabled onclick="disRB();RemTest()"> Separater </button></td></tr>
				<tr><td colspan="2"id="Gres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Defender" hidden>
		<table class="Table2 TableD">
			<tr><th colspan="2">Defenders</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('Dres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button" onclick="disRB()" disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="Dres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
		<div id="Medic" hidden>
		<table class="Table2 TableM">
			<tr><th colspan="2">Medics</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('Mres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button" onclick="disRB()" disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="Mres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Sniper" hidden>
		<table class="Table2 TableSN">
			<tr><th colspan="2">Snipers</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('SNres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"onclick="disRB()"disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="SNres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Caster" hidden>
		<table class="Table2 TableC">
			<tr><th colspan="2">Casters</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('Cres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"onclick="disRB()"disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="Cres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Supporter" hidden>
		<table class="Table2 TableSU">
			<tr><th colspan="2">Supporters</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('SUres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"onclick="disRB()"disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="SUres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="Specialist" hidden>
		<table class="Table2 TableSP">
			<tr><th colspan="2">Specialists</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('SPres').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"onclick="disRB()"disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="SPres"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
	<div id="All" hidden>
		<table class="Table2 TableA">
			<tr><th colspan="2">All</th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td><button type="button"onclick="document.getElementById('Owl').innerHTML=randVal();EnRB()">Roll</button></td>
				<td><button class="LockButtonRESET"type="button"onclick="disRB()"disabled> Separater </button></td></tr>
				<tr><td colspan="2"id="Owl"><br></td></tr>
				<tr><td><button type="button" onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
</table>
<button type="button" onclick="resetHope();EnDisM();HopeCheck();TestRest()" style="margin-bottom:12%">reset</button> 
<table><tr><td> Rerolls: </td><td id ="falsify">0
</td></tr>
<tr><td id="john"></td></tr></table>

<table class="Result" id="Rolls">
	<tr><td id="r1"/><td id="r2"/><td id="r3"/><td id="r4"/><td id="r5"/><td id="r6"/></tr>
	<tr><td id="r7"/><td id="r8"/><td id="r9"/><td id="r10"/><td id="r11"/><td id="r12"/></tr>
</table>
</body>
</html>

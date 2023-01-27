<html>
<head>
<link rel="icon" href="BigChungus.JPG">
<link href="Style1.css?Version1" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="Functionality.js"></script>
	<title>TarkRandomiser</title>
</head>
<body>
<br>
	<table style="Width:90%;position:absolute">
		<tr>
				<th> Begin </th>
				<th> Challenges </th>
				<th> Options </th>
				<th> Feedback </th>
		</tr>
	</table> <br> <br>
<table class="main">
	<table class="Hope6" id="hopetable" style="display:none">
		<tr><td colspan="2">Hope</td></tr>
        <tr><td colspan="2" id="hope"><div id="Hope"><form><input type="text" id="number" value="6" readonly /></form></td></tr>
		<tr><td><button id="minus" type="button" onclick="decrementValue();EnDisM();HopeCheck()">-1</button></td>
			<td><button id="plus" type="button" onclick="incrementValue();EnDisM();HopeCheck()">+1</button></td></tr>
    </table>
	<table id="ISYAY">
		<tr><td/></tr>
		<tr><td colspan="2">INTEGRATED STRATEGIES</td></tr>
        <tr><td colspan="2"></td></tr>
		<tr><td></td></tr>
		<tr><td>DISABLED</td></tr>
	</table>
	<div id="Landing">
		<table class="Table2">
			<tr><th colspan="2"> Operators </th></tr>
			<tr><td><button type="button" onclick="ToggleReplace()">Vanguard</button></td>
				<td><button type="button" onclick="ToggleReplace()">Guard</button></td></tr>
			<tr><td><button type="button" onclick="ToggleReplace()">Defender</button></td>
				<td><button type="button" onclick="ToggleReplace()">Medic</button></td></tr>
			<tr><td><button type="button" onclick="ToggleReplace()">Sniper</button></td>
				<td><button type="button" onclick="ToggleReplace()">Caster</button></td></tr>
			<tr><td><button type="button" onclick="ToggleReplace()">Supporter</button></td>
				<td><button type="button" onclick="ToggleReplace()">Specialist</button></td></tr>		
			<tr><td colspan="2"><button type="button" onclick="ToggleReplace()">All</button></td></tr>
		</table>
	</div>
	<div id="ClassDiv" hidden>
		<table id="ClassTable" class="Table2 Table4">
			<tr><th id="ClassHead" colspan="2"></th></tr>
			<tr><td colspan="2"><button type="button" onclick="disB();ToggleTest2()">Back</button></td></tr>
				<tr><td colspan="2"><button type="button"onclick="disRB();document.getElementById('resetRoll').innerHTML=randVal()">Roll</button></td></tr>
				<tr><td colspan="2"id="resetRoll"><br></td></tr>
				<tr><td><button type="button"onclick="accept()">Accept</button></td></tr>
		</table>
	</div>
</table>
	<div id="RightSideButtons">
		<button type="button" onclick="resetHope();EnDisM();HopeCheck();TestRest();ResetAB()" style="margin-bottom:12%">reset</button> 
		<button type="button" onclick="AddIS()" id="ISToggle">Enable IS</button>
		<td><input type="checkbox" id="ScrollReset"name="ScrollReset" value="All" checked = "checked">Display All Rerolls</td>
		<table class="cycle"><tr><td><button type="button" onclick="HopeCycle()">6*</button></td>
			<td><button type="button" onclick="HopeCycle()">5*</button></td></tr>
			<tr><td><button type="button" onclick="HopeCycle()">4*</button></td>
			<td><button type="button" onclick="HopeCycle()">3*</button></td></tr>
		</table>
		<table>
			<tr><td> Rerolls: </td><td id ="falsify">0</td></tr>
			<tr><td id="OperatorsRerolled"></td></tr>
		</table>
	</div>
	<table class="Result" id="Rolls">
		<tr><td id="r1"/><td id="r2"/><td id="r3"/><td id="r4"/><td id="r5"/><td id="r6"/></tr>
		<tr><td id="r7"/><td id="r8"/><td id="r9"/><td id="r10"/><td id="r11"/><td id="r12"/></tr>
	</table>
</body>
</html>

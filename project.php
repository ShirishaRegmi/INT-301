<!DOCTYPE html>
<HTML>
<HEAD> 
	<TITLE> Renting Portal </TITLE>
	<link rel="stylesheet" type="text/css" href="/project.css">
<style>
body
{
	background-color: #e0ebeb;

}
#mainPage
{
	background-color: white;
	width: 600px;
	height: 300px;
	margin: auto;
	margin-top: 100px;
	padding: 20px;
	text-align: center;
}
.heading
{
	display: inline-block;
	font-size: 50px;
	color: #0066cc;
}
.selectTable
{
	margin: auto;
	margin-top: 60px;
	font-size: 30px;
	font-family: Arial, Helvetica, sans-serif;

}
#area, #flat
{
	width:100px;
	height:40px;
}
#findFlat
{
	display: inline-block;
	margin-top: 40px;
	padding: 9px 15px 9px 15px;
	background-color: #0066cc;
	color: white;
	border: 0px;
	font-size: 15px;

}
</style>

</HEAD>

<BODY>
<div id="mainPage">
<span class="heading">Renting Portal</span>
<form action="database.php" method="POST">
	<table class="selectTable">
	<tr>
	<td>Area:</td>
	<td>&nbsp;<select id="area" name="area">
		<option value="select">select</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Delhi">Delhi</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Chennai">Chennai</option>
	</select></td>
	</tr>
	<tr>
	<td>&nbsp;Flat:</td>
	<td>&nbsp;<select id="flat" name="flat">
		<option value="select">select</option>
		<option value="1BHK">1BHK</option>
		<option value="2BHK">2BHK</option>
		<option value="3BHK">3BHK</option>
		<option value="4BHK">4BHK</option>
	</select></td>
	</tr>
	</table>
	<input type="submit" id="findFlat" value="Find Flat">
</form>
</div>
</BODY>

</HTML>
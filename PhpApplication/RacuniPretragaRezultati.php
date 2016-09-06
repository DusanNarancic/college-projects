<?php

if(isset($_POST['submit'])){
				//-----------------------------------------
					
				// preuzimanje vrednosti sa forme
				   $JePlacen=$_POST['jePlacen'];
	
				 
				 
				   
				   require 'delovi/kod_parametrikonekcije.php';

					$db_handle = mysql_connect($server, $user_name, $password);

					   if (!$db_handle) {
								die('Nije uspostavljena veza sa serverom baze podataka. Greška: ' . mysql_error());
								echo "<br/>";
								}
									else
									{
									//echo " Uspesno uspostavljena konekcija ka serveru!";
									//echo "<br/>";
									}

					   //KONEKCIJA KA BAZI PODATAKA
					   $db_selected = mysql_select_db($bazapodataka, $db_handle);
					   if (!$db_selected) {
								die ('Nije moguce koristiti bazu podataka. Greška: ' . mysql_error());
								echo "<br/>";
										}
										else
										{
										 //echo " Uspesna konekcija ka bazi podataka! ";
										 //echo "<br/>";
										}

										
			} // post
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="sr-RS" xml:lang="sr-RS">
<meta charset="UTF-8">
<head>
<title>Evidencija plaćanja računa građana</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
</head>
<body>

<table class="no-spacing" style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0" style="border-spacing: 0;">

<!-------------------------- ZAGLAVLJE ------->
<?php include 'delovi/zaglavljewelcome.php';?>


<!-------------------------- DONJI DEO  ------->
<tr style="padding:0px;">
<td style="width:10%;">
</td>

<!------------------------------------------------------------------------------------------->
<!---------------------- SREDINA DONJEG DELA SA SADRZAJEM pocinje ovde ---------------------->
<td align="center" valign="middle"> 
<table style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0" bgcolor="#003366">
<tr>
<td style="width:1%;">
</td>

<td style="width:20%;padding:0" cellspacing="0" cellpadding="0" border="0" valign="top">

<?php include 'delovi/menilevoucesnik.php';?>

</td>

<td style="width:2%;">
</td>

<td style="padding:0" cellspacing="0" cellpadding="0" border="0" valign="top">

<!------- GLAVNI SADRZAJ desno ----------->  
<?php include 'delovi/desnoracunipretragarezultati.php';?>
</td>

<td style="width:2%;">
</td>

</tr>
</table>

</td>
<!---------------------- SADRZAJ zavrsava ovde ---------------------->

<td style="width:10%;">
</td>
</tr>
<!---------------------- DONJI DEO zavrsava ovde ---------------------->


<tr style="padding:0px;">
<td style="width:10%;"></td>
<td align="center" valign="middle"></td>
<td style="width:10%;"></td>
</tr>
<!--- DONJI DEO sa donjom ivicom zavrsava ovde  ------->


</table>

</body>
</html>
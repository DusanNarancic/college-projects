<?php
	   session_start();
       // kad idemo preko poziva sa URL promenljivom, onda ovako citamo:
	  /* $korisnik=$_GET['korisnik'];*/
	   
	   // citanje vrednosti iz sesije
	  /* $korisnik=$_SESSION["korisnik"];*/
	   
				// kad idemo preko poziva sa URL promenljivom, onda ovako citamo:   
				// citanje vrednosti iz sesije
				$idkorisnika=$_SESSION["idkorisnika"];
				
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
										
						if ($db_selected)
										   {
											// dodatak da moze da radi sa UTF8
											mysql_query('SET NAMES "utf8"',$db_handle);
										
											$SQL = "SELECT `".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`KorisnikUsluge`.IdFirme FROM `".$bazapodataka."`.`Usluga` INNER JOIN `".$bazapodataka."`.`KorisnikUsluge` ON `".$bazapodataka."`.`KorisnikUsluge`.IdFirme=`".$bazapodataka."`.`Usluga`.IdFirme WHERE `".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika='".$idkorisnika."'";
											//$SQL = "SELECT `".$bazapodataka."`.`Usluga`.DatumPoslednjePromene,`".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika FROM `".$bazapodataka."`.`Usluga` INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme INNER JOIN `".$bazapodataka."`.`KorisnikUsluge` ON `".$bazapodataka."`.`Usluga`.IdKorisnika=`".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika WHERE `".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika='".$idkorisnika."'";
											//$SQL = "SELECT `".$bazapodataka."`.`Usluga`.DatumPoslednjePromene,`".$bazapodataka."`.`Firma`.IdFirme FROM `".$bazapodataka."`.`Usluga` INNER JOIN `".$bazapodataka."`.Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.Usluga`.IdKorisnika='".$idkorisnika."'";
											//$SQL = "select distinct DatumPoslednjePromene from `".$bazapodataka."`.`Usluga` ORDER BY DatumPoslednjePromene ASC";
											$result = mysql_query($SQL);
											$num_rows = mysql_num_rows($result);
	
											
												}     		
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

<table style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0">

<!-------------------------- ZAGLAVLJE ------->
<?php include 'delovi/zaglavljewelcome.php';?>


<!-------------------------- DONJI DEO  ------->
<tr>
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

<?php include 'delovi/menilevoucesnikfirma.php';?>

</td>

<td style="width:2%;">
</td>

<td style="padding:0" cellspacing="0" cellpadding="0" border="0" valign="top">

<!------- GLAVNI SADRZAJ desno ----------->  
<?php include 'delovi/desnoracununos.php';?>
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


<tr>
<td style="width:10%;">
</td>
<td align="center" valign="middle" > 
</td>
<td style="width:10%;">
</td>
</tr>
<!--- DONJI DEO sa donjom ivicom zavrsava ovde  ------->


<!-- footer panel starts here -->


</table>

</body>
</html>
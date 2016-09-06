<?php
	   session_start();
       // kad idemo preko poziva sa URL promenljivom, onda ovako citamo:
	   //$korisnik=$_GET['korisnik'];
	   
	   // citanje vrednosti iz sesije
	   $idkorisnika=$_SESSION["idkorisnika"];
	   
	    // preuzimanje vrednosti sa forme
	   $idRacuna=$_POST['idracuna'];
	   
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

// *********************************************** PROVERA DA LI VEC POSTOJI korisnicko ime I SNIMANJE AKO NE POSTOJI
       if ($db_selected)
           {
	    // dodatak da moze da radi sa UTF8
	    mysql_query('SET NAMES "utf8"',$db_handle);
            
			// PROVERAVAMO DA LI JE PRIJAVLJENI KORISNIK IZ NASE BAZE PODATAKA, PA AKO JESTE, PUSTAMO DA IZVRSI INSERT INTO
            $SQLkorisnik = "SELECT * FROM `".$bazapodataka."`.`KorisnikUsluge` WHERE IdKorisnika=".$idkorisnika;
			//echo $SQLkorisnik;
            $resultkorisnik = mysql_query($SQLkorisnik);
            $num_rowskorisnik = mysql_num_rows($resultkorisnik);
            if ($num_rowskorisnik>0) {
							$SQLracun = "select  IdUsluge,DatumKreiranjaRacuna,IznosZaUplatu,DatumRokaPlacanja,DatumUplate,jePlacen,DatumPrispeca from `".$bazapodataka."`.`Racun` WHERE IdRacuna=".$idRacuna;
							/*echo $SQLstatus;*/
            				$resultracun = mysql_query($SQLracun);
							$num_rowsracun = mysql_num_rows($resultracun);
							$greskaracun= mysql_error();
							if ($num_rowsracun>0) {
							$row=0;  
							
							$idUsluge=mysql_result($resultracun,$row,"IdUsluge");
							$datumKreiranjaRacuna=mysql_result($resultracun,$row,"DatumKreiranjaRacuna");
							$iznosZaUplatu=mysql_result($resultracun,$row,"IznosZaUplatu");
							$datumRokaPlacanja=mysql_result($resultracun,$row,"DatumRokaPlacanja");
							$datumUplate=mysql_result($resultracun,$row,"DatumUplate");
							$jePlacen=mysql_result($resultracun,$row, "jePlacen");
							$datumPrispeca=mysql_result($resultracun,$row, "DatumPrispeca");
							
	
							
							}
							
							
        			           }
				} // od if db selected

      mysql_close($db_handle);
	
	   
      		
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
<?php include 'delovi/desnolistaracunaizmena.php';?>
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



</table>

</body>
</html>
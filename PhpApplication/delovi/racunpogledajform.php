<?php
	   session_start();  
	   // citanje vrednosti iz sesije - da bismo uvek proverili da li je to prijavljeni korisnik
	   //$idkorisnika=$_SESSION["idkorisnika"];
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
       // if ($db_selected)
           // {
	    // // dodatak da moze da radi sa UTF8
	     mysql_query('SET NAMES "utf8"',$db_handle);
		
		
            
			//$SQLkorisnik = "SELECT * FROM `".$bazapodataka."`.`RUKOPIS` WHERE IDRUKOPISA=".$idrukopisa;
			//echo $SQLkorisnik;
            $SQLracun = "select IdRacuna,IdUsluge,DatumKreiranjaRacuna,IznosZaUplatu,DatumRokaPlacanja,DatumUplate,DatumPrispeca from `".$bazapodataka."`.`Racun` WHERE IdRacuna=".$idRacuna;
            // echo $SQLrukopis;
			$resultracun = mysql_query($SQLracun);
            //$num_rowskorisnik = mysql_num_rows($resultrukopis);
           // if ($num_rowskorisnik>0) {
							//$SQLrukopis = "select DAY(DATUMRUKOPISA) AS DAN, MONTH(DATUMRUKOPISA) AS MESEC, YEAR(DATUMRUKOPISA) AS GODINA, NAZIVDELA, AUTOR, IZDAVAC, COBISSBROJ, GODINAIZDANJA, URLFAJLA, TIRAZKOMADA, ISBNBROJ, UDKBROJ, STATUS from `".$bazapodataka."`.`RUKOPIS` WHERE IDRUKOPISA=".$idrukopisa;
							//echo $SQLvest;
            				//$resultrukopis = mysql_query($SQLrukopis);
							$num_rowsracun = mysql_num_rows($resultracun);
							$greskaracun= mysql_error();
							if ($num_rowsracun>0) {
							$row=0;  // prvi i jedini red ima taj idrukopisa
							$IdUsluge=mysql_result($resultracun,$row,"IdUsluge");
							$DatumKreiranjaRacuna=mysql_result($resultracun,$row,"DatumKreiranjaRacuna");
							$IznosZaUplatu=mysql_result($resultracun,$row,"IznosZaUplatu");
						    $DatumRokaPlacanja=mysql_result($resultracun,$row,"DatumRokaPlacanja");
							$DatumUplate=mysql_result($resultracun,$row,"DatumUplate");
							$DatumPrispeca=mysql_result($resultracun,$row,"DatumPrispeca");
						
							}
							
							
        			          //}
				//} // od if db selected

      mysql_close($db_handle);
	
	   
      		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="sr-RS" xml:lang="sr-RS">
<meta charset="UTF-8">
<head>
<title>Evidencija placanja racuna</title>
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

<td style="width:2%;">
</td>

<td style="padding:0" cellspacing="0" cellpadding="0" border="0" valign="top">

<!------- GLAVNI SADRZAJ desno ----------->  
<?php include 'delovi/desnoracunpogledaj.php';?>
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

<?php include 'delovi/footer.php';?>

</table>

</body>
</html>
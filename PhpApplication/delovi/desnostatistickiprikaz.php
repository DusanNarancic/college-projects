
<meta charset="UTF-8">
<!--==================================== SADRZAJ STRANICE DESNO pocinje ovde ------------------------------>
<img src="images/sredinagore.jpg" width="100%" height="3" alt="" class="flt1 rp_topcornn" /> 

<table style="width:100%;style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0"  bgcolor="#D8E7F4">
<tr>
<td style="width:5%;">
</td>

<td align="left">
<br/>
<font face="Trebuchet MS" color="darkblue" size="4px">
<b>STATISTICKI PRIKAZ UKUPNOG IZNOSA UPLATE I ISPLATE NA RACUNU CELE FIRME</br>
<?php

//KONEKCIJA KA SERVERU
	require 'kod_parametrikonekcije.php';

	$db_handle = mysql_connect($server, $user_name, $password);

       if (!$db_handle) {
                die(' Није успостављена веза са сервером базе података. Грешка: ' . mysql_error());
                echo "<br/>";
                }
                    else
                    {
                    //echo " Успешно успостављена конекција ка серверу!";
                    //echo "<br/>";
                    }

       //KONEKCIJA KA BAZI PODATAKA
       $db_selected = mysql_select_db($bazapodataka, $db_handle);
       if (!$db_selected) {
                die (' Није могуће користити базу података. Грешка: ' . mysql_error());
                echo "<br/>";
                        }
                        else
                        {
                         //echo " Успешна конекција ка бази података! ";
                         //echo "<br/>";
                        }		

       if ($db_selected)
           {
            // dodatak da moze da radi sa UTF8
	    mysql_query('SET NAMES "utf8"',$db_handle);
	    
		if($idkorisnika==11)
		{
			$placeniRacuni = 0;
			$iznosPlaceni=0;
			$neplaceniRacuni = 0;
			$iznosNeplaceni=0;
			//$SQL = "select IdRacuna,IdUsluge,IznosZaUplatu,jePlacen from `".$bazapodataka."`.`Racun` WHERE jePlacen=1";
            $SQL = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=1 and `".$bazapodataka."`.`Racun`.jePlacen=1";
			$result = mysql_query($SQL);
            $num_rows = mysql_num_rows($result);
			
			$SQLneplaceni = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=1 and `".$bazapodataka."`.`Racun`.jePlacen=0";
            $resultneplaceni = mysql_query($SQLneplaceni);
            $num_rowsneplaceni = mysql_num_rows($resultneplaceni);
		}
		
		else if ($idkorisnika==16)
			{
			$placeniRacuni = 0;
			$iznosPlaceni=0;
			$neplaceniRacuni = 0;
			$iznosNeplaceni=0;
			
			$SQL = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=2 and `".$bazapodataka."`.`Racun`.jePlacen=1";
			$result = mysql_query($SQL);
            $num_rows = mysql_num_rows($result);
			
			$SQLneplaceni = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=2 and `".$bazapodataka."`.`Racun`.jePlacen=0";
            $resultneplaceni = mysql_query($SQLneplaceni);
            $num_rowsneplaceni = mysql_num_rows($resultneplaceni);
			
			//$SQLneplaceni = "select IdRacuna,IdUsluge,IznosZaUplatu,jePlacen from `".$bazapodataka."`.`Racun` WHERE jePlacen=0";
			//$resultneplaceni = mysql_query($SQLneplaceni);
            //$num_rowsneplaceni = mysql_num_rows($resultneplaceni);
			}
			
			else if($idkorisnika==17)
				{
			$placeniRacuni = 0;
			$iznosPlaceni=0;
			$neplaceniRacuni = 0;
			$iznosNeplaceni=0;
			
			$SQL = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=3 and `".$bazapodataka."`.`Racun`.jePlacen=1";
			$result = mysql_query($SQL);
            $num_rows = mysql_num_rows($result);
			
			$SQLneplaceni = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=3 and `".$bazapodataka."`.`Racun`.jePlacen=0";
            $resultneplaceni = mysql_query($SQLneplaceni);
            $num_rowsneplaceni = mysql_num_rows($resultneplaceni);
			
			//$SQLneplaceni = "select IdRacuna,IdUsluge,IznosZaUplatu,jePlacen from `".$bazapodataka."`.`Racun` WHERE jePlacen=0";
			//$resultneplaceni = mysql_query($SQLneplaceni);
            //$num_rowsneplaceni = mysql_num_rows($resultneplaceni);
			}
			
	    if ($num_rows>0) {
			//$rbvesti=0;
			// ------------ zaglavlje ----------------
			/*echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<td style=\"width:30%;\">";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id usluge</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum kreiranja racuna</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Iznos za uplatu</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum roka placanja</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum uplate</font><br/>";
				echo "</td>";
				echo "</tr>";*/
			
			for ($row = 0; $row < $num_rows; $row++) {
			        if ($row > $num_rows){
					// nista
				} else {
				//$rbvesti=$rbvesti+1;
				$placeniRacuni = $placeniRacuni + 1;
				//$neplaceniRacuni = $neplaceniRacuni + 1;
				//$neplaceniRacuni = $neplaceniRacuni + 1;
				$idUsluge=mysql_result($result,$row,"IdUsluge");
				$iznosZaUplatu=mysql_result($result,$row,"IznosZaUplatu");
				$idRacuna=mysql_result($result,$row,"IdRacuna");
				//$iznosZaUplatu2=mysql_result($result,$row,"IznosZaUplatu");
				
				if($iznosZaUplatu>0)
				{
					$iznosPlaceni=$iznosPlaceni+$iznosZaUplatu;
				}
				
				/*if($iznosZaUplatu>0)
				{
					$iznosNeplaceni=$iznosNeplaceni+$iznosZaUplatu2;
				}
				else
				{
				echo 0;
				}*/
				
				/*echo "<tr>";
				echo "<td style >";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$idUsluge</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$iznosZaUplatu</font><br/>";
				echo "</td>";
				echo "</tr>";*/

				
				} // za else kod if row>
			}  //za for 
			
				/*echo "</table>";*/
				  if ($num_rowsneplaceni>0) { 
					for ($row = 0; $row < $num_rowsneplaceni; $row++) {
			        if ($row > $num_rowsneplaceni){
					// nista
				}
				else {
				//$rbvesti=$rbvesti+1;
				$neplaceniRacuni = $neplaceniRacuni + 1;
				//$neplaceniRacuni = $neplaceniRacuni + 1;
				$idUsluge=mysql_result($resultneplaceni,$row,"IdUsluge");
				$iznosZaUplatu=mysql_result($resultneplaceni,$row,"IznosZaUplatu");
				$idRacuna=mysql_result($resultneplaceni,$row,"IdRacuna");
				
				if($iznosZaUplatu>0)
				{
					$iznosNeplaceni=$iznosNeplaceni+$iznosZaUplatu;
				}

				
				} // za else kod if row>
			}  //za for 
				}
				echo "<br/>";
				echo "<br/>";
							}   else {
                                      echo "<BR> NEMA UNETIH RACUNA";
                                   } // ZA ELSE
				
					
				echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<td style=\"width:30%;\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Broj plaćenih računa</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Broj neplaćenih računa</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Iznos računa koji su plaćeni</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Iznos računa koji su neplaćeni</font><br/>";
				echo "</td>";
				echo "</tr>";
				/*echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Placeni racuni</font><br/>";
				echo "</td>";
				echo "</tr>";*/
				
				echo "<tr>";
				echo "<td style >";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$placeniRacuni</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$neplaceniRacuni</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$iznosPlaceni</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$iznosNeplaceni</font><br/>";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
					echo "<br/>";
				echo "<br/>";
		   
	
           } // ZA IF DB SELECTED
           mysql_close($db_handle);
	
?>


<td style="width:5%;">
</td>

</tr>
</table>
<img src="images/sredinadole.jpg" width="100%" height="5" alt="" class="flt1" />     
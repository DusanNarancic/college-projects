
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
<b>RAČUNI</br>
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
	    
			//$SQL = "select IdRacuna,IdUsluge,DatumKreiranjaRacuna,IznosZaUplatu,DatumRokaPlacanja,DatumUplate,DatumPrispeca from `".$bazapodataka."`.`Racun`";
            
			if($idkorisnika==11)
			{
            //$SQL = "select IdUgovora,IdFirme, DatumSklapanjaUgovora, IdKorisnika from `".$bazapodataka."`.`Ugovor`";
			$SQL = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=1";
			$result = mysql_query($SQL);
			$num_rows = mysql_num_rows($result);
		   }
			else if ($idkorisnika==16)
			{
			$SQL2 = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=2";
			$result = mysql_query($SQL2);
			$num_rows = mysql_num_rows($result);	
			}
			
			else if ($idkorisnika==17)
			{
			$SQL3 = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.IdRacuna,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu,`".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Racun`.DatumPrispeca FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.IdFirme=3";
			$result = mysql_query($SQL3);
			$num_rows = mysql_num_rows($result);	
			}
			
			
			//$result = mysql_query($SQL);
            //$num_rows = mysql_num_rows($result);
	    if ($num_rows>0) {
			//$rbvesti=0;
			// ------------ zaglavlje ----------------
			echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<td style=\"width:10%;\">";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id usluge</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum kreiranja računa</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Iznos za uplatu</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum roka plaćanja</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum uplate</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum prispeća</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Izmena</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Brisanje</font><br/>";
				echo "</td>";
				echo "</tr>";
			
			for ($row = 0; $row < $num_rows; $row++) {
			        if ($row > $num_rows){
					// nista
				} else {
				//$rbvesti=$rbvesti+1;
				$idUsluge=mysql_result($result,$row,"IdUsluge");
				$datumKreiranjaRacuna=mysql_result($result,$row,"DatumKreiranjaRacuna");
				$iznosZaUplatu=mysql_result($result,$row,"IznosZaUplatu");
				$datumRokaPlacanja=mysql_result($result,$row,"DatumRokaPlacanja");
				$datumUplate=mysql_result($result,$row,"DatumUplate");
				$idRacuna=mysql_result($result,$row,"IdRacuna");
				$datumPrispeca=mysql_result($result,$row,"DatumPrispeca");
				
				echo "<tr>";
				echo "<td style >";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$idUsluge</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$datumKreiranjaRacuna</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$iznosZaUplatu</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$datumRokaPlacanja</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$datumUplate</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$datumPrispeca</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<form ACTION=\"listaracunaizmeniform.php\" METHOD=\"POST\">";
				echo "<input type=\"hidden\" name=\"idracuna\" value=\"$idRacuna\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\"><input TYPE=\"submit\" name=\"izmeniracun\" value=\"IZMENI\" /></font></b>";
				echo "</form>";
				echo "</td>";
				echo "<td>";
				echo "<form ACTION=\"listaracunaobrisi.php\" METHOD=\"POST\">";
				echo "<input type=\"hidden\" name=\"idracuna\" value=\"$idRacuna\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\"><input TYPE=\"submit\" name=\"obrisiracun\" value=\"OBRISI\" /></font></b>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";

				
				} // za else kod if row>
			}  //za for 
				echo "</table>";
				echo "<br/>";
				echo "<br/>";
							}   else {
                                      echo "<BR> NEMA UNETIH RACUNA";
                                   } // ZA ELSE
           } // ZA IF DB SELECTED
           mysql_close($db_handle);

?>



</td>

<td style="width:5%;">
</td>

</tr>
</table>
<img src="images/sredinadole.jpg" width="100%" height="5" alt="" class="flt1" /> 
    

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
<b>UGOVORI</br>
<?php

$idkorisnika=$_SESSION["idkorisnika"];
				
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
            //$SQL = "select IdUgovora,IdFirme, DatumSklapanjaUgovora, IdKorisnika from `".$bazapodataka."`.`Ugovor`";
			$SQL = "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Ugovor`.IdUgovora,`".$bazapodataka."`.`Ugovor`.DatumSklapanjaUgovora, `".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika FROM `".$bazapodataka."`.`Ugovor` INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Ugovor`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme  INNER JOIN `".$bazapodataka."`.`KorisnikUsluge` ON `".$bazapodataka."`.`Ugovor`.IdKorisnika=`".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika WHERE `".$bazapodataka."`.`Firma`.IdFirme=1";
			$result = mysql_query($SQL);
			$num_rows = mysql_num_rows($result);
		   }
			else if ($idkorisnika==16)
			{
			$SQL2= "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Ugovor`.IdUgovora,`".$bazapodataka."`.`Ugovor`.DatumSklapanjaUgovora, `".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika FROM `".$bazapodataka."`.`Ugovor` INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Ugovor`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme  INNER JOIN `".$bazapodataka."`.`KorisnikUsluge` ON `".$bazapodataka."`.`Ugovor`.IdKorisnika=`".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika WHERE `".$bazapodataka."`.`Firma`.IdFirme=2";
			$result = mysql_query($SQL2);
			$num_rows = mysql_num_rows($result);	
		}
		
		   else if($idkorisnika==17)
			{
			$SQL3= "SELECT `".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Ugovor`.IdUgovora,`".$bazapodataka."`.`Ugovor`.DatumSklapanjaUgovora, `".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika FROM `".$bazapodataka."`.`Ugovor` INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Ugovor`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme  INNER JOIN `".$bazapodataka."`.`KorisnikUsluge` ON `".$bazapodataka."`.`Ugovor`.IdKorisnika=`".$bazapodataka."`.`KorisnikUsluge`.IdKorisnika WHERE `".$bazapodataka."`.`Firma`.IdFirme=3";
			$result = mysql_query($SQL3);
			$num_rows = mysql_num_rows($result);	
			}
			

		//	$result = mysql_query($SQL);
          //  $num_rows = mysql_num_rows($result);
			
	    if ($num_rows>0) {
			
			// ------------ zaglavlje ----------------
			echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<td style=\"width:10%;\">";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id firme</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Datum sklapanja ugovora</font><br/>";
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
				
				$IdFirme=mysql_result($result,$row,"IdFirme");
				$DatumSklapanjaUgovora=mysql_result($result,$row,"DatumSklapanjaUgovora");
				$IdKorisnika=mysql_result($result,$row,"IdKorisnika");
				$IdUgovora=mysql_result($result,$row,"IdUgovora");
			
			
				echo "<tr>";
				echo "<td style >";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$IdFirme</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$IdKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$DatumSklapanjaUgovora</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<form ACTION=\"listaizmeniform.php\" METHOD=\"POST\">";
				echo "<input type=\"hidden\" name=\"idugovora\" value=\"$IdUgovora\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\"><input TYPE=\"submit\" name=\"izmeniugovor\" value=\"IZMENI\" /></font></b>";
				echo "</form>";
				echo "</td>";
				echo "<td>";
				echo "<form ACTION=\"listaugovoraobrisi.php\" METHOD=\"POST\">";
				echo "<input type=\"hidden\" name=\"idugovora\" value=\"$IdUgovora\">";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\"><input TYPE=\"submit\" name=\"obrisiugovor\" value=\"OBRISI\" /></font></b>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";

				
				} // za else kod if row>
			}  //za for 
				echo "</table>";
				echo "<br/>";
				echo "<br/>";
							}   else {
                                      echo "<BR> NEMA UNETIH UGOVORA";
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
    
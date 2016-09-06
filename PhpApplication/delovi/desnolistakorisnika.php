
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
<b>KORISNICI</br>
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
	    
            $SQL = "select IdKorisnika,BrojRacunaKorisnika,ImeKorisnika,PrezimeKorisnika,BrojTelefonaKorisnika,KorisnickoIme,Lozinka,AdresaKorisnika,VrstaKorisnika,jePredstavnikFirme,JMBG,IdFirme from `".$bazapodataka."`.`KorisnikUsluge`";
            $result = mysql_query($SQL);
            $num_rows = mysql_num_rows($result);
	    if ($num_rows>0) {
			//$rbvesti=0;
			// ------------ zaglavlje ----------------
			echo "<table style=\"width:90%; padding:0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\"  bgcolor=\"#D8E7F4\">";
				echo "<tr>";
				echo "<td style=\"width:10%;\">";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Broj računa korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">JMBG</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Ime korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Prezime korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Broj telefona korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Korisnicko ime</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Lozinka</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Adresa korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Vrsta korisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Je predstavnik firme</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"3px\">Id firme</font><br/>";
				echo "</td>";
				echo "</tr>";
			
			for ($row = 0; $row < $num_rows; $row++) {
			        if ($row > $num_rows){
					// nista
				} else {
				//$rbvesti=$rbvesti+1;
				$IdKorisnika=mysql_result($result,$row,"IdKorisnika");
				$BrojRacunaKorisnika=mysql_result($result,$row,"BrojRacunaKorisnika");
				$JMBG=mysql_result($result,$row,"JMBG");
				$ImeKorisnika=mysql_result($result,$row,"ImeKorisnika");
				$PrezimeKorisnika=mysql_result($result,$row,"PrezimeKorisnika");
				$BrojTelefonaKorisnika=mysql_result($result,$row,"BrojTelefonaKorisnika");
				$KorisnickoIme=mysql_result($result,$row,"KorisnickoIme");
				$Lozinka=mysql_result($result,$row,"Lozinka");
				$AdresaKorisnika=mysql_result($result,$row,"AdresaKorisnika");
				$VrstaKorisnika=mysql_result($result,$row,"VrstaKorisnika");
				$jePredstavnikFirme=mysql_result($result,$row,"jePredstavnikFirme");
				$IdFirme=mysql_result($result,$row,"IdFirme");
				
				echo "<tr>";
				echo "<td style>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$IdKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$BrojRacunaKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$JMBG</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$ImeKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$PrezimeKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$BrojTelefonaKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$KorisnickoIme</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$Lozinka</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$AdresaKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$VrstaKorisnika</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$jePredstavnikFirme</font><br/>";
				echo "</td>";
				echo "<td>";
				echo "<font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">$IdFirme</font><br/>";
				echo "</td>";
				echo "</tr>";

				
				} // za else kod if row>
			}  //za for 
				echo "</table>";
				echo "<br/>";
				echo "<br/>";
							}   else {
                                      echo "<BR> NEMA UNETIH FIRMI";
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
    
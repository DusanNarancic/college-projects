
<meta charset="UTF-8">
<!--==================================== SADRZAJ STRANICE DESNO pocinje ovde ------------------------------>
<img src="images/sredinagore.jpg" width="100%" height="3" alt="" class="flt1 rp_topcornn" /> 

<table style="width:100%;style="width:100%; padding:0" align="center" cellspacing="0" cellpadding="0" border="0"  bgcolor="#D8E7F4">
<tr>
<td style="width:5%;">
</td>

<td align="left">
<br/>
<b><font face="Trebuchet MS" color="darkblue" size="4px">  </font></b>
<table style="width:100%;" bgcolor="#D8E7F4" padding:0" align="center" cellspacing="0" cellpadding="0" border="0">

<tr>
<td style="width:3%;">
</td>
<td align="center">
<font color="#D8E7F4" size="1px">.</font>
</td>
<td style="width:3%;">
</td>
</tr>

<tr>
<td style="width:3%;">
</td>
<td align="center">
<b><font face="Trebuchet MS" color="darkblue" size="3px">REZULTATI PRETRAGE RAČUNA </font></b></br>
<hr>
<a href="PretragaRacuna.php" ><font face="Trebuchet MS" color="darkblue" size="2px">Nova pretraga</font></a> </br>
<hr>
</td>
<td style="width:3%;">
</td>
</tr>

<tr>
<td style="width:3%;">
</td>
<td align="center">
<font color="#D8E7F4" size="1px">.</font>
</td>
<td style="width:3%;">
</td>
</tr>

<tr>
<td style="width:3%;">
</td>

<td align="center">

<?php 

$idkorisnika=$_SESSION["idkorisnika"];
				
if ($db_selected)
										   {
											// dodatak da moze da radi sa UTF8
											mysql_query('SET NAMES "utf8"',$db_handle);
										
											//$SQL = "select `".$bazapodataka."`.`MESTO`.PTT, `".$bazapodataka."`.`MESTO`.NAZIV AS NazivMesta,`".$bazapodataka."`.`ZEMLJA`.NAZIV as NazivZemlje  from `".$bazapodataka."`.`MESTO` INNER JOIN `".$bazapodataka."`.`ZEMLJA`ON `".$bazapodataka."`.`MESTO`.OZNAKAZEMLJE=`".$bazapodataka."`.`ZEMLJA`.OZNAKA ORDER BY `".$bazapodataka."`.`ZEMLJA`.NAZIV,`".$bazapodataka."`.`MESTO`.NAZIV";
											//$SQL = "SELECT `".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.DatumPrispeca,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu, `".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Firma`.NazivFirme FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge  INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Firma`.NazivFirme='".$nazivFirme."'";
											$SQL = "SELECT `".$bazapodataka."`.`Usluga`.IdKorisnika,`".$bazapodataka."`.`Usluga`.IdUsluge,`".$bazapodataka."`.`Racun`.DatumPrispeca,`".$bazapodataka."`.`Racun`.DatumKreiranjaRacuna, `".$bazapodataka."`.`Racun`.IznosZaUplatu, `".$bazapodataka."`.`Racun`.DatumRokaPlacanja,`".$bazapodataka."`.`Racun`.DatumUplate,`".$bazapodataka."`.`Firma`.IdFirme,`".$bazapodataka."`.`Firma`.NazivFirme FROM `".$bazapodataka."`.`Racun` INNER JOIN `".$bazapodataka."`.`Usluga` ON `".$bazapodataka."`.`Racun`.IdUsluge=`".$bazapodataka."`.`Usluga`.IdUsluge  INNER JOIN `".$bazapodataka."`.`Firma` ON `".$bazapodataka."`.`Usluga`.IdFirme=`".$bazapodataka."`.`Firma`.IdFirme WHERE `".$bazapodataka."`.`Usluga`.IdKorisnika='".$idkorisnika."' AND `".$bazapodataka."`.`Firma`.NazivFirme='".$nazivFirme."'";
											$result = mysql_query($SQL);
											$num_rows = mysql_num_rows($result);
											
											/*$SQLfirma = "select IdFirme,NazivFirme from `".$bazapodataka."`.Firma` WHERE NazivFirme='".$nazivFirme."'";
											$resultfirma = mysql_query($SQLfirma);
											$num_rowsfirma = mysql_num_rows($resultfirma);*/
											
											
											if ($num_rows>0) {
												for ($row = 0; $row < $num_rows; $row++) {
													if ($row > $num_rows){
															// nista
														} else {
														
															$IdUsluge=mysql_result($result,$row,"IdUsluge"); 
															$DatumKreiranjaRacuna=mysql_result($result,$row,"DatumKreiranjaRacuna");
															$IznosZaUplatu=mysql_result($result,$row,"IznosZaUplatu");
															$DatumRokaPlacanja=mysql_result($result,$row,"DatumRokaPlacanja");
															$DatumUplate=mysql_result($result,$row,"DatumUplate");
															$NazivFirme=mysql_result($result, $row, "NazivFirme");
															$IdFirme=mysql_result($result, $row, "IdFirme");
															$DatumPrispeca=mysql_result($result,$row,"DatumPrispeca");
															
															echo "<br/>";
															echo "<br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Id usluge: $IdUsluge</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum kreiranja računa: $DatumKreiranjaRacuna</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Iznos za uplatu: $IznosZaUplatu</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum roka plaćanja: $DatumRokaPlacanja</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum uplate: $DatumUplate</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Datum prispeća: $DatumPrispeca</font><br/>";
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Naziv firme: $NazivFirme</font><br/>";
														/*	if($IdFirme==1)
															{
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Naziv firme: Vodovod</font><br/>";
															}
															else if ($IdFirme==2)
															{
															echo "<b><font face=\"Trebuchet MS\" color:#3F4534 size=\"2px\">Naziv firme: Toplana</font><br/>";	
															}
															*/
															echo "<br/>";
														} // za else kod if row>
													}  //za for 
												}   else {
															echo "НЕМА ПОДАТАКА";
															} // ZA ELSE
								   
											mysql_close($db_handle);
											
											}
											// if db selected
											
?>
<hr>
</td>
<td style="width:3%;">
</td>
</tr>

<tr>
<td style="width:3%;">
</td>
<td align="center">
<font color="#D8E7F4" size="1px">
</font>
</td>
<td style="width:3%;">
</td>
</tr>



</table>
</td>

<td style="width:5%;">
</td>

</tr>
</table>
<img src="images/sredinadole.jpg" width="100%" height="5" alt="" class="flt1" /> 
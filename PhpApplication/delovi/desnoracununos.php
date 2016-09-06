
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
<b><font face="Trebuchet MS" color="darkblue" size="3px">UNOS NOVOG RAČUNA</font></b></br>
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


<!------------------------FORMA ZA UNOS ------->
<table style="width:90%;" bgcolor="#D8E7F4" padding:0" align="center" cellspacing="0" cellpadding="0" border="0">
<form ACTION="racunsnimi.php" METHOD="POST">

<tr>
<td align="right" valign="bottom">
<b><font face="Trebuchet MS" color="darkblue" size="2px">Id usluge:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="bottom">
<select name="idUsluge" required TABINDEX=8 width="250" style="width: 250px">		
	<option value="izaberite">izaberite...</option>
	<?php
	if ($num_rows>0) {
							for ($row = 0; $row < $num_rows; $row++) {
								if ($row > $num_rows){
										// nista
									} else {
										$IdUsluge=mysql_result($result,$row,"IdUsluge");
										echo "<option value=\"".$IdUsluge."\">".$IdUsluge."</option>";
										
										} // if row
							} //for
										
						} // if numrowsmesta
	
	?>
</select>
</td>
</tr>


<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>


<tr>
<td align="right" valign="top">     
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum kreiranja računa:&nbsp;&nbsp;</font></b>
</td>
<td align="left" valign="top">
<input name="datumKreiranja" type="date"  size="5" required maxlength="2" VALUE="" TABINDEX=1/>
<font face="Trebuchet MS" color="darkblue" size="2px">(dd.mm.gggg.)</font>
</td>
</tr>


<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>

<tr>
<td align="right" valign="top">
<b><font face="Trebuchet MS" color="darkblue" size="2px">Iznos za uplatu:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="iznos" type="text" size="52" required />
</td>
</tr>

<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>

<tr>
<td align="right" valign="top">     
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum roka plaćanja:&nbsp;&nbsp;</font></b>
</td>
<td align="left" valign="top">
<input name="datumRoka" type="date" size="5" required maxlength="2" VALUE="" TABINDEX=1/>
<font face="Trebuchet MS" color="darkblue" size="2px">(mm.dd.gggg.)</font>
</td>
</tr>


<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>

<tr>
<td align="right" valign="top">     
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum uplate:&nbsp;&nbsp;</font></b>
</td>
<td align="left" valign="top">
<input name="datumUplate" type="date" size="5" required maxlength="2" VALUE="" TABINDEX=1/>
<font face="Trebuchet MS" color="darkblue" size="2px">(mm.dd.gggg.)</font>
</td>
</tr>

<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>

<tr>
<td align="right" valign="top">     
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum prispeća:&nbsp;&nbsp;</font></b>
</td>
<td align="left" valign="top">
<input name="datumPrispeca" type="date" size="5" required maxlength="2" VALUE="" TABINDEX=1/>
<font face="Trebuchet MS" color="darkblue" size="2px">(mm.dd.gggg.)</font>
</td>
</tr>


<!-------------------------- prazan red ------->
<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<tr>

<td>       
</td>
<td><input TYPE="submit" name="submit" value="Snimi" TABINDEX=3/>
</td>
</form>
</table>

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
</table>
</td>

<td style="width:5%;">
</td>

</tr>
</table>
<img src="images/sredinadole.jpg" width="100%" height="5" alt="" class="flt1" /> 
    
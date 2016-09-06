
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
<b><font face="Trebuchet MS" color="darkblue" size="3px">UNOS NOVOG UGOVORA</font></b></br>
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
<form ACTION="ugovorsnimi.php" METHOD="POST">


<tr>
<td align="right" valign="top">
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum sklapanja ugovora:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="datumSklapanjaUgovora" type="date" size="60" required maxlength="250" VALUE="" TABINDEX=7/>
</td>
</tr>


<tr>
<td align="right" valign="bottom">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="bottom">
</td>
</tr>

<tr>
<td align="right" valign="top">
<b><font face="Trebuchet MS" color="darkblue" size="2px">Naziv firme:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<select name="naziv" required TABINDEX=9>		
	<option value="izaberite">izaberite...</option>
<?php
	if ($num_rows>0) {
							for ($row = 0; $row < $num_rows; $row++) {
								if ($row > $num_rows){
										// nista
									} else {
										$NazivFirme=mysql_result($result,$row,"NazivFirme");
										echo "<option value=\"$NazivFirme\">$NazivFirme</option>";
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
<td align="right" valign="bottom">
<b><font face="Trebuchet MS" color="darkblue" size="2px">JMBG korisnika:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="bottom">
<select name="jmbg" required TABINDEX=8 width="250" style="width: 250px">		
	<option value="izaberite">izaberite...</option>
	<?php
	if ($num_rowskorisnik>0) {
							for ($rowkorisnik = 0; $rowkorisnik < $num_rowskorisnik; $rowkorisnik++) {
								if ($rowkorisnik > $num_rowskorisnik){
										// nista
									} else {
										$jmbg=mysql_result($resultkorisnik,$rowkorisnik,"JMBG");
										echo "<option value=\"".$jmbg."\">".$jmbg."</option>";
										
										} // if row
							} //for
										
						} // if numrowsmesta
	
	?>
	</select>
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
    
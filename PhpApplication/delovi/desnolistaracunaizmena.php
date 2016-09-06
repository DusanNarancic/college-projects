
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
<b><font face="Trebuchet MS" color="darkblue" size="3px">IZMENA RAČUNA</font></b></br>
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
<form ACTION="racunizmeni.php" METHOD="POST">

<tr>
<td align="right" valign="top">     

</td>
<td align="left" valign="top">
<input type="hidden" name="idracuna" value="<?php echo $idRacuna; ?>" />

</td>
</tr>

<tr>
<td align="right" valign="top">
<font face="Trebuchet MS" color="#D8E7F4" size="2px">.</font><br/>
</td>
<td align="left" valign="top">
</td>
</tr>

</td>
<td align="left" valign="top">
<input type="hidden" name="idusluge" value="<?php echo $idUsluge; ?>" />

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
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum kreiranja racuna:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="datumKreiranja" type="date" size="50" value ="<?php echo $datumKreiranjaRacuna; ?>" required />
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
<input name="iznos" type="number" size="50" value ="<?php echo $iznosZaUplatu; ?>" required />
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
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum roka placanja:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="datumRoka" type="date" size="50" value ="<?php echo $datumRokaPlacanja; ?>" required />
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
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum uplate:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="datumUplate" type="date" size="50" value ="<?php echo $datumUplate; ?>" required/>
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
<b><font face="Trebuchet MS" color="darkblue" size="2px">Stanje racuna(placen/neplacen (1,0)):&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="jePlacen" type="number" min="0" max="1" size="50" value ="<?php echo $jePlacen; ?>" required/>
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
<b><font face="Trebuchet MS" color="darkblue" size="2px">Datum prispeća:&nbsp;&nbsp;</font><br/></b>
</td>
<td align="left" valign="top">
<input name="datumPrispeca" type="date" size="50" value ="<?php echo $datumPrispeca; ?>" required/>
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
<td><input TYPE="submit" name="submit" value="IZMENI" TABINDEX=3/>
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
    
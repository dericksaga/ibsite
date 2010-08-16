
<h3><strong>Enviar Fotos para Notícia</strong></h3>

<form action="?pg=../noticias/enviar_fotos_cod.php" method="post" enctype="multipart/form-data">

<select name="id" style="width:280">
                <option selected>Selecione uma Notícia</option>
                <option>======================================</option>
<?
$sql= mysql_query("SELECT * FROM noticias_dados where fotos_extras='sim' order by id desc");
while ($dados=mysql_fetch_array($sql)){?>
<option value=<? echo "$dados[id]";?>><? echo "$dados[id] - $dados[titulo]";?></option>
<? }?>
  </select>

<br>
<br>


  <Table align="center" cellpadding="2" cellspacing="0">
          <tr> 
          <td width="60" align="right" valign="middle" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc"><strong>Foto 01:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc;border-top:1px solid #cccccc"> 
            <strong>
            <input name='foto01' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 02:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto02' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 03:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto03' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 04:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto04' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 05:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto05' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 06:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto06' type='file' size=30>
</strong></td>
        </tr>          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 07:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto07' type='file' size=30>
</strong></td>
        </tr>
          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 08:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto08' type='file' size=30>
</strong></td>
        </tr>
          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 09:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto09' type='file' size=30>
</strong></td>
        </tr>
          <tr> 
          <td align="right" valign="middle" style="border-bottom:1px solid #cccccc"><strong>Foto 10:</strong></td>
          <td width="300" valign="middle" style="border-bottom:1px solid #cccccc"> 
            <strong>
            <input name='foto10' type='file' size=30>
</strong></td>
        </tr>
  </table>

  <table width="400" align="center" cellpadding="0" cellspacing="0">
   <tr> 
     <td height="35" colspan="4" align="center"> 
       <INPUT Type="submit" Value="Enviar Fotos" name="Submit">
   </td>
   </tr>
</table>

</form>

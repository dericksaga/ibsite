<form name="form1" method="post" action="?pg=../estrutura/mala-direta/listarsql.php" style="margin:0px;">
    <p>
      SQL: 
        <textarea name="sql" rows="4" id="sql" style="width:309px; vertical-align:top;">SELECT * FROM mala where campo = 'valor' order by campo</textarea>
    </p>
    <p>Utilizar padr&atilde;o   SELECT * FROM tabela where campo = 'valor' order by campo.<br />
      Nem todos os campos dispon&iacute;veis ser&atilde;o aceitos na busca.<br />
      Para buscas mais completas, utilizar o PHPMyAdmin.<br />
    Erros no SQL retornar&atilde;o colunas vazias.</p><p>
      <input type="reset" name="Submit2" value="Limpar" style="border:1px solid gray; font-size:9px; background-color: whitesmoke; ">
      &nbsp;&nbsp;&nbsp; 
      <input type="submit" name="Submit" value="Enviar" style="border:1px solid gray; font-size:9px; background-color: whitesmoke ; ">
    </p>
</form>

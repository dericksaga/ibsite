<? if($_GET[cat] <> ""){ ?>
	<?
    $pg=$_GET[pg];
    $page=$_GET[page];
    
    
    $busca = "SELECT * FROM noticias_dados where idcat = $_GET[cat] order by id desc";
    // termina a função para buscar a categoria
    
    $total_reg = "15";
    
    if(!$page){
    $page = "1";
    }
    
    $inicio = $page-1;
    $inicio = $inicio*$total_reg;
    
    $limite = mysql_query("$busca LIMIT $inicio,$total_reg");
    $todos = mysql_query("$busca");
    
    $tr = mysql_num_rows($todos);
    $tp = ceil($tr / $total_reg);
    
    if(mysql_num_rows($todos)>0){
     //  if (($todos%2)==0) { $bgcolor="#FFFFFF"; } else { $bgcolor="#C0C0C0"; } 
    ?>
    
    <div style="width:450px; position:absolute; ">
        <?
            $dados = mysql_fetch_array(mysql_query("SELECT * FROM noticias_categorias where id = $_GET[cat]"));
            $cat1 = $dados[id]; $nome1 = $dados[nome]; $cor1 = $dados[cor];
        ?>
        <br />
        <div  class="titulozinhos" style="color:<?=$cor1?>; font-size:25px; border-bottom:1px solid <?=$cor1?>;"><?=$nome1?></div>
        <div style="padding:0px; margin:0px;" class="titulozinhos">
            <? while ($dados=mysql_fetch_array($limite)) {?>
                <h1 style="min-height:50px;">
                    <a href="?pg=noticia&id=<?=$dados[id]?>">
                        <? 
                        if (is_file("images/noticias/$dados[id]/$dados[foto01]")){
                        echo "<img src='thumbs.php?w=45&h=45&imagem=images/noticias/$dados[id]/$dados[foto01]' border='$dados[borda]' align='left' style='border:solid 1px gray; margin-right:5px;'>" ;
                        } else {
                        echo "<img src='images/logo45.jpg' align='left' style='margin-right:5px; border:solid 1px gray;'>" ;
                        }
                        ?>
                        <? $data=explode("-",$dados[data]); echo "$data[2]/$data[1]/$data[0]";?> - <?=$dados[titulo]?></a>
                    </a>
                </h1>
            <? } ?>
        </div>
    <table border="0" align="center" cellpadding="0" cellspacing="0" class="noticia">
      <TR> 
              <TD width="100" align="right" valign="top">
                <?
    if($page > 1){
    $anterior = $page -1;
    $url = "?pg=$pg&page=$anterior&cat=$_GET[cat]";
    echo "<a href='$url'>« Anterior</a>&nbsp;|";
    } else {
    echo "<font color='$corcelula2'>« Anterior</font>&nbsp;|";
    }
    ?>
    </TD>
        <TD align="center">
          <? 
    for($x=1; $x<=$tp; $x++){
    $url = "?pg=$pg&page=$x&cat=$_GET[cat]";
      if ($x==$page) {
      echo "<font color='$coronmouse'><b>$x</b></font>|";
      } else {
      echo "<a href='$url'>$x</a>|";
      }
    } 
    ?>
    </TD>
              <TD width="100" align="left" valign="top">
                <?
    if($tp > $page){
    $proxima = $page +1;
    $url = "?pg=$pg&page=$proxima&cat=$_GET[cat]";
    echo "&nbsp;<a href='$url'>Próxima »</a>";
    } else {
    echo "&nbsp;<font color='$corcelula2'>Próxima »</font>";
    }
    ?>
    </TD>
      </TR>
    </table>
    </div>
    
    <? } ?>
<? } else { ?>
<?
$sql= mysql_query("SELECT * FROM noticias_categorias order by nome");
while ($dados=mysql_fetch_array($sql)){?>
<div  class="titulozinhos" style="border-bottom:1px solid <?=$dados[cor]?>; padding-top:15px; font-size:25px;"><a href="?pg=noticias&cat=<?=$dados[id]?>" style="color:<?=$dados[cor]?>">Portal de <?=$dados[nome]?></a></div>
<? }} ?>
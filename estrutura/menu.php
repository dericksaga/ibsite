<script type="text/javascript">
	$(function(){
		$('a')
			.css( {backgroundPosition: "0px -120px"} )
			.mouseover(function(){
				$(this).stop().animate({backgroundPosition:"(0px 0px)"}, {duration:1})
			})
			.mouseout(function(){
				$(this).stop().animate({backgroundPosition:"(0px -120px)"}, {duration:1, complete:function(){
					$(this).css({backgroundPosition: "0px -120px"})
				}})
			})
	});
</script>
<!--<style type="text/css">
	ul {list-style:none;margin-left:25px; padding:0; text-align:left;}
	li {margin:0;text-align:center; height:30px;padding-bottom:0px; float:left; d }
	li a {display:block;padding:0px 0px;height:100%;color:#FFF;text-decoration:none; }

	#a a {background:url(images/home.jpg) repeat; font-size:10px;}
	#b a {background:url(images/videos.jpg) repeat; font-size:10px;}
	#c a {background:url(images/fotos.jpg) repeat; font-size:10px;}
	#d a {background:url(images/agenda.jpg) repeat; font-size:10px;}
	#e a {background:url(images/noticias.jpg) repeat; font-size:10px;}
	#f a {background:url(images/contato.jpg) repeat; font-size:10px;}
</style>
-->
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- <div style="width:700px; height:42px; margin-left:132px; margin-top:40px; text-align:left; position:absolute; ">
	<a href="?pg=promocoes"><img src="images/promocoes.png" border="0"></a>
	<a href="?pg=cadastro"><img src="images/cadastre-se.png" border="0"></a>
	<img src="images/busca.png" border="0">
</div>
 -->
<body
	onLoad="MM_preloadImages('images/twitter2.png','images/facebook2.png')">
<div id="header">
 <div id="fundo_menu">
<ul id="menu_principal" class="menu">

	<li id="noticias"><a href="?pg=noticias">NOTÍCIAS</a><ul id= "noticias_categorias" class="menu menu2">


 <?php
 
 
 //listar categorias
 $busca = "SELECT * FROM noticias_categorias order by nome asc";
 $categorias = mysql_query("$busca");
 while ($dados=mysql_fetch_array($categorias)) {
 	
 	echo '<li><a href="?pg=noticias&cat='.$dados[id].'" style = "color:'.$dados[cor].';">'.$dados[nome].'</a></li>';
 	/**echo '<li><a href="?pg=noticias&cat='.$dados[id].'">'.$dados[nome].'</a></li>';	*/
  
 }
 
 ?>
</ul></li>
	<li ><a href="?pg=videos">VÍDEOS</a></li>
	<li ><a href="?pg=fotos">FOTOS</a></li>
	<li ><a href="?pg=agenda">AGENDA</a></li>
	<li ><a href="?pg=contato">CONTATO</a></li>
	<li ><a href="?pg=promocoes">PROMOÇÕES</a></li>
	<li ><a href="?pg=cadastro">CADASTRE-SE</a></li>
</ul>



<div id="redessociais">
<a
	href="http://www.orkut.com.br/Main#Profile.aspx?origin=is&amp;uid=8987633175567176533"
	onMouseOut="MM_swapImgRestore()"
	onMouseOver="MM_swapImage('Orkut','','images/orkut2.png',0)"
	target="_blank"><img src="images/orkut1.png" alt="Orkut" name="Orkut"
	border="0" id="Orkut" /></a> <a href="http://twitter.com/ibrasiltv"
	target="_blank" onMouseOut="MM_swapImgRestore()"
	onMouseOver="MM_swapImage('Twitter','','images/twitter2.png',1)"><img
	src="images/twitter1.png" alt="Twitter" name="Twitter" border="0"
	id="Twitter" /></a> <a
	href="http://www.facebook.com/home.php?#!/profile.php?id=100001145624023"
	target="_blank" onMouseOut="MM_swapImgRestore()"
	onMouseOver="MM_swapImage('Facebook','','images/facebook2.png',1)"><img
	src="images/facebook1.png" alt="Facebook" name="Facebook" border="0"
	id="Facebook" /></a></div>
</div>

</div>
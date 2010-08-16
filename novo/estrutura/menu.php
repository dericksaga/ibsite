<script type="text/javascript">
	$(function(){
		$('a')
			.css( {backgroundPosition: "0px -120px"} )
			.mouseover(function(){
				$(this).stop().animate({backgroundPosition:"(0px 0px)"}, {duration:1200})
			})
			.mouseout(function(){
				$(this).stop().animate({backgroundPosition:"(0px -120px)"}, {duration:900, complete:function(){
					$(this).css({backgroundPosition: "0px -120px"})
				}})
			})
	});
</script>
<style type="text/css">
	ul {list-style:none;margin-left:25px; padding:0; text-align:left;}
	li {margin:0;text-align:center; height:30px;padding-bottom:0px; float:left; d }
	li a {display:block;padding:0px 0px;height:100%;color:#FFF;text-decoration:none; }

	#a a {background:url(images/home.jpg) repeat; font-size:10px;}
	#b a {background:url(images/videos.jpg) repeat; font-size:10px;}
	#c a {background:url(images/fotos.jpg) repeat; font-size:10px;}
	#d a {background:url(images/programacao.jpg) repeat; font-size:10px;}
	#e a {background:url(images/noticias.jpg) repeat; font-size:10px;}
	#f a {background:url(images/contato.jpg) repeat; font-size:10px;}
</style>

<div style="width:770px; height:125px; position:absolute; margin-top:85px; *margin-top:85px; _margin-top:85px; margin-left:0px; text-align:left">
	<div style="position:absolute;><a href="index.php"><img src="images/logo.png" border="0" align="left";></a></div>
    <div style="width:669px; height:58px; position:absolute; margin-top:70px; margin-left:126px; background:url(images/fundomenu.png) no-repeat top left; text-align:left">

        <div style="float:none; margin-top:-1px; *margin-top:15px; _margin-top:15px; "> <!-- menu página inicial -->
            <ul style="padding-top:0px;">
                <li id="a" style="width:70px"><a href="index.php">&nbsp;</a></li>
                <li id="b" style="width:89px"><a href="?pg=videos">&nbsp;</a></li>
                <li id="c" style="width:82px"><a href="?pg=fotos">&nbsp;</a></li>
                <li id="d" style="width:156px"><a href="?pg=programacao">&nbsp;</a></li>
                <li id="e" style="width:109px"><a href="?pg=noticias">&nbsp;</a></li>
                <li id="f" style="width:102px"><a href="?pg=contato">&nbsp;</a></li>
          </ul>
        </div>
    	
    </div>
</div>

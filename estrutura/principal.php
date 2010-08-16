<!--<div style="width:530px; height:105px; margin-left:0px; background:red;">
	<img src="images/propaganda.jpg">
</div>
<div style="width:225px; height:105px; top:225px; position:absolute; margin-left:545px; background:red;">
	<a href="ibmodels/index.html"><img src="images/ibmodels.jpg" border="0px"></a>
</div>

--><script src="js/s3Slider.js" type="text/javascript"></script>
<script src="js/jquery.showcase.2.0.js" type="text/javascript"></script>

<?
$sql = mysql_query("SELECT * FROM conteudo_estrutura WHERE id=1");
while ($dados=mysql_fetch_array($sql)) {
?>
<div style="width:770px; height:278px; margin-top:15px; *padding-top:15px; margin-left:0px; ">
        <script type="text/javascript" src="js/jquery.showcase.2.0.js"></script> 
        <script type="text/javascript"> 
            $(function() {
                $("#showcase_left").showcase({
                    css: { width: "770px", height: "278px" },
                    animation: { interval: 4000, stopOnHover: true, easefunction: "swing", speed: 600 },
                    images: [
                        { url:"images/estrutura/1/<?=$dados[foto01]?>",
						  link:"<?=$dados[url1]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto02]?>",
						  link:"<?=$dados[url2]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto03]?>",
						  link:"<?=$dados[url3]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto04]?>",
						  link:"<?=$dados[url4]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto05]?>",
						  link:"<?=$dados[url5]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto06]?>",
						  link:"<?=$dados[url6]?>"},
                        { url:"images/estrutura/1/<?=$dados[foto07]?>",
						  link:"<?=$dados[url7]?>"},
                    ],
                    navigator: { position: "relative",
                                 css: { padding:"0px 10px", margin: "250px 0px 1px 1px" },
                                 showNumber: false,
                                 item: { 
                                     css: { height:"16px", "line-height":"16px", width:"16px", "-moz-border-radius": "0px", "-webkit-border-radius": "0px", backgroundColor: "white", borderColor:"white", margin: "1px", "text-align": "center", "vertical-align": "middle" },
                                     cssHover: { backgroundColor: "#824aab", borderColor: "white" },
                                     cssSelected: { backgroundColor: "#512aab", borderColor: "white"  }
                                 }
                    },
                    titleBar: { enabled: false }
                });
            });
        </script> 
		<div id="showcase_left"></div>
</div>
<? } ?>

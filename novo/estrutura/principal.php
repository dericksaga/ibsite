<div style="width:530px; height:105px; top:220px; position:absolute; margin-left:0px; background:red;">
	<img src="images/propaganda.jpg">
</div>
<div style="width:225px; height:105px; top:220px; position:absolute; margin-left:550px; background:red;">
	<img src="images/anuncio1.jpg">
</div>

<script src="js/s3Slider.js" type="text/javascript"></script>
<script src="js/jquery.showcase.2.0.js" type="text/javascript"></script>

<div style="width:530px; height:105px; top:340px; position:absolute; margin-left:0px; background:red;">
        <script type="text/javascript" src="js/jquery.showcase.2.0.js"></script> 
        <script type="text/javascript"> 
            $(function() {
                $("#showcase_left").showcase({
                    css: { width: "770px", height: "278px" },
                    animation: { interval: 4000, stopOnHover: true, easefunction: "swing", speed: 600 },
                    images: [
                        { url:"images/1.jpg"}, 
                        { url:"images/2.jpg"}, 
                        { url:"images/3.jpg"},
                        { url:"images/4.jpg"},
                        { url:"images/5.jpg"}
                    ],
                    navigator: { position: "relative",
                                 css: { padding:"0px 10px", margin: "250px 0px 1px 1px" },
                                 showNumber: false,
                                 item: { 
                                     css: { height:"16px", "line-height":"16px", width:"16px", "-moz-border-radius": "0px", "-webkit-border-radius": "0px", backgroundColor: "white", borderColor:"white", margin: "1px", "text-align": "center", "vertical-align": "middle" },
                                     cssHover: { backgroundColor: "red", borderColor: "white" },
                                     cssSelected: { backgroundColor: "green", borderColor: "white" }
                                 }
                    },
                    titleBar: { enabled: false }
                });
            });
        </script> 
		<div id="showcase_left"></div>
</div>

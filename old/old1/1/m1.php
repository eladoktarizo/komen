<?php
include "koneksi.php";
?>
<html>
<head>	
	<meta charset=utf-8 />
    <title>INDONESIA INTERNATIONAL WATER WEEK</title>
	<style type="text/css">
		/* external file "mybcstyle.css" begins */
		A { text-decoration:none;}
		A:link { color: blue }
		A:visited { color: blue }
		A:hover { color: red }
		 .stilmsg { font-weight:bold; font-size:12px; text-align:center; font-family: "Arial", "Helvetica", sans-serif; color:navy;}
		 .stilefss {font-weight:bold; font-size:8px; font-family: "Arial", "Helvetica, sans-serif"; text-align:center; color:blue;}
		/* end of external file "mybcstyle.css" */
	</style>
	<script language="javascript">

/* external file "mybcparmsg.txt" begins */
// begin: Belt Conveyer's Parameters
//========================
//PATTERN: SINGLE or MORE. How many messages may reside within scrolling area
// while PAUSING: 0 for SINGLE: only one;  1 for More: as many as they fit in the area; 
var bmsgnr=0;

//If chosen bmsgnr=1 above, the "stilmsg" in STEP I must have "text-align:left".
//A 20px wide blank space is automatically inserted after every
//message. Each one will pause when reaching the left edge.
//If chosen bmsgnr=0, recommended CSS is "text-align:center",
//then any message shorter than conveyer width will be centered.
//When larger than conveyer width, automatically a 20px wide
//blank space is inserted after any such message.
//When no blank space automatically inserted is desired set below value 1:
var blanspa=0;

//First message shows up at the right edge and starts scrolling: 0
//If you want First message to pop up at the left edge (or centered based on CSS)
//set below value: 1
var rlopt=0;

//WIDTH of the Conveyer in pixels: set to your own; 
//"px" unit will automatically be set in the process, so do not write px; 
var bwidth=400; 

//HEIGHT of the Conveyer in pixels: set to your own; 
//"px" unit will automatically be set in the process, so do not write px;
//"20" is more or less for one line!
var bheight=20; 

//SPEED in pixels: the higher the faster.
var bspeed=1; 

//PAUSE between messages in milliseconds: 1000=1s; set to your own; 
var bpause = 2000; 

//BACKGROUND: either color(1) or image(2, see below ) ; 
//1.Background color: could be like: "#ffff00" or "yellow";
//set it "" for no background color;
var bbcolor="aqua";

//or 2.Background image: "imagename.ext";
//leave it "" for no image background;
var bbground="";

//BORDER for sliding area: 1, ... ;
//set it 0(zero) for no border;
var bborder=2;

//LIVE speed-change option: let it be 0 if not desired or change to 1below if desired;
//"stilefss" would be the STYLE (CSS), see STEP I above;
//belcolor would be background color for the area;
var bsopt = 0;
if(bsopt==1){
var besclass='class="stilefss"';
var belcolor='#ccffcc';
}
//end Parameters 

// begin: Belt Conveyer's Messages/Images - 

//Messages: as many/few as you'd like: set to your own; 
//Every message MUST be set as a continuous string within '...';
//you may split it by using '+ at ends and then ' at continuations;
//Inside any message you MUST use \' in lieu of ' if need be!
//You may use as many "&+n+b+s+p;" as you'd need to space 
//within messages - quotes and plus signs don't belong there! 
//Any message may have inside tags like <b>, <font>, ..., but no
//line breakers such as <br>, <div>, <table>, if it's one row scroll.
//Images stand alone or used within a message - preload is recommended:
//preloadname = new Image();
//preloadname.src = "imagename.ext";
//sglm[..]='< ... ><img width="..." ... src='+preloadname.src+' /><...>';
//width parameter above is a MUST for every image - may be different;

var sglm=new Array();
sglm[0]='1) bmsgnr:0 => Singles ~ - ~ bmsgnr:1 => More ~ - ~ <font color="red"><em>Messages herein pause Singles</em></font>';
sglm[1]='2) nr.2 to nr.7 <font color="red"><em>shorter & centered</em></font>';
sglm[2]='3) Another short!';
sglm[3]='4) One more!';
sglm[4]='5) <em>Hyperlink:</em> <a  href="#" OnClick=\'javascript:void(secwin=window.open("http://vbarsan.com/","a_new","toolbar=no,menubar=no,scrollbars=yes,status=no,fullscreen=no,resizable=yes,width=800,height=600,top=0,left=0,screenX=0,screenY=0"));secwin.self.focus();\'>'+
'Site Map</a>';
sglm[5]='6) nr.1 & nr.8: <font color="red"><em>longer than width</em></font>';
sglm[6]='7) <font color="red"><em>20px wide</em></font> between nr.8 & nr.1';
sglm[7]='8) Pauses every message either centered or at left edge - while mouse is placed over also';
//    ...
//sglm[...]='...';
//end Messages 
/* end of external_remote file "mybcparmsg.txt" */

</script>
<script language="javascript" type="text/javascript" src="mybcbody.js"></script>
</head>
<body onload="startbcscroll();">

</body>
</html>	
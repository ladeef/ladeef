



<!-- Copyright 2002-2004 Latitude Geographics Group Ltd. www.geocortex.net/copyright -->
<!doctype html public "-//w3c//dtd html 3.2//en"><html><!-- InstanceBegin template="/Templates/tutorial.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
    <title>IMF Tutorial: GIS Concepts</title>
    <!-- InstanceEndEditable -->
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<link rel="stylesheet" type="text/css" href="css/compassCSS.css">
<script src="js/compassDescription.js" type="text/javascript"></script>
<script type='text/javascript'>
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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

chgHeight(); 
var isToolsFunctionsPage = false;
//-->
</script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable --> 
</head>

	<body id="bodyCompass" onLoad="loadPage(); toggleDesc(); MM_preloadImages('img/nav/taskBasedHelp_over.jpg','img/nav/tutorial_over.jpg','img/nav/toolsFunctions_over.jpg');">	
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="tableHeader">
				<tr id="top">		
					<td height="46" align="left" valign="top"><A NAME="topmenu"></A><img src="img/headerLeft.jpg" style="float:left;"></td>
					<td style="background-image: url(img/headerMiddle.jpg); background-repeat: repeat-x; width: 100%;"></td>
					<td><img src="img/headerRight.jpg" style="float:right;"></td>
				</tr>
				<tr>
				  <td height="16" align="left" valign="top" colspan="3">
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td align="left" valign="top"><a href="gcx_tut0.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('tutorial','','img/nav/tutorial_over.jpg',1)"><img src="img/nav/tutorial.jpg" alt="Tutorial" name="tutorial" border="0"></a></td>
					  <td align="left" valign="top"><a href="taskBasedHelp.jsp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('stepByStep','','img/nav/taskBasedHelp_over.jpg',1)"><img src="img/nav/taskBasedHelp.jpg" alt="Step By Step" name="stepByStep" border="0"></a></td>
					  <td align="left" valign="top"><div id="divToolsAndFunctionsTab" class="divHidden"><a href="gcxCompass.jsp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('toolsFunctions','','img/nav/toolsFunctions_over.jpg',1)"><img src="img/nav/toolsFunctions.jpg" alt="Tools and Functions" name="toolsFunctions" border="0"></a></div></td>					  
					  <td align="left" valign="top"><img src="img/nav/spacer_right.jpg"></td>
					  <td width="100%">
						  <div id="navBack" class="divHidden"><a href="javascript:goBack()"><img src="img/nav/back.jpg" id="backImg"></a></div>					  </td>
					</tr>
				  </table> 
				</td>
				</tr>
    		</table>
			<div id="content">
			<a name="top" id="top"></a>					
				<div class="divTutorialContent">				
			<!-- InstanceBeginEditable name="main" -->	
                    <h1>Task Based Help</h1>
                    <p>In addition to the basic <a href="gcx_tut1.html">concepts</a>, <a href="gcx_tut2.html">tools for map navigation</a> and <a href="gcx_tut3.html">tools to explore map information</a> 
                    (we recommend taking the <a href="gcx_tut0.html">short tutorial</a> to learn all this), Geocortex-based web maps provide a variety 
                    of tools and features to accomplish some amazing things and get answers to a multitude of 
                    geographic-related questions. Here's a list: </p>
                    <ul id="taskBased">
                        <p> <b>Important GIS Concepts:</b>
                        <LI><a href="gcx_tut1.html#concept1">Features have attributes</a></LI>
                        <LI><a href="gcx_tut1.html#concept2"> Information is separated into layers</a></LI>
                        <p> <b>General Map Instructions:</b>
                        <LI><a href="gcx_tut2.html#viewer">Become familiar with the map window</a></LI>
                        <LI><a href="gcx_tut2.html#navigating">Navigate around maps</a></LI>
                        <LI><a href="gcx_tut3.html#layers">Turn layers on and off and make a layer active </a></LI>
                        <LI><a href="gcx_tut3.html#identify">View attribute information</a></LI>
                        <LI><a href="tabs/legend.html">Display or remove a legend</a></LI>
                        <LI><a href="tabs/keyMap.html">Display or Remove a Key Map</a></LI>
                        <LI><a href="tabs/bookmarks.html">Using Bookmarks</a></LI>
                        <LI><a href="tabs/printPDF.html">Print a map</a></LI>
                    </ul>
                    <div class="divHidden" id="divAdvancedTaskFunctions">
                         <ul id="taskBased">
                            
                        </UL>
                    </div>				
					
			
                    <!-- InstanceEndEditable -->
			  </div>
			</div>			
			<div class="divHidden" id="divAdvancedTaskFunctions"></div>
			<table width="100%" cellspacing="0" cellpadding="2" id="tableFooter">
			  <tr>
				<td id="tdFooterObject" class="footer">
				</td>
			  </tr>
			</table>	
	</body>
<!-- InstanceEnd --></html>

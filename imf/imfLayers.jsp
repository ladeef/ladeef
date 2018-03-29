
<!--
     Copyright (c) 2001 - 2015 Province of British Columbia, Canada
     All Rights Reserved

     This material is owned by the Government of British Columbia and protected
     by copyright law. It may not be reproduced or redistributed in whole or in
     part without the prior written permission of the Province of British Columbia.
-->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Error</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<link href="imfStyle.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript">
var dHidden = parent.frames["hiddenFrame"];
if (dHidden == null) {
  self.opener.parent.location.href = location.href;
  window.close();
} else {
  if (parent.location != location) {
    parent.location.href = location.href;
  }
}
function reconnect() {
  self.location.href = '?';
} 
</script>
</head>
<body bgcolor="#FFFFFF">
<center>
<table width="100%" class="bn9">
<tr><td height="25"></td></tr>

<tr><td align="center" class="bb14">Session Timeout</td></tr>
<tr><td height="25"></td></tr>
<tr><td align="center" class="bn9">
Your session has timed out. To reconnect, press the button below.
<p><input type="button" name="btnOK" onclick="reconnect()" value="Reconnect">
</td></tr>

</table>
</center>
</body>
</html>

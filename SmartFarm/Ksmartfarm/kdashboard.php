<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="Untitled1.css" rel="stylesheet">
<link href="Dashboard.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[href*='#about']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#about').offset().top-50 }, 600, 'easeInQuad');
   });
});
</script>
</head>
<body>
<a href="http://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250"></a>
<table style="position:absolute;left:124px;top:310px;width:468px;height:31px;z-index:3;" id="Table1">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">ಮಣ್ಣು ಮತ್ತು ತೇವಾಂಶ</span></td>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></td>
</tr>
</table>
<table style="position:absolute;left:124px;top:398px;width:472px;height:27px;z-index:4;" id="Table2">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> ತಾಪಮಾನ</span></td>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></td>
</tr>
</table>
<table style="position:absolute;left:124px;top:475px;width:472px;height:25px;z-index:5;" id="Table3">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> HUMIDITY</span></td>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></td>
</tr>
</table>
<table style="position:absolute;left:124px;top:550px;width:472px;height:31px;z-index:6;" id="Table4">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> % of WATER LEVEL IN TANK</span></td>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span></td>
</tr>
</table>
<form action="CRdetails.php">
<input type="submit" id="Button1" name="Crop Rotation" value="Crop Rotation" style="position:absolute;left:546px;top:649px;width:289px;height:25px;z-index:7;">
</form>
<div id="about" style="position:absolute;text-align:center;left:14px;top:780px;width:970px;height:254px;z-index:8;">
<div id="about_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text3" style="position:absolute;left:110px;top:44px;width:695px;height:167px;text-align:center;z-index:0;">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:27px;"><strong>ABOUT<br></strong></span><span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:24px;">Our idea tries to digitalise farming and agricultural activities so that farmers can check on their crops and accurately predict the growth.</span><span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:21px;"><br><br></span></div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Heading1" style="display:inline-block;width:100%;text-align:center;z-index:1;">
<h1 id="Heading1">SMART FARM<br></h1>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
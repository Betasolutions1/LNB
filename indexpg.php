<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
var minW = 530;

$(function () {
CheckSizeZoom()
$('#divWrap').css('visibility', 'visible');
});
$(window).resize(CheckSizeZoom)

function CheckSizeZoom() {
if ($(window).width() > minW) {
var zoomLev = $(window).width() / minW;

if (typeof (document.body.style.zoom) != "undefined") {
$(document.body).css('zoom', zoomLev);
$(document.body).width($(window).width() / zoomLev);
$(document.body).css('position', 'relative');
}
else {
// Mozilla doesn't support zoom, use -moz-transform to scale and compensate for lost width
$('#divWrap').css('-moz-transform', "scale(" + zoomLev + ")");
$('#divWrap').width($(window).width() / zoomLev + 10);
$('#divWrap').css('position', 'relative');
$('#divWrap').css('left', (($(window).width() - minW - 16) / 2) + "px");
$('#divWrap').css('top', "-19px");
$('#divWrap').css('position', 'relative');
}
}
else {
$(document.body).css('zoom', '');
$('#divWrap').css('position', '');
$('#divWrap').css('left', "");
$('#divWrap').css('top', "");
$('#divWrap').css('-moz-transform', "");
$('#divWrap').width("");
}
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fit width test</title>
<style type="text/css">
<!--
@media(min-width:1254px) and (max-width:480px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
    background-color: #CCC;
}
}
@media(min-width:320px) and (max-width:480px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 10px;
    padding: 10px;
    color: #000;
    background-color: #CCC;
}
}
@media(min-width:360px) and (max-width:640px){
body {
	height:80%;
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0px;
    padding: 0px;
    color: #000;
    background-color: #CCC;
	position:fixed;
	overflow:hidden
}
}
@media(min-width:768px) and (max-width:1280px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
    background-color: #CCC;
}
}
@media(min-width:800px) and (max-width:1280px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
    background-color: #CCC;
}
}
@media(min-width:1280px) and (max-width:600px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
    background-color: #CCC;
}
}
@media(min-width:1920px) and (max-width:900px){
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
    background-color: #CCC;
}
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
    padding: 0;
    margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
    /* [disabled]margin-top: 0; */     /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
    padding-right: 15px;
    padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
    border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
    color: #42413C;
    text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
    color: #6E6C64;
    text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
    text-decoration: none;
}

/* ~~ this fixed width container surrounds all other elements ~~ */
.container {
    width: 530px;
    background: #FFF;
    margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {

    padding: 10px 0;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
    float: right;
    margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
    float: left;
    margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
    clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
#divWrap .container .content div {
    color: #FFF;
    background-color: #999;
    position: fixed;
    width: 100%;
    top: -15px;
}
-->
</style></head>

<body>

<div id="divWrap" style="visibility: hidden">

<div class="container">
  <div class="content">
    <div>
      <h1>Fit width test</h1>
    </div>
    <h1>&nbsp;</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a turpis metus. Maecenas ultrices neque et lectus rhoncus eu aliquam nisi sodales. Vivamus pulvinar eleifend posuere. Maecenas pulvinar sollicitudin elit eget egestas. Donec id diam tellus. Maecenas eu odio lectus. Nulla facilisi. Aliquam ligula arcu, congue in consectetur vel, fermentum eu orci.</p>
    <p><img src="billeder/fit_width_test.png" alt="" width="500" height="500" /></p>
  </div>
</div>
</div>
</body>
</html>
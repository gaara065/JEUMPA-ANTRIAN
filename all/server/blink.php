<div id="blink1" class="highlight">New item!</div>
<script type="text/javascript">
<!--
// blink "on" state
function show()
{
	if (document.getElementById)
	document.getElementById("blink1").style.visibility = "visible";
}
// blink "off" state
function hide()
{
	if (document.getElementById)
	document.getElementById("blink1").style.visibility = "hidden";
}
// toggle "on" and "off" states every 450 ms to achieve a blink effect
// end after 4500 ms (less than five seconds)
for(var i=900; i < 4500; i=i+900)
{
	setTimeout("hide()",i);
	setTimeout("show()",i+450);
}
-->
</script>
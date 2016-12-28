$('#myDiv').css('background-image', 'my_image.jpg');
// OR
$('#myDiv').css('background', 'path/to/image.jpg');
// OR
$('#myDiv').css("background-image", "url(/myimage.jpg)");  

<br /><br />
<h2>A Full Code Example - Set Div Background Image</h2>
This is a full example of jQuery Code to set a background image into a div dynamically when the page is loaded.

[code lang="js"]
<script type='text/javascript'>
$(document).ready(function() {
	//preload image (add timestamp to prevent cache)
	var newimgsrc = 'https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/jquery4u/2011/03/jquery-plugins2.jpg?' + (new Date().getTime());
	var newimg = $('#header');
    //replace the image
	$('#header').css("background-image", "url("+newimgsrc+")");
	newimg.css({'background-image': 'url('+newimgsrc+')', 'position': 'absolute', 'height': '70px', 'width': '200px', 'top': '68px', 'right': '2px'});
	newimg.show();
});
</script>
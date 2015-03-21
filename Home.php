<?php
include  'function.php';
$comments;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/colorbox.css" />
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager'
	});
});
</script>
<script>
			$(document).ready(function(){				
				$(".inline").colorbox({inline:true, width:"60%"});

               	$("#submitbtn").on('click',function() {

             	var url = "comment.php"; // the script where you handle the form input.
               	var datas= $("#commentform").serialize();
				$.ajax({
				   type: "POST",
				   url: url,
				   data: datas, // serializes the form's elements.
				   success: function(data)
				   {
					 	$("#comments").load("commenthtml.php");       					  
				   }
				 });
    			return false; // avoid to execute the actual submit of the form.
				});
			});
</script>
<title>Popup Example</title>
</head>
<body>
<div class="menu-wr">
  <ul class="menu">
    <li><a class='inline' href="#invite">Invite</a></li>
    <li><a class='inline' href="#vivek">Vivek</a></li>
    <li><a class='inline' href="#eshita">Eshita</a></li>
    <li><a class='inline' href="#gallery">Gallery</a></li>
    <li><a class='inline' href="#comments">Comments</a></li>
  </ul>
</div>
<div style='display:none'>
  <div id='invite'>
    <p>Dummy Content1</p>
  </div>
</div>
<div style='display:none'>
  <div id='vivek'>
    <div class="profile clearfix">
      <div class="left-img"><img src="images/the-guy - Copy.jpg" alt="" /></div>
      <div class="right-content">"text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text "</div>
    </div>
  </div>
</div>
<div style='display:none'>
  <div id='eshita'>
    <p>"text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text text here more text "</p>
  </div>
</div>
<div style='display:none'>
  <div id='gallery'>
    <ul class="bxslider">
      <li><img src="images/slide1.jpg" /></li>
      <li><img src="images/slide2.jpg" /></li>
      <li><img src="images/slide3.jpg" /></li>
      <li><img src="images/slide4.jpg" /></li>
    </ul>
    <div id="bx-pager"> <a data-slide-index="0" href=""><img src="images/slide1.jpg" style="width:73px;" /></a> <a data-slide-index="1" href=""><img src="images/slide2.jpg" style="width:73px;" /></a> <a data-slide-index="2" href=""><img src="images/slide3.jpg" style="width:73px;" /></a> <a data-slide-index="3" href=""><img src="images/slide4.jpg" style="width:73px;" /></a> </div>
  </div>
</div>
<div style='display:none'>
  <div id="comments" class="clearfix">
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'eshita-vivek';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
  </div>
</div>
</body>
</html>

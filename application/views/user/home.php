<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home</title>
<style type="text/css">
.buttonH:hover {
	background-color:maroon;
    color: white;
}


.buttonFunction {
    border: none;
    background-color:black;
    font-weight:bold;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    border-radius: 12px;
}
</style>
</head>

<body style="margin-top:3.5%;background-color:black" >
	<br/>
<div class="w3-content w3-display-container" >
	<div class="row" >
		<div class="col-sm-12" align="center" >
		<div style="background-color:black;width:100%">
			<a href="#"><img class="mySlides" src="http://localhost/roomBooking/img/event1.png" style="width:55%"/></a>
			<a href="#"><img class="mySlides" src="http://localhost/roomBooking/img/event2.png" style="width:55%"/></a>
			<a href="#"><img class="mySlides" src="http://localhost/roomBooking/img/event3.png" style="width:55%"/></a>

			<input type="image" src="http://localhost/roomBooking/img/back.png" onclick="plusDivs(-1)"  alt="Submit" width="30" />
			<input type="image" src="http://localhost/roomBooking/img/next.png" onclick="plusDivs(1)" alt="Submit" width="30"/>
					</div>
			</div>  
	</div>
<!------JavaScript to do the Slide Show------>
<script type="text/javascript">
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div align="center" >

</div>

<div >
<br/>
</div>
</div>
</body>

</html>

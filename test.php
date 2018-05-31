<!DOCTYPE html>
<html lang="en">
<head>
<title>BayBay - Đặt vé và bay ngay"</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BayBay - Đặt vé và bay ngay" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->

<link href="css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->

<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css --> 

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- banner css -->
<link rel="stylesheet" href="css/poposlides.css" type="text/css" media="all" />
<!-- //banner css -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->
<style>
	.resultTableHeader{
		padding: 15px 50px;
		border-top: 1px solid #f0f0f0;
		border-bottom: 1px solid #f0f0f0;
		color: #727272;
		overflow: hidden;
	}
</style>
</head>
	
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 
<table>
	<tr>
		<td class="resultTableHeader">Hãng hàng không</td>
		<td class="resultTableHeader">Khởi hành</td>
		<td class="resultTableHeader">Đến nơi</td>
		<td class="resultTableHeader">Thời gian bay</td>
		<td class="resultTableHeader">Giá một vé</td>
	</tr>
</table>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#daNgayBay" ).datepicker();
		});
	</script>
<!-- //Calendar -->
		
<!-- for banner js file-->
<script src="js/poposlides.js"></script>
	<script>
		$(".slides").poposlides();
	</script>
<!-- //for banner js file-->

<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});														
	});
</script>
<!--//pop-up-box -->

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {								
		$().UItoTop({ easingType: 'easeOutQuart' });								
	});
</script>
<!-- //here ends scrolling icon -->

<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
<!-- //fixed-scroll-nav-js --> 
		
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type="text/javascript">

function getOffset(el) {
  el = el.getBoundingClientRect();
  return {
    left: el.left + window.scrollX,
    top: el.top + window.scrollY
  }
}
function showPicker() {
	window.location.href = "#small-dialog";
}
</script>
</body>
</html>
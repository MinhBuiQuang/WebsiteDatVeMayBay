<div class="footer-agile">
		<div class="container">
			<div class="footer-btm-agileinfo">
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3>About us</h3>
					<p class="footer-p1">Chúng tôi cung cấp vé máy bay với giá tốt nhất cho mọi người.</p>
					<a href="#">read more <span class="fa fa-long-arrow-right"></span></a>
				</div>
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="fa fa-phone"></i>+012 345 6789</li>
						<li><i class="fa fa-fax"></i>+987 654 3210</li>
						<li><i class="fa fa-map-marker"></i>175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội..</li>
						<li><i class="fa fa-envelope-o"></i><a href="mailto:example@mail.com">mail@example.com</a></li>
						<li><i class="fa fa-envelope-o"></i><a href="mailto:example@mail.com">mail1@example1.com</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-xs-3 footer-grid w3social">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#page-top">Trang chủ</a></li>
						<li><a href="#about" class="scroll">Giới thiệu</a></li>
						<li><a href="#packages" class="scroll">Hình ảnh</a></li>
						<li><a href="#contact" class="scroll">Liên hệ</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-xs-3 footer-grid">
					<h3>Latest Tweets</h3>
					<ul class="tweet-agile">
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://ax.by/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1"><a href="mailto:support@company.com">@example</a> sit amet consectetur adipiscing. <a href="#">http://cx.dy/zzzz</a></p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
				</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-agilem">
				<div class="col-sm-8 col-xs-9 copy-w3lsright">
					<p>© 2017 Tourist. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
				</div>
				<div class="col-sm-4 col-xs-3 social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>
<!-- //footer end here -->

<!-- popup signup form -->
	<div class="wthree_pop_up"> 
		<div id="small-dialog" class="mfp-hide agile_signup_form">
			<h2>BOOK OUR TRAVEL TOURIST</h2>
			<form action="#" method="post">
			
				<div class="form-control"> 
					<label class="header1">Traveller Name <span>:</span></label>
					<input type="text" id="firstname" name="firstname" placeholder="Full Name" title="Please enter your Full Name" required="">
				</div>
				
				<div class="form-control">
					<label class="editContent">Travel Location <span>:</span></label>
						<select class="form-control">
							<option>London</option>
							<option>Paris</option>
							<option>India</option>
							<option>Japan</option>
							<option>America</option>
						</select>
				</div>

				<div class="form-	control">	
					<label class="header1">Email Address <span>:</span></label>
					<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
				</div>

				<div class="form-control">	
					<label class="header1">Phone Number <span>:</span></label>
					<input type="tel" id="tel" name="tel" placeholder="Phone number" title="Please enter a valid Phone number" required="">
				</div>
				
				<div class="form-control">	
					<label class="editContent">Journey start date <span>:</span></label>
					<input class="date has Datepicker" id="datepicker" name="Text" type="text" value="Start Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '21/11/2017';}" required="">
				</div>
				
				<div class="form-control">	
					<label class="editContent">Journey return date <span>:</span></label>
					<input class="date has Datepicker" id="datepicker" name="Text" type="text" value="Return Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '21/11/2017';}" required="">
				</div>

				<div class="form-control">
					<label class="editContent">No: of travellers <span>:</span></label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5 or more</option>
						</select>
				</div>
				<div class="w3_submit">
					<input type="submit" class="register" value="Submit">
				</div>
				
			</form>
		</div>
	</div>

	<div class="wthree_pop_up"> 
		<div id="picker" class="mfp-hide agile_signup_form">			
		<div class="col-md-2">
				<label class="editContent"><span class="fa fa-user" aria-hidden="true"></span> Số người</label>
			<div class="agileits_w3layouts_main_gridl">
				<input class="text" id="txtSoLuong" name="songuoi" type="text" onfocus="showPicker()" required="">
			</div>
		</div>
		</div>
	</div>

	
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#daNgayBay" ).datepicker({
				dateFormat: 'dd/mm/yy' 
			});
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
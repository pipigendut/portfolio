	<!--/foorer-->
	<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
			<h3>Contact Me</h3>
			<div class="mail_grids_wthree_agile_info">
				<div class="col-md-7 mail_grid_right_agileits_w3">
					<h5>Please fill this form to contact with us.</h5>
					<form action="#" method="post">
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<h5>Contact Info</h5>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Visit me</h4>
							<p><?=$alamat?></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-us">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Mail me</h4>
							<p><a href="mailto:info@example.com"><?=$email?></a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Call me</h4>
							<p><?=$nohp?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //mail -->
	<!-- /contact -->
	<div class="copy">
		<p>&copy; 2018 Akbar. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
	</div>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="<?php echo base_url();?>assets/home/js/main.js"></script>
	<!--//search-bar-->

	<!-- js for portfolio lightbox -->
	<script src="<?php echo base_url();?>assets/home/js/jquery.chocolat.js "></script>
	<link rel="stylesheet " href="<?php echo base_url();?>assets/home/css/chocolat.css " type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->
	<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/jquery-ui.css" />
	<script src="<?php echo base_url();?>assets/home/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- time -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!-- //time -->

	<script src="<?php echo base_url();?>assets/home/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="<?php echo base_url();?>assets/home/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/bootstrap-3.1.1.min.js"></script>



<!-- Modal -->
<div class="modal fade" id="loginForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">LOGIN ADMIN</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="<?php echo base_url();?>index.php/panel/author" method="post" name="loginform" role="form">
                    <div class="form-group">
                        <label for="masukkanNama">Username</label>
                        <input type="text" class="form-control" name="username" id="username" class="input-text" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanEmail">Password</label>
                        <input type="password" class="form-control" name="password" id="password" class="input-text" placeholder="Password"/>
                    </div>
                    <div class="checkbox">
              			<label>
                		<input type="checkbox" value="remember-me"> Remember me
              			</label>
            		</div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submitBtn">LOGIN</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="userForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">LOGIN USER</h4>
                <h6>Username : user</h6>
                <h6>password : user123</h6>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="<?php echo base_url();?>index.php/panel/author" method="post" name="loginform" role="form">
                    <div class="form-group">
                        <label for="masukkanNama">Username</label>
                        <input type="text" class="form-control" name="username" id="username" class="input-text" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="masukkanEmail">Password</label>
                        <input type="password" class="form-control" name="password" id="password" class="input-text" placeholder="Password"/>
                    </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary submitBtn">LOGIN</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
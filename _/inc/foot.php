<div class="fade">
<div class="row" id="contact-us">
	<div id="contact-area" class="editable typeset colspan12-3 colspan6-2 colspan2-2 as-grid">
		<h4>Contact Us</h4>
		<p>
			<b>Ecolite</b> <br>
			Toll Free: 800.755.0555 <br>
			Local: 509.922.8888 <br>
			Fax: 509.922.8866
		</p>
	</div>
	<div id="get-quote" class="typeset colspan12-9 colspan6-4 colspan2-2 as-grid with-gutter">
		<div class="editable" id="quote-area">
			<h4>Get a Quote</h4>
			<p>Send us a message with a description of your project and we will get in touch with you about it.</p>
		</div>
		<form id="contact" action="contact-submit.php" method="post">
		<fieldset>	
			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
				<label for="name">Name</label>
				<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
			</div>

			<div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
				<label for="phone">Phone</label>
				<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
			</div>

			<div class="formblock clear">
				<label for="email">E-mail</label>
				<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
			</div>
			
			<div class="formblock clear">
				<label for="message">Message</label>
				<textarea required name="message" placeholder="Your message" ></textarea>
			</div>
			
			<input type="submit" name="submit" class="button btn striped" id="submit" value="Send Message" />
		</fieldset>
		</form>
	</div>
</div>
</div>
<footer class="pagefoot">
	<div id="footer-area" class="editable row">
		Copyright® 2014 Ecolite. All rights reserved.
	</div>
</footer>
</div>

<div class="remodal" id="fabric" data-remodal-id="fabric">

	<div id="our-work" class="window">
		<div id='port1' class='swipe'>
			<ul id="port1-wrap" class='swipe-wrap editable-gallery' data-links="false">
				<li><img src="media/photos/fabric/a1.jpg" alt=""></li>
				<li><img src="media/photos/fabric/a2.jpg" alt=""></li>
				<li><img src="media/photos/fabric/a3.jpg" alt=""></li>
				<li><img src="media/photos/fabric/a4.jpg" alt=""></li>
				<li><img src="media/photos/fabric/a5.jpg" alt=""></li>
				<li><img src="media/photos/fabric/a6.jpg" alt=""></li>
			</ul>
		</div>
	</div>
	<div id="fabric-content" class="modal-content editable typeset">
		<div class="to-right next-prev">
			<button class="prev" onclick='port1.prev()'>«</button> 
			<button class="next" onclick='port1.next()'>»</button>
		</div>
		<h1 class="headline">Fabric</h1>
		<p>Vestis fabric awnings offer a visually-appealing means to protect your visitors and customers. We fabricate all of our awnings with sturdy aluminum tube frames that carry a 10-year-prorated-fram workmanship warranty. Additionally, our fabric awnings can be covered in vinyl or acrylic fabric, and for new awnings. Our team also has the capability to create digital renderings to help visualize the value your awning will add to your business. Our fabric awnings even reduce energy consumption with their cooling capabilities. Since our fabric does not trap heat and moisture, your awning will save you upwards of 25% on your air conditioning costs each year.</p>
		<div class="row__colspaced">
		<div class="half-col as-grid with-gutter">

				<figure>
					<img src="media/photos/portfolio/psingle6.jpg" alt="">
					<figcaption>
						<h6 class="type">Commercial</h6>
						<h4 class="title">Dock Slip Covers</h4>
					</figcaption>
				</figure>

			<p class="description">Vestis Systems has the ability to design, fabricate and install dock slip covers. Frames and covers can be custom manufactured to cover one dock slip or an entire marina.
<br>
For the frames we use a high grade aluminum. The covers can be constructed using either acrylic or vinyl fabric.
<br>
All Vestis Systems frames carry a 10-year prorated frame workmanship warranty.</p>
		</div>
		<div class="half-col as-grid with-gutter">

				<figure>
					<img src="media/photos/portfolio/psingle4.jpg" alt="">
					<figcaption>
						<h6 class="type">Commercial</h6>
						<h4 class="title">Walkway Canopies</h4>
					</figcaption>
				</figure>

			<p class="description">Walkway canopies will help protect your customers and employees from the harsh weather of the Inland NW. Walkway canopies are most commonly used for small businesses, doctor offices and restaurants.
<br>
Vestis Systems will work with the customer on the design of new canopies. Once we have your approval, we order materials, schedule an install date and begin the manufacturing process.
<br>
For your new walkway awning, Vestis Systems has the ability to design graphics or use existing graphics. In addition, our team has the capability to create shop drawings and digital renderings to help visualize what your new awnings will do for your business.
<br>
Vestis Systems builds all our awnings and canopies using high grade aluminum frames and fabric. All Vestis Systems frames carry a 10-year prorated frame workmanship warranty.</p>
		</div>
		</div>
	</div>
	<div id="fabric-quote" class="editable call-out endcap">
		<i>Interesting Fact:</i>
		<blockquote class="extra">Awnings are energy savers with 8-15 degrees cooling capability. Awnings reduce solar heat gains up to 65% on south-facing windows and 77% on west-facing windows. Since awning fabric does not trap heat and moisture, an awning can reduce air conditioning costs by as much as 25%.</blockquote>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="_/js/responsive-nav.min.js"></script>
<!-- <script src="_/js/responsive-accordion.min.js"></script> -->
<script src="_/js/jquery.remodal.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
	var navigation = responsiveNav(".nav-collapse", {
		customToggle: "#nav-toggle"
	});
			window.mySwipe = $('.swipe').Swipe().data('Swipe');

		var port1 = new Swipe(document.getElementById('port1'), {
			disableScroll: false,
			stopPropagation: true,
		});
		var port2 = new Swipe(document.getElementById('port2'), {
			// auto: 19000,
			disableScroll: false,
			stopPropagation: true,
		});
		var port3 = new Swipe(document.getElementById('port3'), {
			// auto: 15000,
			disableScroll: false,
			stopPropagation: true,
		});
		var port4 = new Swipe(document.getElementById('port4'), {
			// auto: 15000,
			disableScroll: false,
			stopPropagation: true,
		});
		var port5 = new Swipe(document.getElementById('port5'), {
			// auto: 15000,
			disableScroll: false,
			stopPropagation: true,
		});


	$('.product-btn').on('click', function(){
		//$(this).find('a').trigger('click');

	});

</script>


<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
	$(function(){
		$('#contact').validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					url: 'contact-submit.php',
					success: function() {
						$('#contact').hide();
						$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
					}
				});
			}
		});
	});
</script>

<script src="_/js/plugins.min.js"></script>
<script src="_/js/jquery.finalTilesGallery.min.js"></script>
<script src="_/js/imagesloaded.min.js"></script>
<script src="_/js/headhesive.min.js"></script>
<script src="_/js/bind-polyfill.min.js"></script>
<script src="_/js/smooth-scroll.min.js"></script>
<script src="_/js/script.min.js"></script>

<script>
$(document).ready( function() {

		smoothScroll.init();

        // Set options
        var options = {
            offset: '#showHere',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);

        // Headhesive destroy
        // banner.destroy();


	$('#gallery-items li').each(function(){
		var theTag = $(this).find('img').attr('alt').replace(" ", "-");

		if ( theTag != '') {
			$(this).addClass( 'ftg-' + theTag );
		}

		var theLink = $(this).find('a').attr('href');

		if ( theLink != '') {
			$(this).find('img').attr('src', theLink);
		}
	});

       	// Don't execute if we're in the Live Editor
	if( !window.isCMS ) {

	$('#testimony').addClass('swipe');

	var testimony = new Swipe(document.getElementById('testimony'), {
		auto: 15000,
		disableScroll: false,
		stopPropagation: true,
	});

	$('#gallery-items li').addClass('tile');
	$('#gallery-items li a').addClass('tile-inner');
	$('#gallery-items li a img').addClass('item');

	if ($(window).width() > 960) {
		$('#gallery').finalTilesGallery({
		    gridCellSize: 5,
		    minTileWidth: 100,
		    imageSizeFactor: .5,
		    hoverEffect: 'slide-left',
		    scrollEffect: 'slide'
		});
		} else {
			$('#gallery').finalTilesGallery({
			    gridCellSize: 5,
			    minTileWidth: 100,
	            imageSizeFactor: .2,
			    hoverEffect: 'slide-left',
			    scrollEffect: 'slide'
		    });
		}
	    $(".tile a").magnificPopup({
		    type: 'image'
		});
	}

});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39036860-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
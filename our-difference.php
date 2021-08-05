<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'rafficmani1998@gmail.com';
      // Gmail Password
      $mail->Password = '7868832929';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('rafficmani1998@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('yaspriya958@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Request Submission';
      $mail->Body = "<h3>Name : $name <br>Mobile : $contact <br>Email : $email</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->

<!-- Mirrored from emberhouse.com/our-difference by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 06:01:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<!-- METAS -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Our Difference - Shine</title>
	<meta name="author" content="EmberHouse">
	<meta name="description" content="Wealth Advisory">
	<meta name='viewport' content='width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no'>
	<meta property="og:image" content="wp-content/themes/emberhouse/images/layout/ehfb.jpg"/>

	

	<link rel="stylesheet" href="wp-content/themes/emberhouse/bin/A.min.css.pagespeed.cf.gHTNJIqknR.css">

	
<!-- This site is optimized with the Yoast SEO plugin v4.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="our-difference.php"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Our Difference - EmberHouse"/>
<meta property="og:url" content="our-difference.php"/>
<meta property="og:site_name" content="EmberHouse"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="Our Difference - EmberHouse"/>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='http://w.sharethis.com/'/>
<link rel='dns-prefetch' href='http://s.w.org/'/>
		<script type="text/javascript">window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/emberhouse.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.18"}};!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);</script>
		<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-.1em!important;background:none!important;padding:0!important}</style>
<style id='contact-form-7-css' media='all'>div.wpcf7{margin:0;padding:0}div.wpcf7-response-output{margin:2em .5em 1em;padding:.2em 1em}div.wpcf7 .screen-reader-response{position:absolute;overflow:hidden;clip:rect(1px,1px,1px,1px);height:1px;width:1px;margin:0;padding:0;border:0}div.wpcf7-mail-sent-ok{border:2px solid #398f14}div.wpcf7-mail-sent-ng{border:2px solid red}div.wpcf7-spam-blocked{border:2px solid #ffa500}div.wpcf7-validation-errors{border:2px solid #f7e700}.wpcf7-form-control-wrap{position:relative}span.wpcf7-not-valid-tip{color:red;font-size:1em;display:block}.use-floating-validation-tip span.wpcf7-not-valid-tip{position:absolute;top:20%;left:20%;z-index:100;border:1px solid red;background:#fff;padding:.2em .8em}span.wpcf7-list-item{display:inline-block;margin:0 0 0 1em}span.wpcf7-list-item-label::before,span.wpcf7-list-item-label::after{content:" "}.wpcf7-display-none{display:none}div.wpcf7 .ajax-loader{visibility:hidden;display:inline-block;background-image:url(wp-content/plugins/contact-form-7/images/ajax-loader.gif.pagespeed.ce.r5YrN3eaRD.gif);width:16px;height:16px;border:none;padding:0;margin:0 0 0 4px;vertical-align:middle}div.wpcf7 .ajax-loader.is-active{visibility:visible}div.wpcf7 div.ajax-error{display:none}div.wpcf7 .placeheld{color:#888}div.wpcf7 .wpcf7-recaptcha iframe{margin-bottom:0}div.wpcf7 input[type="file"]{cursor:pointer}div.wpcf7 input[type="file"]:disabled{cursor:default}</style>
<link rel='stylesheet' id='ssbp_styles-css' href='wp-content/plugins/simple-share-buttons-plus/A.ssbp.min.css%2cqver%3d4.7.18.pagespeed.cf.FgBOQ9bcBV.css' type='text/css' media='all'/>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js%2cqver%3d1.12.4.pagespeed.jm.gp20iU5FlU.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js%2cqver%3d1.4.1.pagespeed.jm.C2obERNcWh.js'></script>
<script id='st_insights_js' type='text/javascript' src='../w.sharethis.com/button/st_insights0057.js?publisher=4d48b7c5-0ae3-43d4-bfbe-3ff8c17a8ae6&amp;product=simple-share-pro'></script>
<link rel='https://api.w.org/' href='wp-json/index.html'/>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/> 
<meta name="generator" content="WordPress 4.7.18"/>
<link rel='shortlink' href='index678b.html?p=12'/>
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed9d3f.json?url=http%3A%2F%2Femberhouse.com%2Four-difference"/>
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed919d?url=http%3A%2F%2Femberhouse.com%2Four-difference&amp;format=xml"/>

	<script async src="wp-content/themes/emberhouse/vendors/autotrack.js.pagespeed.jm.DdWIIeXZ7o.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../www.google-analytics.com/analytics.js','ga');ga('create','UA-97779232-1','auto','phoenix');ga('create','UA-90624846-1','auto','emberhouse');ga('phoenix.require','urlChangeTracker');ga('emberhouse.require','urlChangeTracker');ga('phoenix.send','pageview');ga('emberhouse.send','pageview');</script>
 
</head>
<body data-theme-url="http://emberhouse.com/wp-content/themes/emberhouse">

<canvas id="gradients"></canvas>

	<aside class="eh-header__side-nav eh-header__side-nav--hidden">
		<nav class="eh-side-nav">
			<ul class="eh-side-nav__list">
				<li class="eh-side-nav__item"><a href="#" class="__newsletter-popup-opener EHmonk">Signup For Management System</a></li>
				<li class="eh-side-nav__item js-scrolltop"><span><svg version="1.1" id="Layer_1" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 91.3" style="enable-background:new 0 0 36 91.3;" xml:space="preserve">
<g transform="translate(0,-952.36218)">
	<path d="M17.2,952.8l-17,16c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l15.3-14.4v86.8c0,0.6,0.4,1,1,1
		s1-0.4,1-1v-86.7l15.3,14.4c0.4,0.4,1.1,0.3,1.4,0c0.4-0.4,0.4-1,0-1.4l-17-16C18.1,952.5,17.5,952.6,17.2,952.8L17.2,952.8z"/>
</g>
</svg>
</span></li>
			</ul>
		</nav>
	</aside>

	<div class="scroller-wrapper" scrollbar>

		<header class="eh-header eh-header--hidden">
			<div class="eh-header__wrapper">
				<h1 class="eh-header__logo">
					<img src="logo.png" alt="Shine" width="200" height="100" >
					
					<a href="index.html">Shine</a>
				</h1>
				<!-- <span class="eh-header__caption">Student Care</span> -->
				<nav class="eh-header__nav eh-nav"><ul id="menu-main-menu" class="eh-nav__list">
<li class='eh-nav__item'><a href='our-story.html'>Our Story</a></li>
</li>

<li class='eh-nav__item'><a href='our-difference.php' class="current">Our Difference</a></li>
</li>

<li class='eh-nav__item'><a href='services.html'>Services </a></li>
</li>

<li class='eh-nav__item'><a href='contact.html'>Contact Us</a></li>
</li>
</ul></nav>			</div>

			<div class="eh-header__mobile-nav-wrapper">
				<div class="hamburger">
				  <span></span>
				  <span></span>
				  <span></span>
				</div>

				<nav class="eh-header__mobile-nav eh-mobile-nav">
					<a href="index.html">
						<img src="shine.png" alt="Shine" width="200" height="100" >
					</a>
						<ul class="eh-mobile-nav__list">
								<li class='eh-mobile-nav__item'><a href='our-story.html'>Our Story</a></li>
								</li>
								<li class='eh-mobile-nav__item'><a href='our-difference.php' class="current">Our Difference</a></li>
								</li>

								<li class='eh-mobile-nav__item'><a href='services.html'>Services &#038; Fees</a></li>
								</li>

								<li class='eh-mobile-nav__item'><a href='contact.html'>Contact Us</a></li>
								</li>
								<li class="eh-mobile-nav__item"><a href="#" class="newsletter-popup-opener EHmonk">Signup For Management System</a></li>
							<!-- <li class="eh-mobile-nav__item eh-mobile-nav__item--quizz"><a href="#" class="quizz__mobile-opener">Are we a good match ?</a></li> -->
						</ul>
				</nav>
			</div>
		</header>


		<main id="eh-wrapper">
		  <section class="eh-container" data-namespace="page-process">

  <div class="page-process">
    <section class="process-modal">
      <div class="process-modal__wrapper">
        <div class="process-modal__more">
          <div class="process-modal__icon"></div>
        </div>
        <div class="process-modal__container" scrollbar>
          <span class="process-modal__number"></span>
          <div class="process-modal__content"></div>
        </div>
      </div>
      <div class="process-modal__overlay"></div>
    </section>

    <section class="process-header container">
              <h1 class="anim-header">“We are not what we know but what we are willing to learn.”</h1>
                  <div class="scroll-icon" style="display:none;">
        <div class="scroll-icon__container">
          <span class="scroll-icon__stroke"></span>
          <span class="scroll-icon__frame"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.1 50.2" style="enable-background:new 0 0 30.1 50.2;" xml:space="preserve">
<g>
	<path class="scroll-icon__fill" d="M17.1,50.1h-4c-7.2,0-13-5.8-13-13v-24c0-7.2,5.8-13,13-13h4c7.2,0,13,5.8,13,13v24C30.1,44.3,24.3,50.1,17.1,50.1z
		 M13.1,2.1c-6.1,0-11,4.9-11,11v24c0,6.1,4.9,11,11,11h4c6.1,0,11-4.9,11-11v-24c0-6.1-4.9-11-11-11H13.1z"/>
</g>
</svg>
</span>
        </div>
        <span class="scroll-icon__text">Scroll down</span>
      </div>
    </section>

    <section class="process-tiles process-tiles__container container">
            <div class="process-tiles__item fly-away">
					<a href="#">
						<div class="process-tiles__content">
							<span class="process-tiles__number">1</span>
							<h3 class="process-tiles__title">Teachers for Students not Student for teachers.</h3>
							<!-- <div class="process-tiles__more">
								<div class="process-tiles__icon">
							</div>
							</div> -->

							<!-- <div class="process-modal__content">
								<div class="process-modal__content-header">
									<h3 class="process-modal__title"> Teachers for Students not Student for teachers.</h3>
								</div>

								<div class="process-modal__solution">
										<div class="process-solution__item">
												<h3 class="process-modal__solution-title">Why it matters:</h3>
												<span class="line"></span>
												<p class="text">
												<p>Studets will be different levels of knowledge but teachers should teach based on their levels not same way</p>
												</p>
										</div>
										<span class="process-modal__next-btn btn btn--white" href="#">Next</span>
								</div>
							</div> -->
				         </div>
				
				     </a>
          		</div>
                <div class="process-tiles__item fly-away">
					<a href="#">
					<div class="process-tiles__content">
						<span class="process-tiles__number" >2</span>
						<h3 class="process-tiles__title">Understanding the concepts,Questioning the teachers ,then teachers can conduct the test and exam.</h3>
										
					</div>
					</a>
 				</div>
                <div class="process-tiles__item fly-away">
					<a href="#">
					<div class="process-tiles__content">
						<span class="process-tiles__number">3</span>
						<h3 class="process-tiles__title">Counselling the students once in the month by experienced faculties(counsellors).</h3>
										
					</div>
					</a>
               </div>
                <div class="process-tiles__item fly-away">
					<a href="#">
					<div class="process-tiles__content">
							<span class="process-tiles__number">4</span>
							<h3 class="process-tiles__title">We don't compel the student to study,we are creating the habit to study happily.</h3>
										
					</div>
					</a>
               </div>
              <div class="process-tiles__item fly-away">
					<a href="#">
					<div class="process-tiles__content">
						<span class="process-tiles__number">5</span>
										<h3 class="process-tiles__title">We are giving motivatonal speech once in a month by experts or Alumini of our Shine institute those who are well positioned in the society.</h3>
										
					</div>
					</a>
               </div>
                <div class="process-tiles__item fly-away">
					<a href="#">
					<div class="process-tiles__content">
						<span class="process-tiles__number">6</span>
										<h3 class="process-tiles__title">We conduct parents meeting, not for complain the students,only for discuss how to improve our services to the students.</h3>
										
					</div>
					</a>
          		</div>
				<div class="process-tiles__item fly-away">
							<a href="#">
							<div class="process-tiles__content">
									<span class="process-tiles__number">7</span>
									<h3 class="process-tiles__title">Parents satisfication on their children's education is or first prio.</h3>
												
							</div>
							</a>
				</div>
                 
    </section>

    <section class="process-reach process-reach__container container">
      <div class="process-reach__item js-parallax" data-speed="1">
        <div class="mask">
          <h1 class="to-load">We can bring Shine to your children, too.</h1>
        </div>
	<!-- <p><a style="text-decoration:underline;" href="#" onclick="Calendly.showPopupWidget('https://calendly.com/emberhouse/free-consultation-call');return false;">Reach us for more details.</a></p> -->
        <p>Or complete this form, and we’ll contact you<br>for a free chat to make sure we’re a match. </p>
      </div>
      <div class="process-reach__item">
        <div role="form" class="wpcf7" id="wpcf7-f21-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action=" " method="post" class="wpcf7-form" novalidate="novalidate">
<p id="demo"></p>
<!-- <?= $output; ?> -->
<!-- <div style="display: none;">
<input type="hidden" name="_wpcf7" value="21"/>
<input type="hidden" name="_wpcf7_version" value="4.6"/>
<input type="hidden" name="_wpcf7_locale" value="en_US"/>
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f21-o1"/>
<input type="hidden" name="_wpnonce" value="5e6f9cb640"/>
</div> -->

<p><label> Name (required)<br/>
    <span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"/></span> </label></p>
<p><label> Email (required)<br/>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"/></span> </label></p>
<p><label> Phone<br/>
    <span class="wpcf7-form-control-wrap Phone"><input type="tel" name="contact" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"/></span> </label></p>
<!-- <p><label> Which best describes your situation?<br/>
<span class="wpcf7-form-control-wrap scenario"><select name="scenario" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="">---</option><option value="Selling/Sold Business">Selling/Sold Business</option><option value="Inheritance">Inheritance</option><option value="Retirement">Retirement</option><option value="Divorce">Divorce</option><option value="Unhappy With Current Advisor">Unhappy With Current Advisor</option><option value="Other">Other</option></select></span></label></p> -->
<p><a class="btn btn--submit">
	<input type="submit" name="submit" value="Send" onclick="myFunction()" class="wpcf7-form-control wpcf7-submit"/>
	<!-- <button onclick="myFunction()">Send</button> -->
</a></p>

<style>.wpcf7-response-output,.wpcf7-display-none,.wpcf7-mail-sent-ok,.wpcf7-validation-errors{border:0!important;padding:0!important;margin:0!important;font-size:1.5em}</style>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>      </div>
    </section>
  </div>

<!-- Calendly link widget begin -->
<link href="calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="calendly.com/assets/external/widget.js" type="text/javascript"></script>
<!-- Calendly link widget end -->
				<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">window.__insp=window.__insp||[];__insp.push(['wid',805546435]);(function(){function ldinsp(){if(typeof window.__inspld!="undefined")return;window.__inspld=1;var insp=document.createElement('script');insp.type='text/javascript';insp.async=true;insp.id="inspsync";insp.src=('https:'==document.location.protocol?'https':'http')+'://cdn.inspectlet.com/inspectlet.js';var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(insp,x);};setTimeout(ldinsp,500);document.readyState!="complete"?(window.attachEvent?window.attachEvent('onload',ldinsp):window.addEventListener('load',ldinsp,false)):ldinsp();})();</script>
<!-- End Inspectlet Embed Code -->

				</section>
			</main>

			<div id="ssbp-ellipsis-div"><span class="ssbp-x ssbp-close-ellipsis-div"></span><a href="https://simplesharebuttons.com/plus/?utm_source=plus&amp;utm_medium=plugin_powered_by&amp;utm_campaign=powered_by&amp;utm_content=plus_ellipsis" target="_blank"><img class="ssbp-ellipsis-powered-by" src="wp-content/plugins/simple-share-buttons-plus/images/xsimple-share-buttons-logo-white.png.pagespeed.ic.mEJSlAv1t_.png" alt="Simple Share Buttons"/></a><span class="ssbp-share-text">Share the Wealth!</span><ul class="ssbp-list"><li class="ssbp-li--buffer"><a href="https://bufferapp.com/add?url=http://emberhouse.com/our-difference&amp;text=%20Our%20Difference" class="ssbp-btn ssbp-buffer" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Buffer"><span class="ssbp-text">Buffer</span></a></li><li class="ssbp-li--diggit"><a href="http://www.digg.com/submit?url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-diggit" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Digg"><span class="ssbp-text">Diggit</span></a></li><li class="ssbp-li--email"><a href="mailto:?Subject=Our Difference&amp;Body=%20http://emberhouse.com/our-difference" class="ssbp-btn ssbp-email ssbp-email-popup" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Email"><span class="ssbp-text">Email</span></a></li><li class="ssbp-li--ellipsis"><a href="javascript:;" class="ssbp-btn ssbp-ellipsis" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Ellipsis"><span class="ssbp-text">More</span></a></li><li class="ssbp-li--facebook">
				<a href="http://www.facebook.com/sharer.php?u=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-facebook ssbp-facebook--standard" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Facebook"><span class="ssbp-text">Facebook</span></a></li><li class="ssbp-li--flattr"><a href="https://flattr.com/submit/auto?user_id=&amp;title=Our%20Difference&amp;url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-flattr" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Flattr"><span class="ssbp-text">Flattr</span></a></li><li class="ssbp-li--google"><a href="https://plus.google.com/share?url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-google" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Google+"><span class="ssbp-text">Google+</span></a></li><li class="ssbp-li--linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-linkedin" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="LinkedIn"><span class="ssbp-text">Linkedin</span></a></li><li class="ssbp-li--pinterest"><a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;//assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());' class='ssbp-btn ssbp-pinterest' data-ssbp-title='Our Difference' data-ssbp-url=http://emberhouse.com/our-difference data-ssbp-site='Pinterest'><span class="ssbp-text">Pinterest</span></a></li><li class="ssbp-li--print"><a href="#" class="ssbp-btn ssbp-print" onclick="window.print()" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Print"><span class="ssbp-text">Print</span></a></li><li class="ssbp-li--reddit"><a href="http://reddit.com/submit?url=http://emberhouse.com/our-difference&amp;title=Our%20Difference" class="ssbp-btn ssbp-reddit" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Reddit"><span class="ssbp-text">Reddit</span></a></li><li class="ssbp-li--stumbleupon"><a href="http://www.stumbleupon.com/submit?url=http://emberhouse.com/our-difference&amp;title=Our%20Difference" class="ssbp-btn ssbp-stumbleupon" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="StumbleUpon"><span class="ssbp-text">Stumble</span></a></li><li class="ssbp-li--tumblr"><a href="http://www.tumblr.com/share/link?url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-tumblr" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Tumblr"><span class="ssbp-text">tumblr</span></a></li><li class="ssbp-li--twitter"><a href="https://twitter.com/share?url=http://emberhouse.com/our-difference&amp;text=Our+Difference+&amp;hashtags=" class="ssbp-btn ssbp-twitter ssbp-twitter--standard" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Twitter"><span class="ssbp-text">Twitter</span></a></li><li class="ssbp-li--vk"><a href="http://vkontakte.ru/share.php?url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-vk" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="VK"><span class="ssbp-text">VK</span></a></li><li class="ssbp-li--whatsapp"><a href="whatsapp://send?text=http%3A%2F%2Femberhouse.com%2Four-difference+Our+Difference" class="ssbp-btn ssbp-whatsapp" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="WhatsApp"><span class="ssbp-text">WhatsApp</span></a></li><li class="ssbp-li--yummly"><a href="http://www.yummly.com/urb/verify?url=http://emberhouse.com/our-difference&amp;title=Our+Difference" class="ssbp-btn ssbp-yummly" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Yummly"><span class="ssbp-text">Yummly</span></a></li><li class="ssbp-li--xing"><a href="https://www.xing.com/spi/shares/new?url=http://emberhouse.com/our-difference" class="ssbp-btn ssbp-xing" data-ssbp-title="Our Difference" data-ssbp-url="http://emberhouse.com/our-difference" data-ssbp-site="Xing">
					<span class="ssbp-text"></span>
				</a>
			</li></ul>
			<div class="ssbp-input-url-div">
				<input class="ssbp-input-url" type="text" value="our-difference.php"/></div>
			</div><script>jQuery("body").on("click",".ssbp-ellipsis",function(){jQuery("#ssbp-ellipsis-div").fadeIn(500);});jQuery("body").on("click",".ssbp-close-ellipsis-div",function(){jQuery("#ssbp-ellipsis-div").fadeOut(500);});</script><div id="ssbp-email-div"><span class="ssbp-x ssbp-close-email-div"></span><div class="ssbp-email-alert" id="ssbp-email-alert"></div><input type="hidden" id="_wpnonce" name="_wpnonce" value="4bb4facfaa"/><input type="hidden" name="_wp_http_referer" value="/our-difference"/>
			
			 <a href="https://simplesharebuttons.com/plus/?utm_source=plus&amp;utm_medium=plugin_powered_by&amp;utm_campaign=powered_by&amp;utm_content=plus_email" target="_blank"><img class="ssbp-email-powered-by" src="wp-content/plugins/simple-share-buttons-plus/images/xsimple-share-buttons-logo-white.png.pagespeed.ic.mEJSlAv1t_.png" alt="Simple Share Buttons"/></a></div><script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js%2cqver%3d3.51.0-2014.06.20.pagespeed.jm.RVBOol6lkO.js'></script>
<script type='text/javascript'>//<![CDATA[
var _wpcf7={"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
//]]></script>
<script src="wp-content/plugins/contact-form-7%2c_includes%2c_js%2c_scripts.js%2cqver%3d%3d4.6%2bsimple-share-buttons-plus%2c_js%2c_ssbp_standard.min.js%2cqver%3d%3d4.7.18.pagespeed.jc.BvHqUWXZGH.js"></script><script>eval(mod_pagespeed_4wEcBaNukt);</script>
<script>eval(mod_pagespeed_hJgEMAhPmT);</script>
<script type='text/javascript'>//<![CDATA[
var ssbpEmail={"ajax_url":"http:\/\/emberhouse.com\/wp-admin\/admin-ajax.php","security":"7965d911f1"};
//]]></script>
<script src="wp-content%2c_plugins%2c_simple-share-buttons-plus%2c_js%2c_ssbp_email.min.js%2cqver%3d%3d4.7.18%2bwp-includes%2c_js%2c_wp-embed.min.js%2cqver%3d%3d4.7.18.pagespeed.jc.gujKEGLCr5.js"></script><script>eval(mod_pagespeed_jm$4h8KKnl);</script>
<script>eval(mod_pagespeed_Tgb8tSxcLZ);</script>

				<footer class="eh-footer hidden">
		<div class="eh-footer__list">
			<div class="eh-footer__item eh-footer__item--legal">
				<p>All rights reserved 2020 © Shine student care</p>
			</div>
			<div class="eh-footer__item eh-footer__item--social hidden">
				<p>
					<a href="#">Facebook</a> / <a href="#">Instagram</a> / <a href="#">Linkedin</a> / <a href="#">YouTube</a>
				</p>
			</div>
			<div class="eh-footer__item eh-footer__item--credits">
				<p>Website by  <a href="http://hilifeai.com" target="_null">HiLife.Ai</a></p>
			</div>
		</div>
	</footer>

	
		</div> <!-- scroller wrapper -->

		<canvas id="fire-light"></canvas>
		<canvas id="fire-particles"></canvas>

		<a href="#" style="display:none;" class="quizz__global-btn quizz__global-btn--hidden js-quizz-global-btn">Are we a good match ?</a>
		
<div class="quizz__wrapper inverted js-quizz hidden" data-boundaries="15,25">
	<header class="eh-header eh-header--hidden">
		<div class="eh-header__wrapper">
			<h1 class="eh-header__logo">
				<a href="index.html">Shine</a>
				<img src="shine.png" alt="Shine" width="200" height="100" >
			</h1>
			<!-- <span class="eh-header__caption"></span> -->
		</div>
	</header>

	

<script>
function myFunction(){
var txt;
   if (confirm("Thank you for connecting with us!")) {
     txt = "your mail has been send!";
    } 
	else {
        txt = "You pressed Cancel!";
    }
        document.getElementById("demo").innerHTML = txt;
    }
</script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYIVsArIaHpRnpVvwflr2zwBHB7l_1LOQ"></script>
		<script src="wp-content/themes/emberhouse/bin/min.js.pagespeed.jm.jDbGEPXtlU.js"></script>

				<script type="text/javascript">(function(e,a){var t,r=e.getElementsByTagName("head")[0],c=e.location.protocol;t=e.createElement("script");t.type="text/javascript";t.charset="utf-8";t.async=!0;t.defer=!0;t.src=c+"//front.optimonk.com/public/"+a+"/js/preload.js";r.appendChild(t);})(document,"17227");</script> 
	</body>

<!-- Mirrored from emberhouse.com/our-difference by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 06:01:28 GMT -->
</html>

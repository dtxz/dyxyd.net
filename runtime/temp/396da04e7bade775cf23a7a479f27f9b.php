<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"D:\dyxyd\public/../application/index\view\index\index.html";i:1486265475;s:60:"D:\dyxyd\public/../application/index\view\public\header.html";i:1486265582;s:60:"D:\dyxyd\public/../application/index\view\public\footer.html";i:1486179168;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="__INDEX__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="__INDEX__/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <script src="__INDEX__/js/jquery-1.11.1.min.js"></script>
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <link href="__INDEX__/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="__INDEX__/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--start-smoth-scrolling-->
    <script type="text/javascript" src="__INDEX__/js/move-top.js"></script>
    <script type="text/javascript" src="__INDEX__/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!--start-smoth-scrolling-->

</head>
<body>
<!-- banner -->
<div id="home" class="banner a-banner">
    <!-- container -->
    <div class="container">
        <div class="header">
            <div class="head-logo">
                <a href="index.html"><img src="__INDEX__/images/logo.png" alt="" /></a>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="__INDEX__/images/menu.png" alt=""></span>
                <ul class="nav1">
                    <li class="hvr-sweep-to-bottom"><a href="index.html">首页<i><img src="__INDEX__/images/nav-but1.png" alt=""/></i></a></li>
                    <li class="hvr-sweep-to-bottom"><a href="__INDEX__/about.html">关于我们<i><img src="__INDEX__/images/nav-but2.png" alt=""/></i></a></li>
                    <li class="hvr-sweep-to-bottom"><a href="__INDEX__/services.html">专属服务<i><img src="__INDEX__/images/nav-but3.png" alt=""/></i></a></li>
                    <li class="hvr-sweep-to-bottom"><a href="__INDEX__/blog.html">新闻动态<i><img src="__INDEX__/images/nav-but4.png" alt=""/></i></a></li>
                    <li class="hvr-sweep-to-bottom"><a href="__INDEX__/mail.html">联系我们<i><img src="__INDEX__/images/nav-but5.png" alt=""/></i></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- /script-for-menu -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //container -->
    <div class="container">
        <script src="__INDEX__/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
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
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner-info">
                        <h2> <span> 德&nbsp;阳&nbsp;新&nbsp;一&nbsp;代&nbsp;重&nbsp;运&nbsp;有&nbsp;限&nbsp;责&nbsp;任&nbsp;公&nbsp;司</span></h2>
                        <div class="line"> </div>
                        <p></p>
                    </div>
                </li>
                <li>
                    <div class="banner-info">
                        <h2><span> 四&nbsp;川&nbsp;合&nbsp;众&nbsp;铁&nbsp;路&nbsp;运&nbsp;输&nbsp;服&nbsp;务&nbsp;有&nbsp;限&nbsp;责&nbsp;任&nbsp;公&nbsp;司</span> </h2>
                        <div class="line"> </div>
                        <p> </p>
                    </div>
                </li>
                <li>
                    <div class="banner-info">
                        <h2><span> 德&nbsp;阳&nbsp;新&nbsp;一&nbsp;代&nbsp;包&nbsp;装&nbsp;有&nbsp;限&nbsp;公&nbsp;司 </span> </h2>
                        <div class="line"> </div>
                        <p></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-7 banner-bottom-grid-text">
					<div class="jumbotron banner-bottom-left wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;	">
					  <h3>公司介绍</h3>
						<h5>Cras porttitor imperdiet volutpat. Nulla malesuada lectus eros ut convallis felis <span>consectetur ut</span></h5>
						<p>德阳新一代重运有限公司（四川合众铁路运输服务有限责任公司）创立于2007年，主要承接公路和铁路大件物资、工程机械、吊装、国际集装箱、普货运输和铁路、水陆联运业务。 </p>
						<div class="see-button">
							<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" href="__INDEX__/about.html" role="button">阅读详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="__INDEX__/images/2.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->

	<!-- specialty -->
	<div class="specialty">
		<!-- container -->
		<div class="container">
			<div class="col-md-5 specialty-info wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
				<h3>Our Services</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros ut convallis felis consectetur ut </h5>
				<p>Integer vitae ligula sed lectus consectetur pellentesque blandit nec orci. Nulla ultricies nunc et lorem semper, quis accumsan dui aliquam aucibus sagittis placerat.
					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi non nibh nec enim sollicitudin interdum.tristique senectus et netus et malesuada fames ac turpis egestas</span>
				</p>
				<div class="see-button">
					<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button" href="__INDEX__/services.html" role="button">See More</a>
				</div>
			</div>
			<div class="col-md-7 specialty-grids">
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="__INDEX__/images/1.png" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="__INDEX__/images/2.png" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="__INDEX__/images/3.png" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="__INDEX__/images/4.png" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //specialty -->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="testimonial-nfo wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>Testimonials</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
			</div>
			<div class="testimonial-grids wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<div class="testimonial-grid">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>News</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
			</div>
			<div class="news-grids">
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="__INDEX__/single.html"><h4>Integer vitae ligula sed lectus</h4></a>
					<span>8.00 - 10.00 | JUN 09,2014</span>
					<img src="__INDEX__/images/img1.jpg" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="__INDEX__/single.html"><h4>Integer vitae ligula sed lectus</h4></a>
					<span>10.00 - 12.00 | sep 24,2014</span>
					<img src="__INDEX__/images/img2.jpg" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="__INDEX__/single.html"><h4>Integer vitae ligula sed lectus</h4></a>
					<span>9.00 - 10.00 | FEB 15,2014</span>
					<img src="__INDEX__/images/img3.jpg" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="__INDEX__/single.html"><h4>Integer vitae ligula sed lectus</h4></a>
					<span>11.00 - 10.00 | JUN 10,2014</span>
					<img src="__INDEX__/images/img4.jpg" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="col-md-6 footer-left  wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="__INDEX__/about.html">About</a></li>
                <li><a href="__INDEX__/services.html">Services</a></li>
                <li><a href="__INDEX__/blog.html">Blog</a></li>
                <li><a href="__INDEX__/mail.html">Mail Us</a></li>
            </ul>
            <form>
                <input type="text" placeholder="Email" required="">
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <h3>Address</h3>
            <div class="address">
                <p>756 gt globel Place,
                    <span>CD-Road,M 07 435.</span>
                </p>
            </div>
            <div class="phone">
                <p>+1(100)2345-6789</p>
            </div>
        </div>
        <div class="col-md-3 footer-right  wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <a href="#"><img src="__INDEX__/images/logo.png" alt="" /></a>
            <p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //container -->
</div>
<!-- //footer -->
<div class="copyright">
    <!-- container -->
    <div class="container">
        <div class="copyright-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <p>Copyright &copy; 2016. <a href="#" target="_blank" title="新一代重运">新一代重运</a> - Collect from <a href="http://www.cssmoban.com/" title="新一代重运" target="_blank">新一代重运</a></p>
        </div>
        <div class="copyright-right wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <ul>
                <li><a href="#" class="twitter"> </a></li>
                <li><a href="#" class="twitter facebook"> </a></li>
                <li><a href="#" class="twitter chrome"> </a></li>
                <li><a href="#" class="twitter pinterest"> </a></li>
                <li><a href="#" class="twitter linkedin"> </a></li>
                <li><a href="#" class="twitter dribbble"> </a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    </div>
    <!-- //container -->
</div>
</body>
</html>
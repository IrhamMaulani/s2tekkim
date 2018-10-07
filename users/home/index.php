<!DOCTYPE html>
<html>
<head>
    <?php require_once('../layout/head.php'); ?>
</head>
<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <?php require_once('../layout/navigation.php'); ?>
    <!-- .container -->
</nav>
<!-- .nav -->

<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../assets/img/hero-slide-1-2.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>It′s simple, smart and occasionally magical.</h1>

                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                    transition emerging schemas and.</p>
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/hero-slide-2-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>It′s profitable and successful!</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                    Compellingly revolutionize future-proof interfaces and.</p>
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/hero-slide-3-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good solutions for your business!</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->

<section class="x-services ptb-50 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>Berita</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <div class="caption">
                        <h2>Investment</h2>
                        <hr>
                        <p class="text-justify">Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p><br>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Selengkapnya</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <div class="caption">
                        <h2>Investment</h2>
                        <hr>
                        <p class="text-justify">Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p><br>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Selengkapnya</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <div class="caption">
                        <h2>Investment</h2>
                        <hr>
                        <p class="text-justify">Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p><br>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="x-services ptb-50 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>Pengumuman</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <div class="caption">
                        <h2>Investment</h2>
                        <hr>
                        <p class="text-justify">Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat tellus odio malesuada ex.</p><br>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="footer">
    <?php require_once('../layout/footer.php'); ?>
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->
    <?php require_once('../layout/js.php'); ?>
    <div>
		<a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">HTML Templates by uiCookies</a>        
	</div>
</body>
</html>
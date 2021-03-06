<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="multimedia display,Multimedia Display Systems,exhibition hall,city planning,city planning systems,exhibition hall plan,exhibition hall design,advertising planning,advertising planning ppt,interactive dome,interactive dome projection,360 holographic,360 holographic projection,360 holographic display,fog screen projection,stunning effect">
    <meta name="description" content="Shanghai touch field Digital Technology Co. Ltd. is committed to providing the most innovative multimedia display and creative design of the most unique, for the new listing, exhibition hall, museum, city planning, advertising planning and the use of holographic imaging, interactive dome, 360 holographic, fog screen projection, movie screen, electronic sign and multi touch technology to achieve the most shocking, stunning effect.">
    <title>Touch World</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/template-style.min.css">
    <!-- Templatemo style -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
  -->
</head>

<body>
<!-- Content -->
<div class="cd-hero">
    <!-- Navigation -->
    <div class="cd-slider-nav">
        <nav class="navbar">
            <div class="tm-navbar-bg">
                <a class="navbar-brand text-uppercase" href="#">
                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/logo.png" alt="touch-world-logo">
                    <h1>Touch World</h1>
                </a>
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active selected">
                            <a class="nav-link" href="#0" data-no="1">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="2">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="3">Examples</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="4">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#0" data-no="5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="cd-hero-slider">
        <!-- Page 1 Home -->
        <li class="selected">
            <div class="cd-full-width" data-page-no="1">
                <div class="video">
                    <video
                        controls
                        loop
                        poster="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/poster.jpg"
                        controlslist="nodownload"
                        style="width: 100%;height: 100%"
                        src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/%E5%85%AC%E5%8F%B8%E5%AE%A3%E4%BC%A0%E7%89%87.mp4"></video>
                </div>
            </div>
        </li>
        <!-- Page 2 Gallery One -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                    <div class="tm-img-gallery-container">
                        <div class="tm-img-gallery gallery-one">
                            <!-- Gallery One pop up connected with JS code below -->
                            <div class="tm-img-gallery-info-container">
                                <h2 class="tm-text-title tm-gallery-title tm-white">
                                    <span class="tm-white">News Classification</span>
                                </h2>
                                <p class="tm-text">
                                    Shanghai Touch Digital Technology Co., Ltd. is committed to providing the most
                                    innovative multimedia display effects and the most unique creative design, using
                                    holographic imaging for new listings, exhibitions, city halls, planning galleries,
                                    advertising planning, interactive ball screen, 360 Holographic, fog screen
                                    projection, ring screen movie, electronic sign-in and multi-touch technology to
                                    achieve the most shocking and dazzling effects.
                                </p>
                            </div>
                            @foreach($categories as $category)
                                <div class="grid-item">
                                    <figure class="effect-ruby">
                                        <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/tm-img-0{{ $loop->index + 1 }}-tn.jpg" alt="Image"
                                             class="img-fluid tm-img">
                                        <figcaption>
                                            <h2 class="tm-figure-title">{{ $category->category }}</h2>
                                            <p class="tm-figure-description">{{ $category->description }}</p>
                                            <a href="{{ url('category') . '/' . $category->id }}">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <!-- Page 3 Gallery Two -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">
                    <div class="tm-img-gallery-container tm-img-gallery-container-2">
                        <div class="tm-img-gallery gallery-two">
                            <!-- Gallery Two pop up connected with JS code below -->
                            <div class="tm-img-gallery-info-container">
                                <h2 class="tm-text-title tm-gallery-title">
                                    <span class="tm-white">Second Gallery</span>
                                </h2>
                                <p class="tm-text">
                                    <span class="tm-white">Introduce the most popular product types in the market recently.</span>
                                </p>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/1-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Ali Yunqi Conference</h2>
                                        <p class="tm-figure-description">
                                            Name: Ali Yunqi Conference<br/>
                                            Time: October 2017<br/>
                                            Location: Hangzhou
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/1-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/2-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Country Garden high-end conference
                                        </h2>
                                        <p class="tm-figure-description">
                                            Name: Large projection show<br/>
                                            Time: November 2017<br/>
                                            Location: Wenzhou, Zhejiang
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/2-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/3-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Dongfeng Scenery 560 Conference</h2>
                                        <p class="tm-figure-description">
                                            Name: Laser projection show<br/>
                                            Time: November 2017<br/>
                                            Location: Shenzhen
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/3-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/4-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Decoding Hennessy Tasting</h2>
                                        <p class="tm-figure-description">
                                            Name: Laser projection show<br/>
                                            Time: December 2017<br/>
                                            Location: Guangzhou
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/4-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/5-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Komoni Exhibition</h2>
                                        <p class="tm-figure-description">
                                            Name: Kotani smart door lock<br/>
                                            Time: July 2018<br/>
                                            Location: Guangzhou Pazhou Exhibition Center
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/5-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item">
                                <figure class="effect-ruby">
                                    <img src="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/6-s.jpg" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">Budweiser Sales Conference</h2>
                                        <p class="tm-figure-description">
                                            Name: Budweiser Sales Conference<br/>
                                            Time: April 2018<br/>
                                            Location: Changsha
                                        </p>
                                        <a href="https://touchworld.oss-cn-shanghai.aliyuncs.com/touch/img/6-l.jpg">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <!-- Page 4 About -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-width" data-page-no="4">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tm-flex">
                                <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding tm-white-box-margin-b">
                                    <h2 class="tm-text-title">Shanghai TouchWorld Of Digital technology CO.,LTD</h2>
                                    <p class="tm-text indent">
                                        Shanghai touch field Digital Technology Co. Ltd. is committed to providing the most innovative multimedia display and creative
                                        design of the most unique, for the new listing, exhibition hall, museum, city planning, advertising planning and
                                        the use of holographic imaging, interactive dome, 360 holographic, fog screen projection, movie screen, electronic
                                        sign and multi touch technology to achieve the most shocking, stunning effect.
                                        <br/>
                                    <p class="tm-text indent">
                                        At the same time undertake a variety of professional 3D animation, Flash animation, can provide different solutions according
                                        to customer needs; Tongji University we have the most professional R & D team, is committed to providing the
                                        most advanced technology, we have many well-known brand to provide high-quality service; the company is the concept
                                        of respect for customers, understanding customers, continue to provide the products and services that exceed
                                        customer expectations, so customers are always partners.
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-full-width -->
        </li>

        <!-- Page 5 Contact Us -->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                    <div class="tm-contact-page">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tm-flex tm-contact-container">
                                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                        <h2 class="tm-contact-info">Contact Us</h2>
                                        <p class="tm-text">
                                            Tel：+021 35091225 / 35090001
                                            <br/> Fax：+021 35090001
                                            <br/> Phone：18917292695 / 13331891225 / 13761189700
                                            <br/> QQ：407688499 / 1793901862 / 1296076770
                                            <br/>
                                        </p>
                                        <!-- contact form -->
                                        <form class="tm-contact-form" onsubmit="return formSubmit(this);" id="formData">
                                            <div class="form-group">
                                                <input type="text" id="contact_name" name="name"
                                                       class="form-control" placeholder="Name" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="contact_email" name="email"
                                                       class="form-control" placeholder="Email" required/>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="contact_message" name="message"
                                                          class="form-control" rows="5" placeholder="Your message"
                                                          required></textarea>
                                            </div>
                                            <button type="submit" class="pull-xs-right tm-submit-btn" id="submit">Send</button>
                                        </form>
                                    </div>
                                    <div
                                        class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                        <h2 class="tm-contact-info">Room 401, no.7628, zhongchun road, minhang district,
                                            Shanghai
                                        </h2>
                                        <!-- map goes here -->
                                        <div id="map" style="min-height: 300px">map</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-full-width -->
        </li>
    </ul>
    <!-- .cd-hero-slider -->
    <footer class="tm-footer">
        <p class="tm-copyright-text">
            友情链接:
            <a href="https://www.nvidia.cn/page/home.html" target="_blank">NVIDIA</a> |
            <a href="https://www.cgtrader.com/" target="_blank">CGTRADER</a> |
            <a href="https://www.facebook.com/" target="_blank">FACEBOOK</a> |
            <a href="https://www.facebook.com/" target="_blank">FACEBOOK</a> |
            <a href="https://www.youtube.com/" target="_blank">YOUTUBE</a>
            <br/>
            Copyright &copy; 2017 Touch World
        </p>
    </footer>
</div>
<!-- .cd-hero -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- load JS files -->
<!-- load JS files -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/tether.min.js"></script>
<!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="js/hero-slider-main.js"></script>
<!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- 高德地图 -->
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=9919b3652eba25eb2e2ef0839e3b8692"></script>
<!-- 谷歌地图 将'YOUR_API_KEY'改成的谷歌的注册的key-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMiA5xn5hqZZGg9IvKcVeIwmcatw4y3o&callback=initMap"></script>
<script src="js/index.js"></script>
</body>
</html>

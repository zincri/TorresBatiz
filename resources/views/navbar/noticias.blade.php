@extends ('layouts.master') @section ('content')

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Noticias</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Inicio</a></li>
                                <li class="active">Noticias</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 blog_grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                <div class="full">
                    <div class="blog_section margin_bottom_0">
                        <div class="blog_feature_img"> <img class="img-responsive" src="images/layout_img/post-05.jpg" alt="#"> </div>
                        <div class="blog_feature_cantant">
                            <p class="blog_head">Blogpost With Image Title</p>
                            <div class="post_info">
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                                </ul>
                            </div>
                            <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores
                                corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="full testimonial_simple_say margin_bottom_30_all" style="margin-top:0;">
                            <div class="qoute_testimonial"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                            <p class="margin_bottom_0"><i>Adipisicing elit lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i></p>
                            <p class="large_2 theme_color">John Barber</p>
                        </div>
                        <p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate. <br>
                            <br> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="bottom_info margin_bottom_30_all">
                            <div class="pull-right">
                                <div class="shr">Share: </div>
                                <div class="social_icon">
                                    <ul>
                                        <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="full">
                    <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                            @foreach($videos as $item)
                            <li data-target="#testimonial_slider" data-slide-to="{{$item->id}}"></li>
                            @endforeach
                            <!-- <li data-target="#testimonial_slider" data-slide-to="1"></li>
                                   <li data-target="#testimonial_slider" data-slide-to="2"></li> -->
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-container"><iframe width="100%" height="315" src="{{$informaciongeneral->videoprincipal}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            @foreach($videos as $item)
                            <div class="carousel-item">
                                <div class="testimonial-container">
                                    <iframe width="100%" height="315" src="{{$item->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <div class="testimonial-content">
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="full"> </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="contact_us_section">
                        <div class="call_icon"> <img src="images/layout_img/phone_icon.png" alt="#" /> </div>
                        <div class="inner_cont">
                            <h2>Si tiene alguna duda, contáctenos</h2>
                            <p>Puede comunicarse con nosotros al teléfono <strong>961 613 5390</strong>. O llene una solicitud dando click en Contáctenos</p>
                        </div>
                        <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="contact.html">Contáctenos</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <ul class="brand_list">
                        <li><img class="img-responsive2" src="images/layout_img/marca1.png" alt="#" /></li>
                        <li><img class="img-responsive2" src="images/layout_img/marca2.png" alt="#" /></li>
                        <li><img class="img-responsive2" src="images/layout_img/marca3.png" alt="#" /></li>
                        <li><img class="img-responsive2" src="images/layout_img/marca4.png" alt="#" /></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->

@endsection
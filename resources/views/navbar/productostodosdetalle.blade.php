@extends ('layouts.master') 
@section ('content')

<div class="notificacionAddCart">

    <p>Este artículo se a añadido al carrito con éxito. De click en "Ver carrito" para ver más detalles </p>
    <div class="buttonVerCarro">
        <a href="/cart">
            <button type="button">VER CARRITO</button>
        </a>
    </div>
</div>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Detalles de compra</h1>
                            <ol class="breadcrumb">
                                <li><a href="/">Inicio</a></li>
                                <li class="active">Detalles de compra</li>
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
<div class="section padding_layout_1 product_detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product_detail_feature_img hizoom hi2">
                            <div class="hizoom hi2">
                                <img class="imagenProductoDescripcion imagenGrandeDescripcion" src="{{asset('images/layout_img/2.jpg')}}" alt="#" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 product_detail_side detail_style1">
                        <div class="product-heading">
                            <h2>{{$producto->nombre}}</h2>
                        </div>
                        <div class="detail-contant">
                            <p>{{$producto->descripcioncorta}}<br>
                                <span class="stock">{{$producto->stock}} in stock</span>
                            </p>
                            <form class="cart" method="post" action=>
                                <div class="quantity">
                                    <input id="quantity" step="1" min="1" max="5" name="quantity" value="{{$producto->cantidad}}" title="Qty" class="input-text qty text" size="4" type="number">
                                </div>
                                <a href="{{ route('cart-add',['id' => $producto->id,'cantidad'=> 1 ])}}"
                                   id="hrefa" name="hrefa" >
                                <button type="button" class="btn sqaure_bt addToCart">Añadir al carrito</button>
                                </a>
                            </form>
                        </div>
                        <a href="{{ route('cart-show') }}"><button type="button" class="btn sqaure_bt">Ver carrito</button></a>
                        <div class="share-post">
                            <a href="#" class="share-text">Compartir</a>
                            <ul class="social_icons">
                                @foreach(session('redes') as $item)
                                <li>
                                    <a class="{{$item->icono}}" href="{{$item->url}}" title="{{$item->nombre}}" target="_blank"></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="tab_bar_section">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Descripción</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#galeriaProducto">Galería de imágenes</a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="description" class="tab-pane active">
                                        <div class="product_desc">
                                            <p>{{$producto->descripcionlarga}}
                                            </p>
                                        </div>
                                    </div>
                                    <div id="galeriaProducto" class="tab-pane fade">
                                        <div class="product_review">
                                            <div class="commant-text row">

                                                @foreach($galeria as $item)
                                                <div class="col-md-3">
                                                    <figure>
                                                        <img class="imagenProductoDescripcion" src="{{$item->imagen}}" alt="#" />
                                                    </figure>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main_heading text_align_left" style="margin-bottom: 25px;">
                                <h3>Otros productos</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($productos as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                            <div class="product_img"> <img class="img-responsive" src="{{$item->imagen}}" alt=""> </div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="/productostodosdetalle{{$item->id}}">{{$item->nombre}}</a></h4>
                                </div>
                                <div class="product_price">
                                    <p><span class="new_price">Silla 1323</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            <p>Puede comunicarse con nosotros al teléfono <strong>{{$informaciongeneral->telefono}}</strong>. O llene una solicitud dando click en Contáctenos</p>
                        </div>
                        <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="/contacto">Contáctenos</a> </div>
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
                        @foreach($marcas as $item)
                        <li><img class="img-responsive2" src="{{$item->imagen}}" alt="#" /></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
@endsection @push('zoomScript_js')
<script type="text/javascript" src="{{ asset('js/hizoom.js') }}">
</script>
<script>
    
    $('.hi1').hiZoom({
        width: 500,
        position: 'right'
    });
    $('.hi2').hiZoom({
        width: 550,
        position: 'right'
    });
</script>
<script type="text/javascript" src="{{ asset('js/cartShopping.js') }}"></script>
@endpush
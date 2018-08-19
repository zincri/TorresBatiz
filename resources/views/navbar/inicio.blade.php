@extends ('layouts.master')

@section ('content')

<!-- section slider -->
<div id="slider" class="section main_slider">
      <div class="container-fuild">
         <div class="row">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
               <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
               <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                  <ul>
                  @foreach($slider as $item)
                  <li data-index="rs-181" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{$item->imagen}}"  data-rotate="0"  data-saveperformance="off"  data-title="{{$item->tituloglobo}}" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{$item->imagen}}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. BG -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                        id="slide-270-layer-101" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="s:300;s:300;" 
                        data-start="750" 
                        data-basealign="slide" 
                        data-responsive_offset="on" 
                        data-responsive="off"
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0.50);"> </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                        id="slide-18-layer-91" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
                        data-width="500"
                        data-height="100"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:0px;" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="2000" 
                        data-responsive_offset="on" 
                        style="z-index: 5;background-color:rgba(29, 29, 29, 0.85);border-color:rgba(0, 0, 0, 0.50);"> </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
                        id="slide-18-layer-11" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-fontsize="['70','70','70','35']"
                        data-lineheight="['70','70','70','50']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="chars" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-elementdelay="0.05" 
                        style="z-index: 6; white-space: nowrap;">{{$item->titulo}} </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
                        id="slide-18-layer-41" 
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="1500" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        style="z-index: 7; white-space: nowrap;"></div>
                     </li>
                     @endforeach
                     <!--#################################################################################-->
                     
                  </ul>
                  <div class="tp-static-layers"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end section -->
   <!-- section -->
   <div class="section padding_layout_1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="full">
                  <div class="main_heading text_align_center">
                     <h2><span>Nuestros Servicios</span></h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
         @foreach($serviciosprincipal as $item)
            <div class="col-md-4">
               <div class="service_blog">
                  <div class="service_img">
                     <img class="img-responsive1" src="{{$item->imagen}}" alt="#" />
                  </div>
                  <div class="service_head">
                     <h5><a href="{{$item->ruta}}">{{$item->titulo}}</a></h5>
                  </div>
               </div>
            </div>
         @endforeach
         </div>
      </div>
   </div>
   <!-- end section -->
   <!-- section -->
   <div class="section padding_layout_1 section_information white_fonts" style="margin-top: 2%">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="full">
                  <h4>{{$informaciongeneral->titulohistoria}}</h4>
               </div>
            </div>
            <div class="col-md-6">
               <div class="full">
               <p>{{$informaciongeneral->textohistoria}}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end section -->
   <!-- section -->
   <div class="section padding_layout_1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="full">
                  <div class="main_heading text_align_center heading_with_subtitle">
                     <h2><span>Promociones </span></h2>
                     <h6><span>Aplica Restricciones</span></h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="row promocionesSection">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
               <div class="product_list">
                  <div class="product_img"> <img class="img-responsive1" src="images/layout_img/Ricoh MP 305SPF Base Unit.JPG" alt=""> </div>
                  <div class="product_detail_btm">
                     <div class="center">
                        <h4>Product 1</h4>
                     </div>
                     <div class="product_price">
                        <p><span class="new_price">Promoción de Agosto</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
               <div class="product_list">
                  <div class="product_img"> <img class="img-responsive1" src="images/layout_img/RICOH MP-501SPF.JPG" alt=""> </div>
                  <div class="product_detail_btm">
                     <div class="center">
                        <h4>Product 2</h4>
                     </div>
                     <div class="product_price">
                        <p><span class="new_price">Promoción Diciembre</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
               <div class="product_list">
                  <div class="product_img"> <img class="img-responsive1" src="images/layout_img/RICOH MP-2555.JPG" alt=""> </div>
                  <div class="product_detail_btm">
                     <div class="center">
                        <h4>Product 3</h4>
                     </div>
                     <div class="product_price">
                        <p><span class="new_price">Promoción 13 Abril</span></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
               <div class="product_list">
                  <div class="product_img"> <img class="img-responsive1" src="images/layout_img/RICOH SP-377.jpg" alt=""> </div>
                  <div class="product_detail_btm">
                     <div class="center">
                        <h4>Product 4</h4>
                     </div>
                     <div class="product_price">
                        <p><span class="new_price">Promoción Noviembre 15</span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1 section_information white_fonts">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <h4>{{$informaciongeneral->tituloresena}}</h4>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full">
                     <p>{{$informaciongeneral->textoresena}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <div class="section padding_layout_1" style="background: #f9f9f9;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_center heading_with_subtitle">
                        <h2><span>Proyectos</span></h2>
                        <p class="large">Estos son algunos de los proyectos que hemos realziado.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
            @foreach($proyectosrealizados as $item)
               <div class="col-md-4">
                  <div class="full blog_colum">
                     <div class="blog_feature_img"> <img class="img-responsive3" src="{{$item->imagen}}" alt="#" /> </div>
                     <div class="post_time">
                        
                     </div>
                     <div class="blog_feature_head">
                        <h4>{{$item->titulo}}</h4>
                     </div>
                     <div class="blog_feature_cont">
                        <p>{{$item->descripcion}}</p>
                     </div>
                  </div>
               </div>
            @endforeach
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
                           <li data-target="#testimonial_slider" data-slide-to="1"></li>
                           <li data-target="#testimonial_slider" data-slide-to="2"></li>
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
      <!-- end section -->
      <!-- Modal -->
      <div class="modal fade" id="search_bar" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                           <form action="#" method="get" id="search-global-form" class="search-global">
                              <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                              <button class="search-global__btn"><i class="fa fa-search"></i></button>
                              <div class="search-global__note">Begin typing your search above and press return to search.</div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Model search bar -->
      <!-- map -->
      <div class="map-container column-map left-pos-map">
      
      <div class="map_section">
      <div id="map"></div>
            </div>  
      </div>
      <!-- end map -->


@endsection
@push('script') 
      <script type="text/javascript" src="{{asset('js/mapa_inicio.js')}}"></script>  
@endpush
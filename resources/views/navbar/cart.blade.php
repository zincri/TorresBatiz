@extends ('layouts.master')

@section ('content')
<div class="notificacionAddCart" style="background-color: #f89c35;">
   <p style="color: #fff; text-align: center;">Usted ha enviado su solicitud de cotización. Torres Batiz se comunicará con usted posteriormente.</p>
</div>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="full">
               <div class="title-holder">
                  <div class="title-holder-cell text-left">
                     <h1 class="page-title" style="margin-right: 10%">Productos seleccionados</h1>
                     <ol class="breadcrumb">
                        <li><a href="index.html">Inicio</a></li>
                        <li class="active">Productos seleccionados</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1 Shopping_cart_section">
   <div class="container">
      <div class="row">
         <form action="/inicio">
         <div class="col-sm-12 col-md-12">
            <div class="product-table">
               <table class="table">
                  <thead>
                     <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th> </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="col-sm-8 col-md-6">
                           <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/layout_img/1.jpg" alt="#"></a>
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="#">Product One</a></h4>
                                 <span>Status: </span><span class="text-success">In Stock</span> 
                              </div>
                           </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                        </td>
                        <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                     </tr>
                     <tr>
                        <td class="col-md-6">
                           <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/layout_img/2.jpg" alt="#"></a>
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="#">Product Two</a></h4>
                                 <span>Status: </span><span class="text-danger">Out Stock</span> 
                              </div>
                           </div>
                        </td>
                        <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                        </td>
                        <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                     </tr>
                     <tr>
                        <td class="col-sm-8 col-md-6">
                           <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/layout_img/3.jpg" alt="#"></a>
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="#">Product Three</a></h4>
                                 <span>Status: </span><span class="text-success">In Stock</span> 
                              </div>
                           </div>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                        </td>
                        <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                     </tr>
                     <tr>
                        <td class="col-md-6">
                           <div class="media">
                              <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/layout_img/4.jpg" alt="#"></a>
                              <div class="media-body">
                                 <h4 class="media-heading"><a href="#">Product Four</a></h4>
                                 <span>Status: </span><span class="text-danger">Out Stock</span> 
                              </div>
                           </div>
                        </td>
                        <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                        </td>
                        <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
                     </tr>
                  </tbody>
               </table>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="email" placeholder="Ingrese su correo" name="correo">
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingrese su nombre" name="nombre">
                     </div>
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingrese su teléfono" name="tel">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingrese su empresa (Opcional)" name="empresa">
                        <p class="small">Si no cuenta con una empresa, puede dejar el espacio en blanco y especificarlo en el mensaje.</p>
                     </div>
                     <div class="form-group">
                        <textarea class="form-control" name="mensajeCotizacion" id="mensajeCotizacion" placeholder="Mensaje (Opcional)"></textarea>
                     </div>
                  </div>
                  <button class="btnEnviarCotizacion" type="submit">Enviar para cotizar</button>
               </div>
            </div>
            
         </div>
         </form>
      </div>
   </div>
</div>
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
                        <div class="testimonial-container"><iframe width="100%" height="315" src="https://www.youtube.com/embed/t5qGCgXihAY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="testimonial-container">
                           <iframe width="100%" height="315" src="https://www.youtube.com/embed/cw12x2r1UwA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           <div class="testimonial-content">
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="testimonial-container">
                           <iframe width="100%" height="315" src="https://www.youtube.com/embed/pdXXq8zEFDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                     </div>
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
@push('zoomScript_js')

<script type="text/javascript" src="{{ asset('js/cartShopping.js') }}"></script>
@endpush
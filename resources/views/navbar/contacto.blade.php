@extends ('layouts.master')

@section ('content')

        <!-- map -->

      <div class="map-container column-map left-pos-map">
      
      <div class="map_section">
      <div id="map"></div>
            </div>  
      </div>
      <!-- end map -->
	  <!-- section -->
      <div class="section padding_layout_1">
         <div class="container">
            <div class="row"> 
			    <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_center">
                        <h2><span>Mantente en contacto</span></h2>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
               <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="full">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                           <div class="form_section">
                             
                                 
                                    <div class="row">
                                       <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <input class="field_custom" placeholder="Nombre" id="nombre" type="text"  />
                                          <span id="nombreOK" style="color:red" class="help-block"></span>
                                       </div>
						      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <input class="field_custom" placeholder="Email" id="email" type="email"  />
                                          <span id="emailOK" style="color:red" class="help-block"></span>
                                       </div>
                                       <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <input class="field_custom" placeholder="Asunto" id= "asunto" type="text"  />
                                          <span id="asuntoOK" style="color:red" class="help-block"></span>
                                       </div>
                                       <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <input class="field_custom" placeholder="Número telefonico" id="telefono" type="text" />
                                          <span id="telefonoOK" style="color:red" class="help-block"></span>
                                       </div>
                                       <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <textarea class="field_custom" placeholder="Mensaje" id="mensaje"></textarea>
                                          <span id="mensajeOK" style="color:red" class="help-block"></span>
                                       </div>
                                       <div class="center" style="margin-bottom: 2%"><input type="submit" value="Enviar" class="btn main_bt" id= "enviar"></div>
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
      <!-- end section -->
   
   

@endsection
@push('script') 
      <script type="text/javascript" src="{{asset('js/mapa_inicio.js')}}"></script>  
@endpush
@push('validacion')
<script type="text/javascript" src="{{ asset('js/validarcontacto.js') }}"></script>
@endpush
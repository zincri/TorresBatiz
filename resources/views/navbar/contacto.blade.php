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
                        <!--FORMULARIO-->
                        <div class="bt_cont col-md-12">

                        <div class="formularioArrendatario">


                              {!! Form::open(array('url' => 'contacto','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!}
                              {{Form::token()}}
                              <div class="groupForm">
                                    <label for="nombre">Nombre:</label>
                                    <input  type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre aquí. (Campo obligatorio)">
                                    <span id="nombreOK" style="color:red" class="help-block"></span>
                              </div>

                              <div class="groupForm">
                                    <label for="asunto">Asunto:</label>
                                    <input  type="text" id="asunto" name="asunto" placeholder="Ingrese su asunto(Campo obligatorio)">
                                    <span id="asuntoOk" style="color:red" class="help-block"></span>
                              </div>
                              <div class="groupForm">
                                    <label for="telefono">Teléfono:</label>
                                    <input  type="text" id="telefono" name="telefono" placeholder="Ingrese su teléfono aquí. (Campo obligatorio)">
                                    <span id="telefonoOK" style="color:red" class="help-block"></span>
                              </div>
                              <div class="groupForm">
                                    <label for="email">Correo electrónico:</label>
                                    <input  type="email"  id="email" name="email" placeholder="ejemplo@dominio.com (Campo obligatorio)">
                                    <span id="emailOK" style="color:red" class="help-block"></span>


                              </div>

                              <div class="groupInputs">
                                    <textarea id="mensaje" name="mensaje"  placeholder="Ingrese su mensaje aquí"></textarea>
                                    <span id="mensajeOK" style="color:red" class="help-block"></span>
                              </div>
                              <button type="submit">Enviar</button>
                              {!! Form::close() !!}

    </div>
    </div>
    <!--FIN FORMULARIO-->

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
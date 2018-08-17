@extends ('layouts.master')

@section ('content')

<div id="inner_banner" class="section inner_banner_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="title-holder">
                        <div class="title-holder-cell text-left">
                           <h1 class="page-title">Nosotros</h1>
                           <ol class="breadcrumb">
                              <li><a href="/">Inicio</a></li>
                              <li class="active">Nosotros</li>
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
      <div class="section padding_layout_1 light_silver gross_layout right_gross_layout">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_headingr text_align_center">
                        <h2><span>29 años comprometidos con la <br>calidad y el servicio</span></h2>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="full">
                     <div class="main_heading text_align_right">
                        <h2>Misión</h2>
                        <p class="large"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-12 col-lg-8 text-align_right">
                  <div class="full large_cont_p">
                     <p>En Torres Batiz estámos comprometidos con la excelencia, para proveer los mejores productos y con ellos eficientar la calidad de vida de nuestros clientes. <br> <br>
                     </p>
                     <h2 class="main_heading text_align_right">Visión</h2>
                     <p>
                        Ser la empresa lider en el mercado, con un atractivo irresistible para nuestros clientes. <br> <br>
                     </p>
                     <h2 class="main_heading text_align_right">Objetivos</h2>
                     <p>En Torres Batiz estámos comprometidos con la excelencia, para proveer los mejores productos y con ellos eficientar la calidad de vida de nuestros clientes. </p>
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

@endsection

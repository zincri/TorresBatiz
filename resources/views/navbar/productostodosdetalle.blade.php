@extends ('layouts.master')

@section ('content')
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
                              <li><a href="index.html">Inicio</a></li>
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
                           <div class="hizoom hi2"><img src="images/layout_img/1.jpg" alt="#" /></div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 product_detail_side detail_style1">
                        <div class="product-heading">
                           <h2>Producto Uno</h2>
                        </div>
                        <div class="detail-contant">
                           <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                              Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br>
                              <span class="stock">2 in stock</span> 
                           </p>
                           <form class="cart" method="post" action=>
                              <div class="quantity">
                                 <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                              </div>
                              <button  type="button" class="btn sqaure_bt addToCart">Añadir al carrito</button>
                           </form>
                        </div>
                        <a href="cart.html"><button type="button" class="btn sqaure_bt">Ver carrito</button></a>
                        <div class="share-post">
                           <a href="#" class="share-text">Compartir</a>
                           <ul class="social_icons">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Opiniones(2)</a> </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div id="description" class="tab-pane active">
                                    <div class="product_desc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                                          Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                                          id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br>
                                          <br>
                                          Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                                          Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                                          Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                                          pharetra a finibus vitae, lobortis et mi.
                                       </p>
                                    </div>
                                 </div>
                                 <div id="reviews" class="tab-pane fade">
                                    <div class="product_review">
                                       <h3>Opiniones (2)</h3>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="images/layout_img/client1.png" alt="#"> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Lara jack</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                                                The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. 
                                             </p>
                                          </div>
                                       </div>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="images/layout_img/client2.png" alt="#"> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Liana hussy</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="full review_bt_section">
                                                <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                                             </div>
                                             <div class="full">
                                                <div id="collapseExample" class="full collapse commant_box">
                                                   <form accept-charset="UTF-8" action="index.html" method="post">
                                                      <input id="ratings-hidden" name="rating" type="hidden">
                                                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                      <div class="full_bt center">
                                                         <button class="btn sqaure_bt" type="submit">Save</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
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
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="images/layout_img/1.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="/productostodosdetalle">Producto 1</a></h4>
                              </div>
                              <div class="product_price">
                                 <p><span class="new_price">Silla 1323</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="images/layout_img/2.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="/productostodosdetalle">Producto 2</a></h4>
                              </div>
                              <div class="product_price">
                                 <p><span class="new_price">Silla 2923</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="images/layout_img/3.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="/productostodosdetalle">Producto 3</a></h4>
                              </div>
                              <div class="product_price">
                                 <p><span class="new_price">Silla 2032</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                           <div class="product_img"> <img class="img-responsive" src="images/layout_img/4.jpg" alt=""> </div>
                           <div class="product_detail_btm">
                              <div class="center">
                                 <h4><a href="/productostodosdetalle">Producto 4</a></h4>
                              </div>
                              <div class="product_price">
                                 <p><span class="new_price">Silla 2017</span></p>
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
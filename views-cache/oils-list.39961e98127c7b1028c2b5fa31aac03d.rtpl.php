<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5 pt-4 pb-3">
            <div class="row">
              <div class="col-md-6">
                <h4>Relação dos Óleos Essenciais</h4>
              </div>
              <div class="col-lg-6 d-flex"> <!-- Textos da seção -->
                <div class="align-self-center">
                </div>
              </div> <!-- fim Textos da seção -->
            </div>
          </div>
        </section> <!-- Fim seção home  -->
        
        <section class="caixa"> <!-- Início seção Lista Óleos -->
          <div class="container">
            <div class="row">

              <div class="single-product-area">
                <div class="zigzag-bottom"></div>
                <div class="container text-center">
                    <div class="row">                        
                        <?php $counter1=-1;  if( isset($oils) && ( is_array($oils) || $oils instanceof Traversable ) && sizeof($oils) ) foreach( $oils as $key1 => $value1 ){ $counter1++; ?>

                        <!--div class="col-md-3 col-sm-4 col-6"-->
                        <div class="col">
                            <div class="single-shop-product">
                                <div>    <!--class="product-upper"-->
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                </div>
                                <h6><a href="#"><?php echo htmlspecialchars( $value1["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <em>(<?php echo htmlspecialchars( $value1["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></a></h6>
                            </div>                            
                        </div>                        
                        <?php } ?>

                        
                    </div>

                        <br>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-pagination text-center">
                                <nav>
                                    <ul class="pagination">
                                    <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>

                                        <li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                                    <?php } ?>

                                    </ul>
                                </nav>                        
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              
            </div>
          </div>
        </section> <!-- Fim seção Lista Óleos -->

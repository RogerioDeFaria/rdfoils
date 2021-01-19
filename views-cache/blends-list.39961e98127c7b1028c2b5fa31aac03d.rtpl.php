<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5 pt-4 pb-3">
            <div class="row">
                <div class="col-md-10">
                    <h4>Relação dos Blends <em>(Sinergias)</em></h4>
                </div>
                <div class="col-md-2 d-flex"> <!-- Pesquisa -->
                <div class="align-self-right">
                    <div class="box-tools">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback" style="width: 150px;">
                                <label for="search" class="sr-only">Pesquisar</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="pesquisar" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
              </div> <!-- fim Pesquisa -->
            </div>
          </div>
        </section> <!-- Fim seção home  -->
        
        <section class="caixa"> <!-- Início seção Lista Blends -->
          <div class="container">
            <div class="row">

              <div class="single-product-area">
                <div class="zigzag-bottom"></div>
                <div class="container text-center">
                    <div class="row">
                        <?php $counter1=-1;  if( isset($blends) && ( is_array($blends) || $blends instanceof Traversable ) && sizeof($blends) ) foreach( $blends as $key1 => $value1 ){ $counter1++; ?>

                        <!--div class="col-md-3 col-sm-4 col-6"-->
                        <div class="col">
                            <div class="single-shop-product">
                                <div>    <!--class="product-upper"-->
                                    <a href="/blends/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                        <img src="<?php echo htmlspecialchars( $value1["desphoto1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    </a>
                                </div>
                                <h6><a href="/blends/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <em>(<?php echo htmlspecialchars( $value1["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></a></h6>
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
        </section> <!-- Fim seção Lista Blends -->

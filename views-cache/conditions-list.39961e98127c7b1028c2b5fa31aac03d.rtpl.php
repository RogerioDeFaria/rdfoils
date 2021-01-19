<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5 pt-4 pb-3">
            <div class="row">
              <div class="col-md-10">
                <h4>Relação de Condições</h4>
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
        
        <section class="caixa"> <!-- Início seção Lista Condições -->
          <div class="container">
            <div class="row text-center">
                <?php $counter1=-1;  if( isset($conditions) && ( is_array($conditions) || $conditions instanceof Traversable ) && sizeof($conditions) ) foreach( $conditions as $key1 => $value1 ){ $counter1++; ?>

                    <a href="/conditions/<?php echo htmlspecialchars( $value1["desURL"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="col-6 col-sm-4 col-md-3 py-2 bg-light"> <strong><?php echo htmlspecialchars( $value1["desconditionname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></a>
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
        </section> <!-- Fim seção Lista Condições -->

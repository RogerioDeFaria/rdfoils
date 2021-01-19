<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5 pt-4 pb-3">
            <div class="row">
              <div class="col-md-6">
                <h4><?php echo htmlspecialchars( $conditions["0"]["desconditionname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
              </div>
              <div class="col-lg-6 d-flex"> <!-- Textos da seção -->
                <div class="align-self-center">
                </div>
              </div> <!-- fim Textos da seção -->
            </div>
          </div>
        </section> <!-- Fim seção home  -->
        
        <section class="caixa"> <!-- Início seção Sintomas -->
          <div class="container">
            <div class="row">

              <div class="card-deck mb-2">
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">O que é</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <?php echo htmlspecialchars( $conditions["0"]["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div>
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Óleos sugeridos</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <ul class="ul-oleos">
                        <!-- Óleos sugeridos -->
                        <?php $counter1=-1;  if( isset($conditions) && ( is_array($conditions) || $conditions instanceof Traversable ) && sizeof($conditions) ) foreach( $conditions as $key1 => $value1 ){ $counter1++; ?>

                        <li>                          
                          <i class="fa fa-hand-paper-o pr-2" aria-hidden="true"></i>
                          <a href="/oils/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <em>(<?php echo htmlspecialchars( $value1["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></a>                          
                        </li>
                        <?php } ?> 

                        <!-- Blends sugeridos -->
                        <?php $counter1=-1;  if( isset($conditionsblend) && ( is_array($conditionsblend) || $conditionsblend instanceof Traversable ) && sizeof($conditionsblend) ) foreach( $conditionsblend as $key1 => $value1 ){ $counter1++; ?>

                        <li>                          
                          <i class="fa fa-hand-paper-o pr-2" aria-hidden="true"></i>
                          <a href="/blends/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <em>(<?php echo htmlspecialchars( $value1["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></a>                          
                        </li>
                        <?php } ?>  

                    </p>
                  </div>
                  <div class="card-footer text-muted">
                    <i class="fa fa-hand-paper-o pl-3 pr-3" aria-hidden="true"> - Tópico</i>
                    <i class="fa fa-fire pl-3 pr-3" aria-hidden="true"> - Aromático</i>
                    <i class="fa fa-tint pl-3 pr-3" aria-hidden="true"> - Interno</i>
                  </div>
                </div>
              </div>
              
              <div class="card-deck mt-4 mb-1">
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Soluções simples</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <?php echo htmlspecialchars( $conditions["0"]["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div>
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Métodos de aplicação</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <?php echo htmlspecialchars( $conditions["0"]["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                    </p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section> <!-- Fim seção Sintomas -->

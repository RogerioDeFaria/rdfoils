<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-3">
                <div class="align-self-center text-center">
                  <img src="<?php echo htmlspecialchars( $blends["desphoto2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid w-75">
                </div>
              </div>
              <div class="col-md-6 align-self-center text-center">
                <h4><?php echo htmlspecialchars( $blends["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4><em>(<?php echo htmlspecialchars( $blends["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></h4>
              </div>
              <div class="col-md-3">
                <div class="align-self-center text-center">
                  <img src="<?php echo htmlspecialchars( $blends["desphoto3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid w-75">
                </div>
              </div>
            </div>
          </div>
          
        </section> <!-- Fim seção home  -->
        
        <section class="caixa"> <!-- Início seção Detalhes do Blend -->
          <div class="container">
            <div class="row">

              <div class="card-columns">
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Descrição</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text"><?php echo htmlspecialchars( $blends["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                  </div>
                </div> <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Fatos rápidos</h5>
                  <div class="card-body text-coffee">
                    <ul class="list-group list-group-flush">
                       <li class="list-group-item">
                         <strong>Óleos componentes: </strong> <?php echo htmlspecialchars( $blends["descomponents"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                       </li>
                       <li class="list-group-item">
                         <strong>Métodos de aplicação:</strong><br>
                           Aromático:  /  Tópico:  /  Interno:<br>
                           <?php if( $blends["inaromatic_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?>  /  
                           <?php if( $blends["intopical_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?> /
                           <?php if( $blends["internal_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?>

                       </li>
                    </ul>
                  </div>
                </div> <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Usos primários comuns</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <ul class="ul-oleos">
                        <li>
                          <?php echo htmlspecialchars( $blends["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </li>
                      </ul>
                    </p>
                  </div>                  
                </div>  <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Métodos comuns de aplicação</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                      : <?php echo htmlspecialchars( $blends["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <br> 
                    </p>
                  </div>
                  <div class="card-footer text-muted">
                    <i class="fa fa-hand-paper-o pl-2 pr-2" aria-hidden="true"> - Tópico</i>
                    <i class="fa fa-fire pl-2 pr-2" aria-hidden="true"> - Aromático</i>
                    <i class="fa fa-tint pl-2 pr-2" aria-hidden="true"> - Interno</i>
                  </div>
                </div>  <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Benefícios primários</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                      <?php echo htmlspecialchars( $blends["desbenefit"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div>  <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Informações de segurança</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                       <?php echo htmlspecialchars( $blends["dessecurity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div> <!-- Fim cartão -->
                
              </div>
              
            </div>
          </div>
        </section> <!-- Fim seção Detalhes do Blend -->

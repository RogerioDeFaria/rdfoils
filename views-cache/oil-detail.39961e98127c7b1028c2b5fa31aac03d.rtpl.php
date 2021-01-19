<?php if(!class_exists('Rain\Tpl')){exit;}?>        
        <section id="home"> <!-- Início seção home  -->
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-3">
                <div class="align-self-center text-center">
                  <img src="<?php echo htmlspecialchars( $oils["desphoto2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid w-75">
                </div>
              </div>
              <div class="col-md-6 align-self-center text-center">
                <h4><?php echo htmlspecialchars( $oils["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                <h4><em>(<?php echo htmlspecialchars( $oils["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>)</em></h4><br>
                <h6>Nome científico: <em><?php echo htmlspecialchars( $oils["desscientificname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></em></h6>
              </div>
              <div class="col-md-3">
                <div class="align-self-center text-center">
                  <img src="<?php echo htmlspecialchars( $oils["desphoto3"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid w-75">
                </div>
              </div>
            </div>
          </div>
          
        </section> <!-- Fim seção home  -->
        
        <section class="caixa"> <!-- Início seção Detalhes do Óleo -->
          <div class="container">
            <div class="row">

              <div class="card-columns">
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Descrição</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text"><?php echo htmlspecialchars( $oils["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                  </div>
                </div> <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Fatos rápidos</h5>
                  <div class="card-body text-coffee">
                    <ul class="list-group list-group-flush">
                       <li class="list-group-item">
                         <strong>Método de extração: </strong> <?php echo htmlspecialchars( $oils["desextrmethod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                       </li>
                       <li class="list-group-item">
                         <strong>Origem do óleo: </strong> 
                           <?php echo htmlspecialchars( $oils["desorigin"], ENT_COMPAT, 'UTF-8', FALSE ); ?> 
                       </li>
                       <li class="list-group-item">
                         <strong>Métodos de aplicação:</strong><br>
                           Aromático:  /  Tópico:  /  Interno:<br>
                           <?php if( $oils["inaromatic_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?>  /  
                           <?php if( $oils["intopical_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?> /
                           <?php if( $oils["internal_use"]>0 ){ ?> Sim <?php }else{ ?> Não <?php } ?>

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
                          <?php echo htmlspecialchars( $oils["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

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
                      : <?php echo htmlspecialchars( $oils["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <br> 
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
                      <?php echo htmlspecialchars( $oils["desbenefit"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div>  <!-- Fim cartão -->
                
                <div class="card border-secondary align-self-top text-center">
                  <h5 class="card-header">Informações de segurança</h5>
                  <div class="card-body text-coffee">
                    <p class="card-text">
                       <?php echo htmlspecialchars( $oils["dessecurity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </p>
                  </div>
                </div> <!-- Fim cartão -->
                
              </div>
              
            </div>
          </div>
        </section> <!-- Fim seção Detalhes do Óleo -->

<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Blends
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/blends">Blends</a></li>
    <li class="active"><a href="/admin/blendfacts/<?php echo htmlspecialchars( $blendfacts["idblend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Fatos do blend</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Fatos do blend</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">          
          <ul class="list-group">
            <br><strong>Código / Nome do Blend em Inglês</strong>
            <li class="list-group-item">
                <?php echo htmlspecialchars( $blendfacts["idblend"], ENT_COMPAT, 'UTF-8', FALSE ); ?> &nbsp; - &nbsp;
                <?php echo htmlspecialchars( $blendfacts["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Nome do Blend em Português</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Componentes</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["descomponents"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Descrição do produto</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Diluição</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["desdilution"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Informações de segurança</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["dessecurity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Aplicações</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Tipo / Benefícios primários</strong>
            <li class="list-group-item">
                <?php echo htmlspecialchars( $blendfacts["desbenefittype"], ENT_COMPAT, 'UTF-8', FALSE ); ?> &nbsp; - &nbsp;
                <?php echo htmlspecialchars( $blendfacts["desbenefit"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Usos primários comuns</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $blendfacts["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Usos: Aromático? - Tópico? - Interno?</strong>
            <li class="list-group-item">
                <?php if( $blendfacts["inaromatic_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?> 
                &nbsp; - &nbsp;
                <?php if( $blendfacts["intopical_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?> 
                &nbsp; - &nbsp;
                <?php if( $blendfacts["internal_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?>

            </li>
          </ul>

        </div>
        <!-- /.box-body -->
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
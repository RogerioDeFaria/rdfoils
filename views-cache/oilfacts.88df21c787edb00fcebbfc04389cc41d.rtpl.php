<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Óleos
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/oils">Óleos</a></li>
    <li class="active"><a href="/admin/oilfacts/<?php echo htmlspecialchars( $oilfacts["idoil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Fatos do óleo</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Fatos do óleo</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">          
          <ul class="list-group">
            <br><strong>Código / Nome do Óleo em Inglês</strong>
            <li class="list-group-item">
                <?php echo htmlspecialchars( $oilfacts["idoil"], ENT_COMPAT, 'UTF-8', FALSE ); ?> &nbsp; - &nbsp;
                <?php echo htmlspecialchars( $oilfacts["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Nome do Óleo em Português</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Nome científico</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desscientificname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Nome popular</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["descommonname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Família botânica</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desfamily"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Orígem do óleo</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desorigin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Método de extração</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desextrmethod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Descrição do produto</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Diluição</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desdilution"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Informações de segurança</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["dessecurity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Aplicações</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Tipo / Benefícios primários</strong>
            <li class="list-group-item">
                <?php echo htmlspecialchars( $oilfacts["desbenefittype"], ENT_COMPAT, 'UTF-8', FALSE ); ?> &nbsp; - &nbsp;
                <?php echo htmlspecialchars( $oilfacts["desbenefit"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Usos primários comuns</strong>
            <li class="list-group-item"><?php echo htmlspecialchars( $oilfacts["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            <br><strong>Usos: Aromático? - Tópico? - Interno?</strong>
            <li class="list-group-item">
                <?php if( $oilfacts["inaromatic_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?> 
                &nbsp; - &nbsp;
                <?php if( $oilfacts["intopical_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?> 
                &nbsp; - &nbsp;
                <?php if( $oilfacts["internal_use"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?>

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
<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Blends
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Blends</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/blends/<?php echo htmlspecialchars( $blends["idblend"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desenglishname">Nome do Blend em Inglês</label>
              <input type="text" class="form-control" id="desenglishname" name="desenglishname" placeholder="Digite o nome do Blend em Inglês" value="<?php echo htmlspecialchars( $blends["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="desportuguesename">Nome do Blend em Português</label>
              <input type="text" class="form-control" id="desportuguesename" name="desportuguesename" placeholder="Digite o nome do Blend em Português" value="<?php echo htmlspecialchars( $blends["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
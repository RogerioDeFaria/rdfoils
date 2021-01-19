<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Condições
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Condições</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/conditions/<?php echo htmlspecialchars( $conditions["idcondition"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desconditionname">Condição</label>
              <input type="text" class="form-control" id="desconditionname" name="desconditionname" placeholder="Digite o nome da condição" value="<?php echo htmlspecialchars( $conditions["desconditionname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="description">Descrição</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição da condição" value="<?php echo htmlspecialchars( $conditions["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="desprimaryuses">Soluções simples</label>
              <input type="text" class="form-control" id="desprimaryuses" name="desprimaryuses" placeholder="Digite a solução simples" value="<?php echo htmlspecialchars( $conditions["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="desapplications">Métodos de aplicação</label>
              <input type="text" class="form-control" id="desapplications" name="desapplications" placeholder="Digite os métodos de aplicação" value="<?php echo htmlspecialchars( $conditions["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="desURL">URL</label>
              <input type="text" class="form-control" id="desURL" name="desURL" placeholder="Digite a URL" value="<?php echo htmlspecialchars( $conditions["desURL"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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
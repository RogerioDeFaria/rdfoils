<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Condições
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/conditions">Condições</a></li>
    <li class="active"><a href="/admin/conditions/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova Condição</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/conditions/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desconditionname">Condição</label>
              <input type="text" class="form-control" id="desconditionname" name="desconditionname" placeholder="Digite o nome da condição">
              <label for="description">Descrição</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição da condição">
              <label for="desprimaryuses">Soluções simples</label>
              <input type="text" class="form-control" id="desprimaryuses" name="desprimaryuses" placeholder="Digite a solução simples">
              <label for="desapplications">Métodos de aplicação</label>
              <input type="text" class="form-control" id="desapplications" name="desapplications" placeholder="Digite os métodos de aplicação">
              <label for="desURL">URL</label>
              <input type="text" class="form-control" id="desURL" name="desURL" placeholder="Digite a URL">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->